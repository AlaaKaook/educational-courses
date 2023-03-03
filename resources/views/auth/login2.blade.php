@extends('auth_layouts.auth_layout')

@section('title' , 'Login')

@section('content')
    <div class="box_login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Sign in</h2>
            <div class="inputBox">
                <input type="email" required="required" name="email" value="{{ old('email') }}"
                    class="@error('email') is-invalid @enderror">
                <span>Email</span>
                <i></i>
            </div>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="inputBox">
                <input type="password" required="required" name="password" value="{{ old('password') }}"
                    class="@error('password') is-invalid @enderror">
                <span>Password</span>
                <i></i>
            </div>
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="links">
                <a href="{{ route('password.request') }} ">Forgot Password ?</a>
                <a href="{{ route('register') }} ">Signup</a>
            </div>
            <input type="submit" value="Login">




        </form>

    </div>
@endsection
