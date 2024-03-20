<?php

namespace App\Http\Controllers;

use App\Models\HomeworkRecord;
use App\Models\RegularUser;
use Illuminate\Http\Request;

class AdminHomeworkController extends Controller
{

    public function index()
    {

        $homeworks = HomeworkRecord::all();
        return view('frontend.admin.adminHomework.admin_homework_view', compact('homeworks'));
    }
    public function accepted_homework()
    {
        return view('frontend.admin.adminHomework.admin_accepted_homework');
    }


    public function approve(Request $request, $id )
    {

        // $homeworks = HomeworkRecord::all() ; 
        $homework = HomeworkRecord::find($id);

        if (!$homework) {
            // User not found
            $notification = array(
                'message' => 'Homework not found',
            );
            return back()->with($notification);
        } else {

            $whatsapp = $homework->user_whatsapp ; 
            $user = RegularUser::where('whatsapp',$whatsapp)->first() ;     
            
            $homework->appoved = 1;
            $user->balance = $user->balance + 5 ; 
            $homework->save();
            $user->save() ; 
            // Redirect back with success message
            $notification = array(
                'message' => 'Homework Approve Successfully',
            );
            return back()->with($notification);
        }
    }

    public function decline(Request $request, $id)
    {

        // $homeworks = HomeworkRecord::all() ; 
        $homework = HomeworkRecord::find($id);

        if (!$homework) {
            // User not found
            $notification = array(
                'message' => 'Homework not found',
            );
            return back()->with($notification);
        } else {


            $homework->delete() ; 
            // Redirect back with success message
            $notification = array(
                'message' => 'Homework declined Successfully',
            );
            return back()->with($notification);
        }
    }
}
