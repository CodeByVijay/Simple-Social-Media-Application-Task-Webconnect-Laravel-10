@extends('auth.app')
@section('title', 'Register Social Media')
@section('content')
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                @include('notification')
                <h1>Social Media App</h1>
                <p>Connect with friends and the world </p>
                <p> around you on Social Media.</p>
            </div>
            <form action="{{ route('register_post') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Name" value="{{old('name')}}" required>
                @error('name')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" required>
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <input type="text" name="mobile" placeholder="Mobile" value="{{old('mobile')}}" required>
                @error('mobile')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
                <input type="password" name="password" placeholder="Password" required>
                <div class="link">
                    <button type="submit" class="login">Register</button>
                </div>
                <hr>
                <div class="button">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
