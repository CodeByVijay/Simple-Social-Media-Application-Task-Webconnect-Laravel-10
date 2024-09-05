@extends('auth.app')
@section('title', 'Reset Password Social Media')
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
                <input type="hidden" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <div class="link">
                    <button type="submit" class="login">Reset Password</button>
                </div>
                {{-- <hr>
                <div class="button">
                    <a href="{{route("register")}}">Login</a>
                </div> --}}
            </form>
        </div>
    </div>
@endsection
