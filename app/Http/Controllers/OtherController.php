<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\FeedbackModel;
use App\Models\InquireModel;
use App\Models\ProjectModel;
use App\Models\StaffModel;
use App\Models\User;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function IndexPage()
    {
        $allfeedback = FeedbackModel::orderBy('id', 'asc')->take(5)->inRandomOrder()->get();


        $fakeTotalcustomers = 120;
        $realTotalcustomers = User::where('role', 'guest')->where('status', 'active')->count();
        $totalcustomers = $fakeTotalcustomers + $realTotalcustomers;
        $formattedTotalcustomers = number_format($totalcustomers);

        $fakePending_project = 56;
        $realPending_project = ProjectModel::where('project_status', 'completed')->count();
        $totalPending_project = $fakePending_project + $realPending_project;
        $formattedPending_project = number_format($totalPending_project);

        $all_staff = StaffModel::where('status', 'work')
            ->count();

        return view('it-department', compact('formattedTotalcustomers', 'formattedPending_project', 'all_staff', 'allfeedback'));
    }

    public function MainIndexPage()
    {
        $allfeedback = FeedbackModel::orderBy('id', 'asc')->take(5)->inRandomOrder()->get();



        return view('welcome', compact('allfeedback'));
    }

    public function TravelPage()
    {
        $allfeedback = FeedbackModel::orderBy('id', 'asc')->take(5)->inRandomOrder()->get();



        return view('travel-department', compact('allfeedback'));
    }

    public function InquireStore(Request $request)
    {
        $inquir = new InquireModel();
        $inquir->name = trim($request->name);
        $inquir->email = trim($request->email);
        $inquir->subject = trim($request->subject);
        $inquir->message = trim($request->message);
        $inquir->mobile = trim($request->mobile);
        $inquir->department = trim($request->department);

        $inquir->save();

        $notification = array(
            'message' => 'Message send',
            'alert-type' => 'success'
        );

        // return redirect()->route('contact')->with($notification);
        return back()->with($notification);


    }

    public function AboutPage()
    {
        $fakeTotalcustomers = 120;
        $realTotalcustomers = User::where('role', 'guest')->where('status', 'active')->count();
        $totalcustomers = $fakeTotalcustomers + $realTotalcustomers;
        $formattedTotalcustomers = number_format($totalcustomers);

        $fakePending_project = 56;
        $realPending_project = ProjectModel::where('project_status', 'completed')->count();
        $totalPending_project = $fakePending_project + $realPending_project;
        $formattedPending_project = number_format($totalPending_project);

        $all_staff = StaffModel::where('status', 'work')
            ->count();

        $staffs = StaffModel::where('status', 'work')
        ->orderBy('role_value', 'desc')
            ->get();


        return view('about', compact('formattedTotalcustomers', 'staffs', 'formattedPending_project', 'all_staff'));

    }

    public function getProjectName()
    {
        // Fetch the first project from the database
        $project = ProjectModel::first();  // Adjust this logic as needed

        if ($project) {
            return response()->json(['p_name' => $project->p_name]);  // Return p_name field directly
        } else {
            return response()->json(['error' => 'No project found'], 404);
        }
    }

    public function PortfolioPage()
    {


        $projectsviews = ProjectModel::where('project_status', 'completed')
        ->orderBy('id', 'desc')
            ->get();


        return view('portfolio', compact('projectsviews'));

    }



}
