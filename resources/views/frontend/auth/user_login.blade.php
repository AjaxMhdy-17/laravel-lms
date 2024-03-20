@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content text-center">
                    <h1 class="mb-4">User Login</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <form action="{{ route('regular_user_login') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <!-- <input class="form-control" type="email" id="email" name="email" required> -->
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

                        <div class="text-center mt-3">
                            <p class="mb-1">Don't have an account? <a href="{{ route('regular_user_register_form') }}">Register First</a></p>
                            <p class="mb-0"><a href="#">Lost your password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop