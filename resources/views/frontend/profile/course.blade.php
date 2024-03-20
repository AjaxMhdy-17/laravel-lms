@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>Course</h1>
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
                        <h2 class="card-title text-white">Courses</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-2">
                                    <div>
                                        <img src="https://www.creativeitinstitute.com/images/course/course_1682738408.jpg" class="img-fluid" alt="course-image">
                                    </div>
                                    <div class="mt-2">
                                        <h3> Mastering Photo Editing: From Beginner to Pro </h3>
                                    </div>
                                    <p class="mt-2 mb-3">
                                        Unlock the full potential of your photos and elevate your editing skills with our comprehensive "Mastering Photo Editing" course. Whether you're a complete novice or a seasoned enthusiast looking to refine your techniques, this course is designed to cater to all skill levels.
                                    </p>
                                    <div>
                                        <button class="btn btn-primary btn-small">view courses</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-2">
                                    <div>
                                        <img src="https://www.creativeitinstitute.com/images/course/course_1668488066.jpg" class="img-fluid" alt="course-image">
                                    </div>
                                    <div class="mt-2">
                                        <h3>The Complete Guide to Video Editing Mastery</h3>
                                    </div>
                                    <p class="mt-2 mb-3">
                                        Transform your raw footage into polished cinematic masterpieces with our comprehensive "Complete Guide to Video Editing Mastery" course. Whether you're an aspiring filmmaker, content creator, or hobbyist looking to enhance your editing skills, this course is your ultimate roadmap to success in the world of video production.
                                    </p>
                                    <div>
                                        <button class="btn btn-primary btn-small">view courses</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-2">
                                    <div>
                                        <img src="https://wikibongo.com/wp-content/uploads/2023/11/Free-Download-Creative-It-Digital-Marketing-Course.jpg" class="img-fluid" alt="course-image">
                                    </div>
                                    <div class="mt-2">
                                        <h3> Digital Marketing Masterclass: Strategies for Online Success
                                        </h3>
                                    </div>
                                    <p class="mt-2 mb-3">
                                        Empower yourself with the knowledge and skills to thrive in the ever-evolving landscape of digital marketing with our comprehensive "Digital Marketing Masterclass" course. Whether you're a business owner, marketing professional, or aspiring digital marketer, this course is designed to equip you with the strategies and techniques needed to succeed in today's competitive online marketplace.
                                    </p>
                                    <div>
                                        <button class="btn btn-primary btn-small">view courses</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection