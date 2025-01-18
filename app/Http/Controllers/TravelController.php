<?php

namespace App\Http\Controllers;

use App\Models\HireQuotationModel;
use App\Models\InquireModel;
use App\Models\TravelCustomerModel;
use App\Models\User;
use App\Models\VehicleInfoModel;
use App\Models\VehicleModelsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class TravelController extends Controller
{
    public function TravelDashboard()
    {

        // $fakeTotalcustomers = 0;
        // $realTotaladmins = User::where('role', 'admin')->where('status', 'active')->count();
        // $totaladmins = $fakeTotalcustomers + $realTotaladmins;
        // $formattedTotaladmins = number_format($totaladmins);


        // $fakeTotalcustomers = 0;
        // $realTotalcustomers = CustomerModel::count();
        // $totalcustomers = $fakeTotalcustomers + $realTotalcustomers;
        // $formattedTotalcustomers = number_format($totalcustomers);


        // $fakePending_project = 0;
        // $realPending_project = ProjectModel::where('project_status', 'pending')->count();
        // $totalPending_project = $fakePending_project + $realPending_project;
        // $formattedPending_project = number_format($totalPending_project);


        // $fakeCompleted_project = 0;
        // $realCompleted_project = ProjectModel::where('project_status', 'completed')->count();
        // $totalCompleted_project = $fakeCompleted_project + $realCompleted_project;
        // $formattedCompleted_project = number_format($totalCompleted_project);


        // $pFeeTotal = ProjectModel::where('project_status', 'completed')->sum('p_fee');

        // $advanceFeeTotal = ProjectModel::whereIn('project_status', ['canceled', 'pending'])->sum('advance_fee');

        // $totalPrice = $pFeeTotal + $advanceFeeTotal;


        // $formattedPrice = number_format($totalPrice, 0, '.', ',');


        // $all_staff = StaffModel::where('status', 'work')
        //     ->count();

        // $all_feedbacks = FeedbackModel::where('status', 'show')
        //     ->count();

        // $all_inquire = InquireModel::where('status', 'new')
        //     ->count();


        // $pending_project = ProjectModel::where('project_status', 'pending')
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        return view('travel.index');
        // compact('pending_project', 'all_inquire', 'all_staff', 'all_feedbacks', 'formattedTotaladmins', 'formattedPrice', 'formattedTotalcustomers', 'formattedPending_project', 'formattedCompleted_project'));
    }

    public function TravelLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function TravelUpdatePassword(Request $request)
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

    public function TravelProfileStore(Request $request)
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

    public function TravelProfile()
    {
        return view('travel.profile');
    }

    public function TravelInquire()
    {
        $allinquir = InquireModel::orderBy('created_at', 'desc')
            ->where('status', 'new')
            ->whereIn('department', ['default', 'travel'])
            ->get();
        return view('travel.inquire', compact('allinquir'));
    }

    public function TravelInquireStatus($id)
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

    public function TravelClient()
    {
        $allclient = TravelCustomerModel::orderBy('created_at', 'desc')
            ->get();
        return view('travel.client.all-client', compact('allclient'));
    }

    public function TravelClientStore(Request $request)
    {
        $validatedData = $request->validate([
            'cus_name' => 'required|string|max:40',
            'email' => 'required|string|max:24',
        ]);


        $custome = new TravelCustomerModel();
        $custome->cus_name = $validatedData['cus_name'];
        $custome->email = $validatedData['email'];
        $custome->address = $request->address;
        $custome->created_by = Auth::user()->id;
        $custome->phone = $request->phone;
        $custome->nic = $request->nic;
        $custome->passport = $request->passport;


        $custome->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Customer Listed',
            'alert-type' => 'success'
        );

        // return redirect()->back()->with($notification);
        return redirect()->route('travel.client')->with($notification);
    }

    public function TravelEditCustomer($id)
    {
        $ucustomer = TravelCustomerModel::findOrFail($id);
        return view('travel.client.edit-client', compact('ucustomer'));
    }

    public function TravelUpdateCustomer(Request $request)
    {
        $pid = $request->id;
        $ucustomer = TravelCustomerModel::findOrFail($pid);


        // Update other fields
        $ucustomer->cus_name = $request->cus_name;
        $ucustomer->email = $request->email;
        $ucustomer->address = $request->address;
        $ucustomer->phone = $request->phone;
        $ucustomer->nic = $request->nic;
        $ucustomer->passport = $request->passport;

        $ucustomer->updated_by = Auth::user()->id;



        // Save the changes to the database
        $ucustomer->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Client Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('travel.client')->with($notification);
    }


    public function TravelQuotation(Request $request)
    {
        $hireq = HireQuotationModel::orderBy('created_at', 'desc')
        ->where('date_time', '>=', Carbon::today())
            ->get();
        $vehicleData = DB::table('vehicle_info')->get();

        $vehicleModels = VehicleModelsModel::all();



        return view('travel.quotation.quotation', compact('vehicleData', 'hireq','vehicleModels'));
    }


    public function TravelVehicleModel(Request $request)
    {
        $modelname = VehicleModelsModel::orderBy('created_at', 'desc')
            ->get();



        return view('travel.vehicle.vehicle_model' , compact('modelname'));
    }

    public function VehicleModelStore(Request $request)
    {
        $validatedData = $request->validate([
            'model_name' => 'required|string|max:20',
            'non_ac_price' => 'required|string|max:20',
            'with_ac_price' => 'required|string|max:20',

        ]);


        $models = new VehicleModelsModel();
        $models->model_name = $validatedData['model_name'];
        $models->non_ac_price = $validatedData['non_ac_price'];
        $models->with_ac_price = $validatedData['with_ac_price'];

        $models->created_by = Auth::user()->id;


        $models->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Vehicle Models Listed',
            'alert-type' => 'success'
        );

        // return redirect()->back()->with($notification);
        return redirect()->route('travel.vehicle.model')->with($notification);
    }



    public function TravelVehicleInfo()
    {
        $vehiview = VehicleInfoModel::orderBy('created_at', 'desc')
            ->where('status', 'active')
            ->get();

        return view('travel.vehicle.vehicle', compact('vehiview'));
    }


    public function TravelVehicleStore(Request $request)
    {
        $validatedData = $request->validate([
            'owner_name' => 'required|string|max:24',
            'nic' => 'required|string|max:24',
        ]);


        $vehicle = new VehicleInfoModel();
        $vehicle->owner_name = $validatedData['owner_name'];
        $vehicle->nic = $validatedData['nic'];
        $vehicle->phone = $request->phone;
        $vehicle->created_by = Auth::user()->id;
        $vehicle->address = $request->address;
        $vehicle->v_model = $request->v_model;
        $vehicle->v_number = $request->v_number;
        $vehicle->ac_condition = $request->ac_condition;
        $vehicle->licence_no = $request->licence_no;
        $vehicle->v_licence_expire = $request->v_licence_expire;
        $vehicle->no_seats = $request->no_seats;
        $vehicle->wo_ac = $request->wo_ac;
        $vehicle->wi_ac = $request->wi_ac;
        $vehicle->additional = $request->additional;

        if ($request->file('owner_photo')) {
            $file = $request->file('owner_photo');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/owner_photo'), $filename);
            $vehicle['owner_photo'] = $filename;
        }

        if ($request->hasFile('vehicle_photo')) {
            foreach ($request->file('vehicle_photo') as $image) {
                $filename = date('Ymd') . '_' . $image->getClientOriginalName(); // Generate unique filename
                $image->move(public_path('upload/vehicle_images'), $filename); // Move image to storage directory
                $imagePaths[] = 'upload/vehicle_images/' . $filename; // Store image path in an array
            }
            $vehicle['vehicle_photo'] = json_encode($imagePaths); // Save array of image paths as JSON string in database
        }

        if ($request->file('nic_front')) {
            $file = $request->file('nic_front');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/nic_photo'), $filename);
            $vehicle['nic_front'] = $filename;
        }

        if ($request->file('nic_back')) {
            $file = $request->file('nic_back');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/nic_photo'), $filename);
            $vehicle['nic_back'] = $filename;
        }

        if ($request->file('licence_front')) {
            $file = $request->file('licence_front');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/licence_photo'), $filename);
            $vehicle['licence_front'] = $filename;
        }

        if ($request->file('licence_back')) {
            $file = $request->file('licence_back');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/licence_photo'), $filename);
            $vehicle['licence_back'] = $filename;
        }

        if ($request->file('cr_photo')) {
            $file = $request->file('cr_photo');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/vehicle_images'), $filename);
            $vehicle['cr_photo'] = $filename;
        }

        if ($request->file('rev_licence')) {
            $file = $request->file('rev_licence');
            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/vehicle_images'), $filename);
            $vehicle['rev_licence'] = $filename;
        }


        $vehicle->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'New Vehicle Listed',
            'alert-type' => 'success'
        );

        // return redirect()->back()->with($notification);
        return redirect()->route('travel.vehicle.info')->with($notification);
    }


    public function HireQuotationStore(Request $request)
    {
        $hireq = new HireQuotationModel();
        $hireq->cus_name = trim($request->cus_name);
        $hireq->phone = trim($request->phone);
        $hireq->vehicel_model = trim($request->vehicel_model);
        $hireq->v_number = trim($request->v_number);
        $hireq->ac_condition = trim($request->ac_condition);
        $hireq->type = trim($request->type);
        $hireq->destination = trim($request->destination);
        $hireq->no_km = trim($request->no_km);
        $hireq->date_time = trim($request->date_time);
        $hireq->no_night = trim($request->no_night);
        // $hireq->need_to_be_night = trim($request->need_to_be_night);
        $hireq->need_to_be_night = $request->has('need_to_be_night') ? 'yes' : 'no';

        $hireq->additional = trim($request->additional);
        $hireq->km_cost = trim($request->km_cost);
        $hireq->ac_cost = trim($request->ac_cost);
        $hireq->n_charges = trim($request->n_charges);
        $hireq->ave_per_km = trim($request->ave_per_km);
        // $hireq->advance = trim($request->advance);
        $hireq->total = trim($request->total);
        $hireq->created_by = Auth::user()->id;


        $hireq->save();

        $notification = array(
            'message' => 'New Quotation Listed',
            'alert-type' => 'success'
        );

        // return redirect()->route('admin.project')->with($notification);
        return redirect()->back()->with($notification);

    }

}
