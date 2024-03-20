@extends('frontend.admin.admin_dashboard_layout')


@php

$homeworks = DB::table('homework_records')->get();
$user = DB::table('regular_users')->get();



@endphp

@section('content')

<div class="right_col" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mb-4">Admin Homework view</h3>
                <div class="card-body">
                    <!-- table  -->
                    <div style="overflow-x: scroll;">

                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Whatsapp</th>
                                    <th>Status</th>
                                    <th>Course</th>
                                    <th>Homework</th>
                                    <th>Pending</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($homeworks as $homework)
                                @if($homework->appoved == 0)
                                <tr>
                                    <td>{{ $homework->user_whatsapp }}
                                    </td>
                                    <td>
                                        {{ $homework->user_status}}
                                    </td>
                                    <td>
                                        {{ $homework->selected_course}}
                                    </td>
                                    <td>
                                        {{ $homework->home_work_link}}
                                    </td>

                                    <td class="">
                                        <a href="#" class="btn btn-success btn-sm me-2" onclick="event.preventDefault(); document.getElementById('deactivate-user-form-{{$homework->id}}').submit();">Approve</a>
                                        <form id="deactivate-user-form-{{$homework->id}}" action="{{ route('approve_homework', $homework->id) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#" class="btn btn-danger btn-sm me-2" onclick="event.preventDefault(); document.getElementById('declined-user-form-{{$homework->id}}').submit();">Declined</a>
                                        <form id="declined-user-form-{{$homework->id}}" action="{{ route('decline_homework', $homework->id) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@stop