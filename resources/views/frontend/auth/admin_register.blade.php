@extends('layouts.app')

@section('auth_form')


<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>Register</h1>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            Register
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="space-3 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="woocommerce-notices-wrapper"></div>
                <h2 class="font-weight-bold mb-4">Register</h2>
                <form action="{{route('admin.register')}}" class="woocommerce-form woocommerce-form-login login" method="post">

                    @csrf

                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="whatsapp">What's App Number&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="whatsapp" id="whatsapp">
                    </p>

                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="username">Username&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username">
                    </p>

                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="email">Email address&nbsp;<span class="required">*</span></label>
                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="email">
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                        <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password">
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="code">Referral code&nbsp;<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="code" id="code">
                    </p>
                    <p class="form-row">
                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit">Register</button>
                    </p>

                </form>
                <p class="woocommerce-LostPassword lost_password">
                    <a href="{{route('admin_login_form')}}">Login Here</a>
                </p>
            </div>
        </div>
    </div>
</section>


@stop