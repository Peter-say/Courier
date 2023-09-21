@extends('dashboard.layouts.app')

@section('contents')
    <style>
        .required-field {
            color: red;
        }
    </style>
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb m-t-75">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">

                                    <li class="list-inline-item">
                                        <a href="{{ route('dashboard.home') }}">Dashboard</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Update Password</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="container mt-5 col-lg-8 col-xl-8 col-md-12 col-sm-12">
                    @if (session('success_message'))
                        <div class="alert alert-success text-dark">
                            {{ session('success_message') }}
                        </div>
                    @endif
                    @if (session('error_message'))
                        <div class="alert alert-danger text-dark">
                            {{ session('error_message') }}
                        </div>
                    @endif
                </div>
                <div class="container mt-5 col-lg-8 col-xl-8 col-md-12 col-sm-12">
                    <div class="card m-2 p-2">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Change Password</h4>
                            <a href="{{ route('dashboard.user.account.settings') }}" class="btn btn-primary">Go back to
                                settings</a>
                        </div>

                        <div>
                            <form action="{{ route('dashboard.user.update-password') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Old Password <span class="">*</span></label>
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                        name="old_password">
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">New Password <span class="">*</span></label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                        name="new_password">
                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password <span class="">*</span></label>
                                    <input type="password"
                                        class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                        name="new_password_confirmation">
                                    @error('new_password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
