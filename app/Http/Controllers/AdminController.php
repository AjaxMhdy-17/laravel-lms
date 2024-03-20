<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();

        if($admin == null){
            return view('frontend.auth.admin_login');
        }
        else{
            return redirect()->route('admin_dashboard');
        }
        
    }


    public function register_view(Request $request)
    {

        $admin = Auth::guard('admin')->user();

        if($admin == null){
            return view('frontend.auth.admin_register');
        }
        else{
            return redirect()->route('admin_dashboard');
        }
       
    }

    public function register(Request $request)
    {

    
        $generate_user_id = random_int(100000, 999999);

        Admin::insert([
            'whatsapp' => $request->whatsapp,
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_id' => $generate_user_id,
            'reference_id' => $request->code,
            'created_at' => Carbon::now() 
        ]);


        $notification = array(
            'message' => 'Admin Registration Successfully',
        );


        return redirect()->route('admin_login_form')->with($notification);
    }

    public function login(LoginRequest $request)
    {
        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password']
        ];
        if (Auth::guard('admin')->attempt($data)) {

            $notification = array(
                'message' => 'Admin Login Successfully',
            );

            return redirect()->route('admin_dashboard')->with($notification);
        } else {
            $notification = array(
                'message' => 'Invalid Credentials',
            );
            return back()->with($notification);
        }
    }

    public function dashboard()
    {
        return view('frontend.admin.admin_dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        $notification = array(
            'message' => 'Logged out',
        );
        return redirect()->route('admin_login_form')->with($notification);
    }
}
