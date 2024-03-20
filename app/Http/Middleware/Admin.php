<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
// use Auth ; 

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('admin')->check()){

            $notification = array(
                'message' => 'Please Login Fast',
            );
    
            return redirect()->route('admin_login_form')->with($notification) ; 
        }

        return $next($request);
    }
}
 