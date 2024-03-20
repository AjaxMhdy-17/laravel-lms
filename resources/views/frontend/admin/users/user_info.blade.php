@include('frontend.admin.admin_dash_commons.header')
@include('frontend.admin.admin_dash_commons.sidebar')

<!-- page content -->
@yield('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-12 text-center">
            <h3>User Info</h3>
            @if ($user)
                <h3>{{ $user->username }}'s Profile</h3>
            @else
                <p>User not found.</p>
            @endif
        </div>
    </div>
    
    <!-- New Div Section for More Info -->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Profile Information</h2>
                    <div class="clearfix"></div>
                    @if ($user)
                    <p><strong>Name:</strong> {{ $user->first_name . $user->last_name}}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->whatsapp }}</p>
                    <p><strong>Referral By:</strong> {{ $user->reference_by }}</p>
                    <P> <strong>Referral ID:</strong> {{ $user->user_id}}</p>
                    <P> <strong>Status:</strong> {{ $user->status}}</p>
                    <P> <strong>Balance:</strong> {{ $user->balance}}</p>

                    <!-- Add more profile details as needed -->
                @else
                    <p>User not found.</p>
                @endif
                </div>
                <div class="x_content">
                    <!-- Add your additional content here -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of New Div Section -->

    <!-- Modern Data Table for Referral Users -->
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Referral Users</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Email</th>
                                    <th>WhatsApp</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reffered_user as $user)
                                    <tr>
                                        <td>{{ $user->user_id }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="https://api.whatsapp.com/send?phone={{ $user->whatsapp }}" class="btn btn-primary" target="_blank">
                                                WhatsApp
                                            </a>
                                        </td>
                                        <td>
                                            @if($user->status == 1)
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
    <!-- End of Modern Data Table -->

</div>
<!-- /page content -->

@include('frontend.admin.admin_dash_commons.footer')
