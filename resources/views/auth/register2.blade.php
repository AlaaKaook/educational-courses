@extends('auth_layouts.auth_layout')

@section('title' , 'Register')

@section('content')
    <div class="box">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h2>Sign up</h2>

            <div class="inputBox">
                <input type="text" required="required" name="username" class="@error('username') is-invalid @enderror">
                <span>User Name</span>
                <i></i>
            </div>

            @error('username')
                <p class="text-danger">{{ $message }}</p>
            @enderror


            <div class="inputBox">
                <input type="email" required="required" name="email" class="@error('email') is-invalid @enderror">
                <span>Email</span>
                <i></i>
            </div>

            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror


            <div class="inputBox">
                <input type="password" required="required" name="password" class="@error('password') is-invalid @enderror">
                <span>Password</span>
                <i></i>
            </div>

            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="inputBox">
                <input type="password" required="required" name="password_confirmation">
                <span>Confirm Password</span>
                <i></i>
            </div>

            {{-- <div class="display_radio">
                <input type="radio" name="type" value="student" class="@error('type') is-invalid @enderror" checked>
                <span>Student</span>
                <i></i>
            </div>

            <div class="display_radio">
                <input type="radio" name="type" value="teacher" class="@error('type') is-invalid @enderror">
                <span>Teacher</span>
                <i></i>
            </div> --}}

            <input type="submit" value="Register">

        </form>

    </div>
@endsection
