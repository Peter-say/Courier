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

                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item">
                                        <a href="{{ route('dashboard.home') }}">Dashboard</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Receipt</li>
                                </ul>
                            </div>
                            <div class="justify-content-end">
                                <a href="{{ route('dashboard.shipment.generate-receipt', $shipment->id)}}"
                                    class="btn btn-success">Download Receipt</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    @include('dashboard.shipment.receipt.generate')
@endsection
