@extends('frontend.admin.admin_dashboard_layout')

@php
    $users = DB::table('regular_users')->get();
    $admins = DB::table('admins')->get();
@endphp

@section('content')
<div class="right_col" role="main">
    <div class="container">
        <h3 class="text-center mb-4">User List</h3>

        <ul class="list-group">
            @foreach($users as $user)
            <li class="list-group-item">
                <div class="row">
                    <div class="col">
                        <h5><a href="{{ route('user_info', $user->id) }}" class="text-decoration-none">{{ $user->username }}</a></h5>
                        <!-- Display user status -->
                        @if($user->status == 'active')
                            <span class="badge bg-success text-white">{{ ucfirst($user->status) }}</span>
                        @else
                            <span class="badge bg-danger text-white">{{ ucfirst($user->status) }}</span>
                        @endif
                        <!-- Display user email -->
                        <p>Email: {{ $user->email }}</p>
                        <!-- Check if referral_id property exists in $user object -->
                        <p>
                            @if(property_exists($user, 'reference_by'))
                                Referral ID: {{ $user->reference_by }}
                            @else
                                Referral ID: N/A
                            @endif
                        </p>
                    </div>
                    <div class="col text-end">
                        <!-- Action buttons -->
                        @if($user->status == 'active')
                            <a href="#" class="btn btn-warning btn-sm me-2" onclick="event.preventDefault(); document.getElementById('deactivate-user-form-{{$user->id}}').submit();">Deactivate</a>
                            <form id="deactivate-user-form-{{$user->id}}" action="{{ route('deactivate_user', $user->id) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="#" class="btn btn-success btn-sm me-2" onclick="event.preventDefault(); document.getElementById('activate-user-form-{{$user->id}}').submit();">Activate</a>
                            <form id="activate-user-form-{{$user->id}}" action="{{ route('activate_user', $user->id) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif
                        
                        <a href="#" class="btn btn-primary btn-sm mt-2">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm mt-2" onclick="event.preventDefault(); document.getElementById('delete-user-form-{{$user->id}}').submit();">Delete</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@stop
