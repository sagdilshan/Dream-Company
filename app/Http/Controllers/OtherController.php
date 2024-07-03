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
        return view('welcome');
    }

    public function InquireStore(Request $request)
    {
        $inquir = new InquireModel();
        $inquir->name = trim($request->name);
        $inquir->email = trim($request->email);
        $inquir->subject = trim($request->subject);
        $inquir->message = trim($request->message);
        $inquir->mobile = trim($request->mobile);


        $inquir->save();

        $notification = array(
            'message' => 'Message send',
            'alert-type' => 'success'
        );

        return redirect()->route('contact')->with($notification);

    }
}
