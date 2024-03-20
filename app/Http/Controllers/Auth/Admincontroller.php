<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    
    public function login(Request $request){
        return view('frontend/auth/login') ; 
    }

    public function admin_login(Request $request){
        return view('frontend/auth/admin_login') ; 
    }

    public function sub_admin_login(Request $request){
        return view('frontend/auth/sub_admin_login') ; 
    }

    public function register(Request $request){
        return view('frontend/auth/register') ; 
    }

    public function profile(Request $request){
        return view('frontend/profile/user_profile') ; 
    }
}
