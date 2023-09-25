@extends('dashboard.layouts.app')

@section('contents')
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

                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <!-- STATISTIC-->
    @if (Auth::check())
        @if (Auth::user()->role == 'Sudo')
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $usersCount }}</h2>
                                    <span class="desc">Total Users</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $percelCount }}</h2>
                                    <span class="desc">Shipment Created</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">{{ $parcelDelivered }}</h2>
                                    <span class="desc">Parcel(s) Delivered</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">$0</h2>
                                    <span class="desc">total earnings</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid mb-5">
                        <div class="justify-content-center">
                            <p>Hello <strong>{{ Auth::user()->full_name }}</strong>, Welcome to your dashboard</p>
                        </div>
                    </div>
                </div>
        @endif
    @endif
    <!-- END STATISTIC-->


    <!-- END PAGE CONTAINER-->
@endsection
