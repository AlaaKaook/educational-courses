@extends('auth_layouts.auth_layout')

@section('title' , 'Reset Password')

@section('content')
    <div class="box_login">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <h2>Reset Password</h2>
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

            <div class="inp_reset">
                <input type="submit" value="Reset Password">
            </div>

        </form>
    </div>
@endsection
