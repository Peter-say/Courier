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
                                    <li class="list-inline-item">Delete Account</li>
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
                <div class="mt-5 col-lg-8 col-xl-8 col-md-12 col-sm-12">
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
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5>Delete Account</h5>
                        <a href="{{route('dashboard.user.account.settings')}}" class="btn btn-primary">Go back to settings</a>
                        </div>
            
                        <div class="card-body">
                          
                            <div class="mb-3 col-12 mb-0">
                                <div class="alert alert-warning">
                                    <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                                    <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                                </div>
                            </div>
                            <form action="{{ route('dashboard.user.delete-account', $id) }}" enctype="multipart/form-data" method="post">
                                @csrf @method('DELETE')
                                <div class="form-check mb-3 ">
                                   <div class="form-group">
                                    <label for="password" class="">Enter password to delete account:</label>
                                    <input type="password" name="password" class="form-control" id="">
                                   </div>
                                    <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                                    <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                                </div>
                                <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
