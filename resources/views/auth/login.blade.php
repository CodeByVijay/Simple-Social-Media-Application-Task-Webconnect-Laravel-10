@extends('auth.app')
@section('title', 'Login Social Media')
@section('content')
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                @include('notification')
                <h1>Social Media App</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Social Media.</p>
            </div>
            <form action="{{route('login_post')}}" method="post">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
                <input type="password" name="password" placeholder="Password" required>
                <div class="link">
                    <button type="submit" class="login">Login</button>
                    <a href="{{ route('forgot_pass') }}" class="forgot">Forgot password?</a>
                </div>
                <hr>
                <div class="button">
                    <a href="{{ route('register') }}">Create new account</a>
                </div>
            </form>
        </div>
    </div>
@endsection
