@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>User Referrel</h1>
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
                        <h2 class="card-title text-white">Referrals Users</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Email Address</th>
                                        <th>WhatsApp</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reffered_user as $ref_user)
                                        <tr>
                                            <td>{{ $ref_user->user_id }}</td>
                                            <td>{{ $ref_user->email }}</td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone={{ $ref_user->whatsapp }}" class="btn btn-primary" target="_blank">WhatsApp</a>
                                            </td>
                                            <td>
                                                @if($ref_user->status == 'active')
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
 
@section('scripts')
<script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            responsive: true,
            autoWidth: false,
            columnDefs: [
                { orderable: false, targets: 2 } // Disable sorting for WhatsApp column
            ]
        });
    });
</script>
@endsection
