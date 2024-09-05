<nav>
    <div class="container">
        <h2 class="logo">Social Media</h2>
        <div class="create">
            <label class="btn btn-primary createNewPostBtn" for="create-post">Create Post</label>
            <div class="profile-pic">
                <img src="{{asset('assets/images/profile.png')}}" alt="pic 1" />
            </div>
            <span>{{ Auth::user()->name }}</span>
            <a href="{{route('logout')}}" class="btn btn-danger" for="create-post">Logout</a>
        </div>
    </div>
</nav>
