@extends('layouts.app')

@section('lr')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
    @csrf

    <span class="login100-form-title p-b-37">
        Sign Up
    </span>

    <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
        <input class="input100" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
            placeholder="Your Name">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
        <input class="input100" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
            placeholder="Your Email ">
        <span class="focus-input100"></span>
    </div>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="password">
        <span class="focus-input100"></span>
    </div>
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
        <input class="input100" type="password" name="password_confirmation" placeholder="Password Confirmation">
        <span class="focus-input100"></span>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            Register
        </button>
    </div>
    <br />
    <br />
    <div class="form-group">
        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
        <label for="agree-term" class="label-agree-term">
            <span><span></span></span>I agree all statements in
            <a href="#" class="term-service">Terms of service</a>
        </label>
    </div>
    <br />
    <br />
    <div class="text-center">
        <a href="{{Route('login')}}" class="txt2 hov1">
            Sign In
        </a>
    </div>
</form>

@endsection