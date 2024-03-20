<?php

namespace App\Http\Controllers;

use App\Models\HomeworkRecord;
use App\Models\RegularUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeWorkController extends Controller
{
    public function index()
    {
        $user = Auth::guard('regular_user')->user();
        return view('frontend.homework.homework', compact('user'));
    }

    public function submit_homework(Request $request)
    {

        if ($request->homework != null && $request->selected_course != null) {

            $user = RegularUser::findOrFail($request->id);

            $submit = HomeworkRecord::create([
                "user_whatsapp" => $user->whatsapp,
                "user_id" => $user->id,
                "user_status" => $user->status,
                "selected_course" => $request->selected_course , 
                "home_work_link" => $request->homework,
            ]);

            if ($submit) {
                $notification = array(
                    'message' => 'Submitted Successfully , :)',
                );
                return back()->with($notification);
            } else {
                $notification = array(
                    'message' => 'Someting Error Happend',
                );
                return back()->with($notification);
            }
        } else {

            $notification = array(
                'message' => 'Please Select Your Course and Insert Your Homework Link',
            );
            return back()->with($notification);
        }
    }
}
