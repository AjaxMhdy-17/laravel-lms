@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>Notifications</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            <li class="breadcrumb-item"><a href="{{route('regular_user_logout')}}">Logout</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-wrapper edutim-course-single">
    <div class="container-fluid">
        <div class="row">
            @include('frontend/profile/profile_card/profile_card')
            <div class="col-lg-8">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title text-white">Notifications</h2>
                    </div>
                    <div class="card-body">
                       Courses
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

