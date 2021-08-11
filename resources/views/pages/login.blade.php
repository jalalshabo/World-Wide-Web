@extends('layout.app')
@section('title', "Login")

@section('keywords', "admin login, user login, create account, forget password, wd school")
@section('description', "User and Administrative login")

@section('content')

    <section class="container margin-fix-login h-100">
      <div
        class="
          d-flex
          justify-content-center
          align-content-center
          margin-fix-login
        "
      >
        <div class="custom-border p-4">
          <div class="d-flex justify-content-center">
            <div class="container mb-3">
              <img src="images/nav-logo.svg" alt="Logo" />
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="input-group mb-3">
                <div>
                  <span class="input-group-text"
                    ><i class="fas fa-user"></i
                  ></span>
                </div>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control @error('email') input_user is-invalid @enderror"
                  value="{{ old('email') }}"
                  placeholder="{{ __('E-Mail Address') }}"
                  required
                  autocomplete="email"
                  autofocus/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="input-group mb-2">
                <div>
                  <span class="input-group-text"
                    ><i class="fas fa-key"></i
                  ></span>
                </div>
                <input
                  id="password"
                  type="password"
                  name="password"
                  class="form-control input_pass @error('password') is-invalid @enderror"
                  value=""
                  autocomplete="current-password"
                  placeholder="password"
                  required
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <div>
                  <input type="checkbox" id="remember-me-checkbox" />
                  <label for="remember-me-checkbox">Remember me</label>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-3 login_container">
                <button name="button" class="btn btn-primary" type="submit">
                    {{ __('Login') }}
                </button>
              </div>
            </form>
          </div>

          <div class="mt-4">
            <div class="d-flex justify-content-center links">
              Don't have an account?
              <a href="#" class="ms-2">Sign Up!</a>
            </div>
            <div class="d-flex justify-content-center links">
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
