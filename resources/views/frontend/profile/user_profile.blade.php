@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>User Profile</h1>
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
                <div class="single-course-details">
                    <h4 class="course-title mb-4">Profile</h4>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Your Balance </h5>
                                    
                                    <h3 class="card-text">{{$user->balance}} TK</h3>
                                    <P>Your Can Withdraw All Balance By Mobile Banking</P>
                                    <a href="#" class="btn btn-primary">Withdraw</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Your Referral Code</h5>
                                    <h3 class="card-text">{{$user->user_id}}</h3>
                                    <p>https://{{config('global.app.ReferralURL')}}/sign-up/{{$user->user_id}}</p>
                                    <a href="#" class="btn btn-primary">Copy Link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" value="{{ $user->last_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number/WhatsApp</label>
                            <input type="text" class="form-control" id="phone" value="{{ $user->whatsapp }}">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea rows="3" class="form-control" id="bio"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="d-block">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Profile Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
