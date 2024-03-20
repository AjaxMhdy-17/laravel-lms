

<div class="col-lg-4">
    <div class="card mb-4">
        <div class="card-body text-center">
            <img src="{{ asset('assets/images/clients/Avatar-Profile-Vector.png') }}" alt="user-image" class="img-fluid rounded-circle mb-3" style="width: 200px; height: 200px;">

            <h4 class="card-title">Name: {{ $user->username }} </h4>
            @if($user->status == 'active')
                <span class="badge bg-success text-white">{{ ucfirst($user->status) }}</span>
            @else
                <span class="badge bg-danger text-white">{{ ucfirst($user->status) }}</span>
            @endif
            
            <p class="card-text">Member Since: {{ $user->created_at->format('d-m-y') }}</p>
            <div class="list-group">
                <a href="{{ route('regular_user_profile') }}" class="list-group-item list-group-item-action ">Profile</a>
                <a href="{{ route('regular_user_course') }}" class="list-group-item list-group-item-action ">My Courses</a>
                <a href="{{ route('regular_user_wishlist') }}" class="list-group-item list-group-item-action ">Wishlist</a>
                <a href="{{ route('regular_user_notification') }}" class="list-group-item list-group-item-action ">Notifications</a>
                <a href="{{ route('regular_user_transaction') }}" class="list-group-item list-group-item-action ">Transactions</a>
                <a href="{{ route('user_referrel', $user->id) }}" class="list-group-item list-group-item-action">My Referral</a>
            </div>
        </div>
    </div>
</div>

