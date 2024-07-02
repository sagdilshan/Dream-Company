<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\FeedbackModel;
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


        return view('admin.index');
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
        return view('admin.project.all-project');
    }

    public function AdminFeedback()
    {
        return view('admin.feedback.all-feedback');
    }

    public function AdminStaff()
    {
        return view('admin.staff.all-staff');
    }

    public function AdminClient()
    {
        return view('admin.client.all-client');
    }

    public function AdminInquire()
    {
        return view('admin.inquire.all-inquire');
    }
    public function AdminAll()
    {
        return view('admin.all-admin.all-admin');
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

}
