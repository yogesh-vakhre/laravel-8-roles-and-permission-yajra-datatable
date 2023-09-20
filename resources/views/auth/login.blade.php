@extends('layouts.auth')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
  style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
  <div class="auth-box row">
    <!-- <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/3.jpg);">
    </div> -->
    <div class="col-lg-12 col-md-7 bg-white">
      <div class="p-3 col-lg-6 offset-lg-3">
        <div class="text-center">
          <img src="../assets/images/big/icon.png" alt="wrapkit">
        </div>
        <h2 class="mt-3 text-center">{{ __('Sign In') }}</h2>
        <p class="text-center">Enter your email address and password to access admin panel.</p>
        <form class="mt-4" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label class="form-label text-dark" for="uname">Username</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group mb-3">
                <label class="form-label text-dark" for="pwd">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="col-lg-12 text-center">
              <button type="submit" class="btn w-100 btn-dark">Sign In</button>
            </div>
            <div class="col-lg-12 text-center mt-5">
              Don't have an account? <a href="#" class="text-danger">Sign Up</a>
            </div>
            <div class="col-lg-12 text-center mt-5">
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

@endsection