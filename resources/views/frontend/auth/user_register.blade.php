@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>User Register</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">/</li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="space-3 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow-lg p-5">
                    <h2 class="font-weight-bold mb-4">Register</h2>
                    <form action="{{ route('regular_user_register') }}" class="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp Number *</label>
                            <!-- <input type="text" class="form-control" name="whatsapp" id="whatsapp" required> -->
                            <input type="text" class="form-control" name="whatsapp" id="whatsapp">
                            @error('whatsapp')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username *</label>
                            <!-- <input type="text" class="form-control" name="username" id="username" required> -->
                            <input type="text" class="form-control" name="username" id="username">
                            @error('username')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                            @error('first_name')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                            @error('last_name')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email address *</label>
                            <!-- <input type="email" class="form-control" name="email" id="email" required> -->
                            <input type="email" class="form-control" name="email" id="email">
                            @error('email')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password *</label>
                            <!-- <input type="password" class="form-control" name="password" id="password" required> -->
                            <input type="password" class="form-control" name="password" id="password">
                            @error('password')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="code">Referral code *</label>
                            <!-- <input type="text" class="form-control" name="code" id="code" required> -->
                            <input type="text" class="form-control" name="code" id="code">
                            @error('code')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                    <div class="mt-3">
                        <p>Already have an account? <a href="{{ route('regular_user_login_form') }}">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop