<?php

namespace App\Http\Controllers;

use App\Models\InquireModel;
use App\Models\TravelCustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


}
