@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>User Dashboard</h1>
                    <!-- <h4>login user name {{Auth::guard('regular_user')->user()->name}}</h4> -->

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">{{Auth::guard('regular_user')->user()->email}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('regular_user_profile')}}">
                                profile 
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('regular_user_logout')}}">
                                logout 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@stop