@extends('auth.app')
@section('title', 'Reset Password Social Media')
@section('content')
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                @include('notification')
                <h1>Social Media App</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Social Media.</p>
            </div>
            <form action="{{ route('set_password') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user_id }}">
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                @error('confirm_password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
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
