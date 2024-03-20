<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\RegularUser;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function users_list()
    {

        return view('frontend.admin.users.user_list');
    }


    public function user_info(Request $requeset)
    {
        // $user = $admin;
        $id = $requeset->id;

        $user = RegularUser::findOrFail($id);

        // dd($user);

        if ($user) {

            $reffered_user = RegularUser::where('reference_by', $user->user_id)->get();

            return view('frontend.admin.users.user_info', compact(['user', 'reffered_user']));
        } else {
            return response()->json(['message' => 'error']);
        }
    }

    public function user_referrel(Request $request)
    {
        // $user = $admin;
        $id = $request->id;

        $user = RegularUser::findOrFail($id);

        // dd($user);

        if ($user) {

            $reffered_user = RegularUser::where('reference_by', $user->user_id)->get();

            return view('frontend.profile.Referrral', compact(['user', 'reffered_user']));
        } else {
            return response()->json(['message' => 'error']);
        }
    }
}
