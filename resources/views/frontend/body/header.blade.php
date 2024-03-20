<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="edutim,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">
    <title>{{config('global.app.WebSiteName')}}</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/bicon/css/bicon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/themify/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/woocommerce/woocommerce-layouts.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/woocommerce/woocommerce-small-screen.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/woocommerce/woocommerce.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendors/owl/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">



    <style>
        .toast-success {
            background-color: greenyellow !important;
        }

        .toast-error {
            background-color: gray !important;
        }

        .toast-message {
            color: black;
        }
    </style>


</head>

<body>

    <header>
        <div class="site-navigation main_menu nav-tp" id="mainmenu-area">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.htnl">
                        <img src="{{asset('assets/images/logo.webp')}}" alt="logo" width="100" height="60">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav ml-auto">


                            @auth('regular_user')

                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('courses_page') }}">My learning</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('homework_page') }}">Home work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Watching video</a>
                                
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link" href="#">Air drop and doller earn</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('regular_user_profile') }}">profile setting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('regular_user_logout') }}">logout</a>
                            </li>

                            
                        
                            @endauth

                            
                            @guest('regular_user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('regular_user_login_form') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin_login_form') }}">Admin Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('subadmin_login_form') }}">SubAdmin Login</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('regular_user_register_form') }}">Register</a>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>