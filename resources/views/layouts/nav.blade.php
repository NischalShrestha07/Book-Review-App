<div class="card border-0 shadow-lg mt-3">
    <div class="card-header  text-white">
        Navigation
    </div>
    <div class="card-body sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('books.list') }}">Books</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reviews') }}">Reviews</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('account.profile') }}">Profile</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('myReviews') }}">My Reviews</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('changePassword') }}">Change Password</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('account.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</div>
