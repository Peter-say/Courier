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
                                    <li class="list-inline-item">Update Profile</li>
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
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-2">
                        <div class="card">
                            <h5 class="card-header">Reset Password</h5>
                            <div class="card-body d-flex justify-content-between">
                                Change Password Here!
                                <a href="{{ route('dashboard.user.change-password') }}" class="btn btn-primary">Proceed</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-2">
                        <div class="card">
                            <h5 class="card-header">Update Email Address</h5>
                            <div class="card-body d-flex justify-content-between">
                                Want to switch your email?
                                <a href="{{ route('dashboard.user.change-email') }}" class="btn btn-primary">Proceed</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-2">
                        <div class="card">
                            <h5 class="card-header">Delete Account</h5>
                            <div class="card-body d-flex justify-content-between">
                                Remove your account
                                <a href="{{ route('dashboard.user.fetch-account') }}" class="btn btn-danger">Proceed</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
