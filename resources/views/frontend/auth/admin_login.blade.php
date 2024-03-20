@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>Admin Login</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item">/</li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                    <h2 class="font-weight-bold mb-4">Admin Login</h2>
                    <form action="{{ route('admin_login') }}" class="form" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <!-- <input type="email" class="form-control" id="email" name="email" required> -->
                            <input class="form-control" id="email" name="email">
                            @error('email')
                            <div style="color : red">{{$message}}</div>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <!-- <input type="password" class="form-control" id="password" name="password" required> -->
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                            <div style="color : red">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </form>
                    <div class="mt-3">
                        <p><a href="{{ route('admin_register_form') }}">Register First</a></p>
                        <p><a href="#">Lost your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop