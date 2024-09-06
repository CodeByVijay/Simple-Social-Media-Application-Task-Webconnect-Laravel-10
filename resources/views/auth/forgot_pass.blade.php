@extends('auth.app')
@section('title', 'Forgot Password Social Media')
@section('content')
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                @include('notification')
                <h1>Social Media App</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Social Media.</p>
            </div>
            <form action="{{route('forgot_pass_post')}}" method="post">
                @csrf
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" required>
                @error('email')
                <span style="color: red;">{{ $message }}</span>
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
