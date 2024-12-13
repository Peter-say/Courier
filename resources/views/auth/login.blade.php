<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="shortcut icon" type="image/x-icon" href="{{$web_assets}}/assets/img/logo/cover.png">
    <!-- Title Page-->
    <title>SwiftlySend - Login</title>
    <link rel="stylesheet" href="receipt-style">
    @include('dashboard.layouts.head.style')
    <style>
        .site-logo{
            width: 180px
        }
    </style>
</head>

    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#"><img class="img-fluid site-logo"
                                src="{{ $web_assets }}/assets/img/logo/cover.png" alt=""></a>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email"
                                    type="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <button type="button" id="togglePassword" class="btn btn-outline-secondary">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
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
                            <button class="au-btn au-btn--block btn-primary m-b-20" type="submit">sign in</button>
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

    @include('dashboard.layouts.bottom.scripts')
    </body>
</html>
