@extends('dashboard.layouts.app')

<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="{{ $dashboard_assets }}/images/icon/logo.png" alt="CoolAdmin">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email"
                                type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password"
                                class="form-control  @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>Remember Me
                            </label>
                            @if (Route::has('password.request'))
                                <label>
                                    <a href="{{ route('password.request') }}">Forgotten Password?</a>
                                </label>
                            @endif
                        </div>
                        <button class="au-btn au-btn--block btn-warning m-b-20" type="submit">sign in</button>
                        {{-- <div class="social-login-content">
                            <div class="social-button">
                                <a href="{{ route('auth.login.facebook') }}"
                                    class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</a>
                                <a href="{{ route('auth.login.google') }}"
                                    class="au-btn au-btn--block au-btn--blue2">sign in with Google</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>
                                Don't you have account?
                                <a href="{{ route('register') }}" class="text-danger">Sign Up Here</a>
                            </p>
                        </div> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
