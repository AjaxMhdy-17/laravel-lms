<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCoursesController extends Controller
{
    public function index(){
        return view('frontend.course.course');
    }
}
