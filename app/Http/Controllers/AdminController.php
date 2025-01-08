<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\FeedbackModel;
use App\Models\InquireModel;
use App\Models\ProjectModel;
use App\Models\QuotationModel;
use App\Models\StaffModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function AdminDashboard()
    {

        $fakeTotalcustomers = 0;
        $realTotaladmins = User::where('role', 'admin')->where('status', 'active')->count();
        $totaladmins = $fakeTotalcustomers + $realTotaladmins;
        $formattedTotaladmins = number_format($totaladmins);


        $fakeTotalcustomers = 0;
        $realTotalcustomers = CustomerModel::count();
        $totalcustomers = $fakeTotalcustomers + $realTotalcustomers;
        $formattedTotalcustomers = number_format($totalcustomers);


        $fakePending_project = 0;
        $realPending_project = ProjectModel::where('project_status', 'pending')->count();
        $totalPending_project = $fakePending_project + $realPending_project;
        $formattedPending_project = number_format($totalPending_project);


        $fakeCompleted_project = 0;
        $realCompleted_project = ProjectModel::where('project_status', 'completed')->count();
        $totalCompleted_project = $fakeCompleted_project + $realCompleted_project;
        $formattedCompleted_project = number_format($totalCompleted_project);


        $pFeeTotal = ProjectModel::where('project_status', 'completed')->sum('p_fee');

        $advanceFeeTotal = ProjectModel::whereIn('project_status', ['canceled', 'pending'])->sum('advance_fee');

        $totalPrice = $pFeeTotal + $advanceFeeTotal;


        $formattedPrice = number_format($totalPrice, 0, '.', ',');


        $all_staff = StaffModel::where('status', 'work')
            ->count();

        $all_feedbacks = FeedbackModel::where('status', 'show')
            ->count();

        $all_inquire = InquireModel::where('status', 'new')
            ->count();


        $pending_project = ProjectModel::where('project_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.index', compact('pending_project', 'all_inquire', 'all_staff', 'all_feedbacks', 'formattedTotaladmins', 'formattedPrice', 'formattedTotalcustomers', 'formattedPending_project', 'formattedCompleted_project'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function AdminUpdatePassword(Request $request)
    {
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //match the old password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match',
                'alert-type' => 'error'
            );

            return back()->with($notification);

        }

        //update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function AdminProject()
    {
        $completed_project = ProjectModel::whereIn('project_status', ['completed', 'cancel'])
            ->orderBy('updated_at', 'desc')

            ->get();

        $pending_project = ProjectModel::where('project_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        $customers = CustomerModel::all();
        return view('admin.project.all-project', compact('customers', 'completed_project', 'pending_project', 'completed_project'));
    }

    public function AdminFeedback()
    {
        $feedbacks = FeedbackModel::orderBy('created_at', 'desc')
            // ->where('status', 'show')
            ->get();

        return view('admin.feedback.all-feedback', compact('feedbacks'));
    }

    public function AdminStaff()
    {
        $allstaff = StaffModel::orderByRaw("CASE WHEN status = 'work' THEN 1 ELSE 0 END DESC")
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.staff.all-staff', compact('allstaff'));
    }

    public function AdminClient()
    {
        $allclient = CustomerModel::orderBy('created_at', 'desc')
            ->get();
        return view('admin.client.all-client', compact('allclient'));
    }

    public function AdminInquire()
    {
        $allinquir = InquireModel::orderBy('created_at', 'desc')
            ->where('status', 'new')
            ->get();
        return view('admin.inquire.all-inquire', compact('allinquir'));
    }
    public function AdminAll()
    {
        $alladmins = User::where('role', 'admin')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.all-admin.all-admin', compact('alladmins'));
    }

    public function AdminProfile()
    {
        return view('admin.profile');
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->nic = $request->nic;
        $data->address = $request->address;


        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AdminClientStore(Request $request)
    {
        $validatedData = $request->validate([
            'cus_name' => 'required|string|max:40',
            'email' => 'required|string|max:24',


        ]);


        $custome = new CustomerModel();
        $custome->cus_name = $validatedData['cus_name'];
        $custome->email = $validatedData['email'];
        $custome->address = $request->address;
        $custome->created_by = Auth::user()->id;
        $custome->phone = $request->phone;
        $custome->nic = $request->nic;

        $custome->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Customer Listed',
            'alert-type' => 'success'
        );

        // return redirect()->back()->with($notification);
        return redirect()->route('admin.client')->with($notification);
    }

    public function AdminFeedbackStore(Request $request)
    {
        $feedbc = new FeedbackModel;
        $feedbc->cus_name = trim($request->cus_name);
        $feedbc->feedback = trim($request->feedback);
        $feedbc->created_by = Auth::user()->id;



        if ($request->file('photo')) {
            $file = $request->file('photo');

            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/feedback_images'), $filename);
            $feedbc['photo'] = $filename;
        }


        $feedbc->save();

        $notification = array(
            'message' => 'Feedback Listed',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.feedback')->with($notification);

    }

    public function AdminStaffStore(Request $request)
    {
        $staf = new StaffModel();
        $staf->e_name = trim($request->e_name);
        $staf->job_role = trim($request->job_role);
        $staf->nic = trim($request->nic);
        $staf->phone = trim($request->phone);
        $staf->address = trim($request->address);
        $staf->email = trim($request->email);
        $staf->join_date = trim($request->join_date);
        $staf->created_by = Auth::user()->id;



        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/staff_images'), $filename);
            $staf['photo'] = $filename;
        }


        $staf->save();

        $notification = array(
            'message' => 'Staff Member Listed',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.staff')->with($notification);

    }

    public function AdminProjectStore(Request $request)
    {
        $projec = new ProjectModel();
        $projec->p_name = trim($request->p_name);
        $projec->s_name = trim($request->s_name);
        $projec->p_link = trim($request->p_link);
        $projec->association = trim($request->association);
        $projec->assign_customer = trim($request->assign_customer);
        $projec->p_fee = trim($request->p_fee);
        $projec->advance_fee = trim($request->advance_fee);
        $projec->s_month = trim($request->s_month);
        $projec->description = trim($request->description);
        $projec->created_by = Auth::user()->id;
        $projec->project_status = trim($request->project_status);


        if (empty($request->f_month)) {
            $projec->f_month = 'Present';
        } else {
            $projec->f_month = $request->f_month;
        }



        if ($request->file('thumb')) {
            $file = $request->file('thumb');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/project_images'), $filename);
            $projec['thumb'] = $filename;
        }

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $image) {
                $filename = date('Ymd') . '_' . $image->getClientOriginalName(); // Generate unique filename
                $image->move(public_path('upload/project_images'), $filename); // Move image to storage directory
                $imagePaths[] = 'upload/project_images/' . $filename; // Store image path in an array
            }
            $projec['photo'] = json_encode($imagePaths); // Save array of image paths as JSON string in database
        }


        $projec->save();

        $notification = array(
            'message' => 'New Project Listed',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.project')->with($notification);

    }

    public function AdminStore(Request $request)
    {
        // Check if the logged-in user's email is 'gdyya@gmail.com'
        // only can be added admins in gayathra dilshan

        if (Auth::user()->email !== 'gayathradilshan1@gmail.com') {
            $notification = array(
                'message' => 'Unauthorized Activity.',
                'alert-type' => 'error'
            );

            return redirect()->route('admin.all')->with($notification);
        }

        $admins = new User;
        $admins->name = trim($request->name);
        $admins->email = trim($request->email);
        $admins->username = trim($request->username);
        $admins->created_by = Auth::user()->id;
        $admins->nic = trim($request->nic);
        $admins->address = trim($request->address);
        $admins->phone = trim($request->phone);

        $admins->password = Hash::make($request->password);
        $admins->role = trim($request->role);


        $admins->save();

        $notification = array(
            'message' => 'New Admin Listed',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all')->with($notification);

    }

    public function AdminInquireStatus($id)
    {
        $inqu = InquireModel::find($id);

        if ($inqu) {
            $inqu->update(['status' => 'replied']);
            $notification = array(
                'message' => 'Inquire Status Updated',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        $notification = array(
            'message' => 'Inquire Status Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function EditAdmin($id)
    {
        $uadmin = User::findOrFail($id);
        $statuss = User::distinct()->pluck('status'); // Assuming Role is your model for roles

        return view('admin.all-admin.edit-admin', compact('uadmin', 'statuss'));
    }

    public function EditCustomer($id)
    {
        $ucustomer = CustomerModel::findOrFail($id);
        return view('admin.client.edit-client', compact('ucustomer'));
    }

    public function EditProject($id)
    {
        $uproject = ProjectModel::findOrFail($id);
        if ($uproject->project_status != 'pending') {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'This project passed pending step',
                'alert-type' => 'error'
            ];
            return redirect()->route('admin.project')->with($notification);
        }

        return view('admin.project.edit-project', compact('uproject'));
    }

    public function EditStaff($id)
    {
        $ustaff = StaffModel::findOrFail($id);

        $statuss = StaffModel::distinct()->pluck('status'); // Assuming Role is your model for roles

        return view('admin.staff.edit-staff', compact('ustaff', 'statuss'));
    }

    public function UpdateProject(Request $request)
    {
        $pid = $request->id;
        $uproject = ProjectModel::findOrFail($pid);


        // Update other fields
        $uproject->p_name = $request->p_name;
        $uproject->s_name = $request->s_name;
        $uproject->p_link = $request->p_link;
        $uproject->f_month = $request->f_month;
        $uproject->project_status = $request->project_status;
        $uproject->description = $request->description;
        $uproject->updated_by = Auth::user()->id;



        // Save the changes to the database
        $uproject->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Project Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.project')->with($notification);
    }

    public function UpdateStaff(Request $request)
    {
        $pid = $request->id;
        $ustaff = StaffModel::findOrFail($pid);


        // Update other fields
        $ustaff->e_name = $request->e_name;
        $ustaff->job_role = $request->job_role;
        $ustaff->nic = $request->nic;
        $ustaff->phone = $request->phone;
        $ustaff->email = $request->email;
        $ustaff->address = $request->address;
        $ustaff->status = $request->status;
        $ustaff->resigned_date = $request->resigned_date;
        $ustaff->updated_by = Auth::user()->id;



        // Save the changes to the database
        $ustaff->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Staff Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.staff')->with($notification);
    }

    public function UpdateCustomer(Request $request)
    {
        $pid = $request->id;
        $ucustomer = CustomerModel::findOrFail($pid);


        // Update other fields
        $ucustomer->cus_name = $request->cus_name;
        $ucustomer->email = $request->email;
        $ucustomer->address = $request->address;
        $ucustomer->phone = $request->phone;
        $ucustomer->nic = $request->nic;
        $ucustomer->updated_by = Auth::user()->id;



        // Save the changes to the database
        $ucustomer->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Client Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.client')->with($notification);
    }

    public function UpdateAdmin(Request $request)
    {

        // Check if the logged-in user's email is 'gdyya@gmail.com'
        if (Auth::user()->email !== 'gayathradilshan1@gmail.com') {
            $notification = array(
                'message' => 'Unauthorized Activity.',
                'alert-type' => 'error'
            );

            return redirect()->route('admin.all')->with($notification);
        }

        $pid = $request->id;
        $uadmin = User::findOrFail($pid);


        // Update other fields
        $uadmin->name = $request->name;
        $uadmin->username = $request->username;
        $uadmin->nic = $request->nic;
        $uadmin->email = $request->email;
        $uadmin->address = $request->address;
        $uadmin->status = $request->status;
        $uadmin->phone = $request->phone;
        $uadmin->updated_by = Auth::user()->id;


        // Save the changes to the database
        $uadmin->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Admin Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.all')->with($notification);
    }

    public function DeleteFeedback($id)
    {
        $feed = FeedbackModel::findOrFail($id);
        // Delete the category's image if it exists
        if ($feed->photo) {
            // Determine the file path
            $imagePath = public_path('upload/feedback_images/' . $feed->photo);

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the category from the database
        $feed->delete();


        $notification = array(
            'message' => 'Feedback Deleted',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }




    public function AdminInvoice($id)
    {
        $project = ProjectModel::findOrFail($id);
        $customers = CustomerModel::all();

        return view('admin.invoice.invoice', compact('project', 'customers'));
    }


    public function AdminQuotation()
    {
        $quotation = QuotationModel::orderBy('created_at', 'desc')
        ->get();

        return view('admin.quotation.quotation', compact('quotation'));
    }



    public function AdminQuotationStore(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'cus_name' => 'required|string|max:255',
            'com_name' => 'nullable|string|max:255',
            'contact' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',

            // ser_name can be nullable, but ser_price is required if ser_name is filled
            'ser_name_1' => 'required|string|max:255',
            'ser_price_1' => 'required|numeric|min:0',


            'additional' => 'nullable|string',
            'service_cost' => 'required|numeric|min:0',
            'tax' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ]);

        // Save the data
        $quota = new QuotationModel();
        $quota->cus_name = trim($request->cus_name);
        $quota->com_name = trim($request->com_name);
        $quota->contact = trim($request->contact);
        $quota->address = trim($request->address);
        $quota->ser_name_1 = trim($request->ser_name_1);
        $quota->ser_price_1 = trim($request->ser_price_1);
        $quota->ser_name_2 = trim($request->ser_name_2);
        $quota->ser_price_2 = trim($request->ser_price_2);
        $quota->ser_name_3 = trim($request->ser_name_3);
        $quota->ser_price_3 = trim($request->ser_price_3);
        $quota->ser_name_4 = trim($request->ser_name_4);
        $quota->ser_price_4 = trim($request->ser_price_4);

        $quota->additional = trim($request->additional);
        $quota->service_cost = trim($request->service_cost);
        $quota->tax = trim($request->tax);
        $quota->total = trim($request->total);

        $quota->created_by = Auth::user()->id;

        $quota->save();

        $notification = array(
            'message' => 'New Quotation Created',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.quotation')->with($notification);
    }


    public function AdminQuotationView($id)
    {
        $quotationss = QuotationModel::findOrFail($id);



        return view('admin.quotation.view-quotation', compact('quotationss' ));

    }


}
