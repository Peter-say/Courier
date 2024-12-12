
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
    <title>SwiftlySend - Email</title>
    <link rel="stylesheet" href="receipt-style">
    @include('dashboard.layouts.head.style')
    <style>
        .site-logo {
            width: 180px
        }
    </style>
</head>
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#"><img class="img-fluid site-logo" src="{{$web_assets}}/assets/img/logo/cover.png" alt=""></a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('password.email') }}">
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
                       
                        <button class="au-btn au-btn--block btn-primary m-b-20" type="submit">Send Password Reset Link</button>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layouts.bottom.scripts')
</body>

</html>

