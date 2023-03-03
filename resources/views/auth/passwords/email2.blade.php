@extends('auth_layouts.auth_layout')

@section('title' , 'Reset Password')

@section('content')
    <div class="box_reset">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <h2>Reset Password</h2>

            <div class="inputBox">
                <input type="email" required="required" name="email" value="{{ old('email') }}"
                    class="@error('email') is-invalid @enderror">
                <span>Email</span>
                <i></i>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="inp">
                <input class="inp" type="submit" value="Send Password Reset Link">
            </div>

        </form>

    </div>
@endsection
