@extends('layouts.app')

@section('auth_form')

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content text-center">
                    <h1 class="mb-4">My All Home Works</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Logout</li>
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
            <div class="col-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            submit your homework
                        </button>
                    </div>

                    <div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Select Your Course Name And Submit Homework Url</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @if($user)
                                    <form action="{{ route('submit_homework' , $user->id) }}" method="post">
                                        @csrf
                                        <div class="modal-body">



                                            <div class="mb-3">
                                                @error('select_option')
                                                <div style="color : red">{{$message}}</div>
                                                @enderror
                                                <select class="form-control" name='selected_course'>
                                                    <option value="">Choose an option</option>
                                                    <option value="video_editing">Video Editing</option>
                                                    <option value="photo_sharing">Photo Sharing</option>
                                                    <option value="social_marketing">Social Marketing</option>
                                                </select>
                                            </div>


                                            @error('homework')
                                            <div style="color : red">{{$message}}</div>
                                            @enderror
                                            <input type="text" style="width:100%" placeholder="Enter Your Homework url" name='homework' id="homework">


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-small" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-small">submit</button>
                                        </div>
                                    </form>
                                    @else
                                    <span>not logged in</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card-body">
                        <div>
                            <h4>Submit your homework url</h4>
                        </div>
                        <div>

                            @if($user)
                                <form action="{{ route('submit_homework' , $user->id) }}" method="post">
                                    @csrf
                                    @error('homework')
                                    <div style="color : red">{{$message}}</div>
                                    @enderror
                                    <input type="text" placeholder="Enter Your Homework url" name='homework' id="homework">
                                    <button type="submit" class="btn btn-primary btn-small">submit</button>
                                </form>
                            @else
                            <span>not logged in</span>
                            @endif

                        </div>
                        <div>

                        </div>
                    </div> -->
                    <div class="card-body">
                        <!-- table  -->
                        <div style="overflow-x: scroll;">

                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>My Notes</th>
                                        <th>Teacher Feedback</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Digital Marketing
                                        </td>
                                        <td></td>
                                        <td>
                                            Nice Work for the last assignment. Keep it up.
                                        </td>
                                        <td>

                                            <span class="badge badge-success">acceptd</span>


                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Video Editing</td>
                                        <td></td>
                                        <td>
                                            Nice Work for the last assignment. Keep it up.
                                        </td>
                                        <td>

                                            <span class="badge badge-success">acceptd</span>


                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Video Editing</td>
                                        <td></td>
                                        <td>
                                            not good enough. Try to improve your work.
                                        </td>
                                        <td>

                                            <span class="badge badge-danger">Not acceptd</span>


                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Photo Editing </td>
                                        <td></td>
                                        <td>
                                            not good enough. Try to improve your work.
                                        </td>
                                        <td>


                                            <span class="badge badge-danger">Not acceptd</span>

                                        </td>
                                        <td class="text-center">
                                            <form action="">
                                                <button class="btn btn-success btn-small">View</button>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop