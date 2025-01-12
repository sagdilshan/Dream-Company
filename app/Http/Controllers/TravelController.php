<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
