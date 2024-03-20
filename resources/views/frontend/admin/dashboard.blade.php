@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>Dashboard</h1>
<!-- 
                   <h1> login admin name {{Auth::guard('admin')->user()->name}}</h1>
                   <h1> login admin name {{Auth::guard('admin')->user()->email}}</h1> -->
                   

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">{{Auth::guard('admin')->user()->email}}</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('admin_logout')}}">
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