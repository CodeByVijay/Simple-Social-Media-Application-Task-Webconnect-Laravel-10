@extends('auth.app')
@section('title', 'Forgot Password Social Media')
@section('content')
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                <h1>Social Media App</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Social Media.</p>
            </div>
            <form action="#" method="post">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                @error('email')
                <span>{{ $message }}</span>
            @enderror
                <div class="link">
                    <button type="submit" class="login">Send Link</button>
                </div>
                <hr>
                <div class="button">
                    <a href="{{route("login")}}">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
