@extends('layouts.app')

@section('home_content')

<section class="banner-left bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="banner-content">
                    <span class="subheading">Expert instruction</span>
                    <h1>Convenient easy way of learning new skills!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ab dicta repellendus,
                        beatae dolorem, deserunt quaerat blanditiis inventore magnam perferendis</p>
                    <a href="#" class="btn btn-main"><i class="fa fa-list-ul mr-2"></i>our Courses </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="banner-img">
                    <img src="assets/images/bg/hero-5-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


@include('frontend.home.counter')


@include('frontend.home.cat_feat')


@include('frontend.home.courses_skills')


@stop