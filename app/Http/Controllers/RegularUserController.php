<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\RegisterRequest;
// use App\Http\Requests\Auth\RegisterRequest;
use App\Models\RegularUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegularUserController extends Controller
{
    public function index()
    {

        $user = Auth::guard('regular_user')->user();

        if($user == null ){
            return view('frontend.auth.user_login' , compact('user'));
        }
        else{
            return redirect()->route('regular_user_profile');
        }

    }

    public function register_view(Request $request)
    {
        $user = Auth::guard('regular_user')->user();

        if($user == null){
            return view('frontend.auth.user_register');
        }
        else{
            return redirect()->route('regular_user_profile');
        }

    }

    public function data()
    {
        return view('frontend.profile.Referrral');
    }

    public function register(RegisterRequest $request)
    {

        $generate_user_id = random_int(100000, 999999);

        // $user = User::where('reference_by', $request->code)->first();

        $user = RegularUser::where('user_id', $request->code)->first();

        if ($user === null) {
            $notification = array(
                'message' => 'Please Insert A Valid Referance Number',
            );
            return back()->with($notification);
        } else {

            $whatsapp = RegularUser::where('whatsapp', $request->whatsapp)->first();

            if ($whatsapp === null) {

                // dd($request->all());

                $email = RegularUser::where('email', $request->email)->first();

                if ($email == null) {
                    
                    RegularUser::insert([
                        'whatsapp' => $request->whatsapp,
                        'username' => $request->username,
                        'first_name' => $request->first_name,
                        'last_name' => $request->last_name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'user_id' => $generate_user_id,
                        'reference_by' => $request->code,
                        'created_at' => Carbon::now()
                    ]);
                    $notification = array(
                        'message' => 'User Registration Successfully',
                    );
                    //add balance to the reference_by user after registration Active
                    $user = RegularUser::where('user_id', $request->code)->first();
                    $user->balance = $user->balance + 130.00;
                    $user->save();

                 

                    return redirect()->route('regular_user_login_form')->with($notification);
                } else {
                    $notification = array(
                        'message' => 'Email Already Exists',
                    );
                    return back()->with($notification);
                }
            } else {
                $notification = array(
                    'message' => 'Number Already Exists',
                );
                return back()->with($notification);
            }
        }
    }

    public function login(LoginRequest $request)
    {
        $check = $request->all();
        $data = [
            'email' => $check['email'] ,
            'password' => $check['password']
        ];
        if (Auth::guard('regular_user')->attempt($data)) {

            $notification = array(
                'message' => 'User Login Successfully',
            );

            if (Auth::guard('regular_user')->user()->status != 'active') {
                   
                Auth::guard('regular_user')->logout();
            
                return view('frontend.auth.user_pending');

                
              
            } else {

                return redirect()->route('regular_user_profile')->with($notification);
            }

           
        } 
        else {
            $notification = array(
                'message' => 'Invalid Credentials',
            );
            return back()->with($notification);
        }
    }

    public function dashboard()
    {
        return view('frontend.dashboard.user_dashboard');
    }

    public function logout()
    {
        Auth::guard('regular_user')->logout();
        $notification = array(
            'message' => 'Logged out',
        );
        return redirect()->route('regular_user_login_form')->with($notification);
    }

    public function profile()
    {
        // Get the authenticated regular user
        $user = Auth::guard('regular_user')->user();

        if($user == null){
            return redirect()->route('regular_user_login_form');
        }
        else{
            return view('frontend.profile.user_profile', compact('user'));
        }


        // Pass the user data to the view
    }
 
    public function course()
    {
        // Get the authenticated regular user
        $user = Auth::guard('regular_user')->user();

        // Pass the user data to the view
        return view('frontend.profile.course', compact('user'));
    }

    public function wishlist()
    {
        // Get the authenticated regular user
        $user = Auth::guard('regular_user')->user();

        // Pass the user data to the view
        return view('frontend.profile.wish_list', compact('user'));
    }
    public function notification()
    {
        // Get the authenticated regular user
        $user = Auth::guard('regular_user')->user();

        // Pass the user data to the view
        return view('frontend.profile.notification', compact('user'));
    }
    public function transaction()
    {
        // Get the authenticated regular user
        $user = Auth::guard('regular_user')->user();

        // Pass the user data to the view
        return view('frontend.profile.transaction', compact('user'));
    }

    public function activate_user(Request $request, $id)
    {
        // Find the user by ID
        $user = RegularUser::find($id);

        // Check if user exists
        if (!$user) {
            // User not found
            $notification = array(
                'message' => 'User not found',
            );
            return back()->with($notification);
        }

        // Activate the user
        $user->status = 'active';
        $user->save();

        // Redirect back with success message
        $notification = array(
            'message' => 'User activated successfully',
        );
        return back()->with($notification);
    }

    public function deactivate_user(Request $request, $id)
    {
        // Find the user by ID
        $user = RegularUser::find($id);

        // Check if user exists
        if (!$user) {
            // User not found
            $notification = array(
                'message' => 'User not found',
            );
            return back()->with($notification);
        }

        // Deactivate the user
        $user->status = 'inactive';
        $user->save();

        // Redirect back with success message
        $notification = array(
            'message' => 'User deactivated successfully',
        );
        return back()->with($notification);
    }
      // Show the form for editing the specified resource.


   

}
