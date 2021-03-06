@extends('layouts.app')

@section('lr')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}


<form method="POST" class="login100-form validate-form" id="login-form" action="{{ route('login') }}">
    @csrf 
    <span class="login100-form-title p-b-37">
        Sign In
    </span>

    <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
        <input class="input100" value="{{ old('email') }}"  type="email" name="email" placeholder="Email">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password" autofocus>
        <span class="focus-input100"></span>
    </div>
    <div class="form-group">
        <input type="checkbox" name="remember" id="remember" class="agree-term"
            {{ old('remember') ? 'checked' : '' }} />
        <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
    </div>
    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            Sign In
        </button>
    </div>
    <br />
    <br />
    <div class="text-center">
        <a href="{{Route('register')}}" class="txt2 hov1">
            Sign Up
        </a>
    </div>
</form>
<div id="dropDownSelect1"></div>
@endsection