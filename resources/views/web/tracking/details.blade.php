@extends('web.layouts.app')



{{-- <title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}"> --}}


@section('contents')

    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');


        .tracking-container {
            margin-top: 50px;
            margin-bottom: 50px
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }

       .image-card{
        height: 300px;
       }

        .card-img-top {
            object-fit: cover;
            height: 100%;
        }
    </style>
    <!--  breadcrumb-area  start -->
    <div class="wrapper-box p-relative ">
        <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
            data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1 ">
                            <div class="breadcrumb__list mb-10">
                                <h3 class="breadcrumb__title mb-15">Tracking Page</h3>
                                <div class="breadcrumb__item">
                                    <span><a href="/">Home </a></span>
                                    <span class="dvdr"> / </span>
                                    <span class="sub-page-black"> Tracking Page</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->
    <!-- about area start -->
    <div class="tpabout_area pt-120 pb-5">

        <div class="container">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
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

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <form action="{{ route('web.tracking.track-shipment') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="form-group">
                        <label class="form-group">Enter Your Tracking Number To Find Shipment</label>
                        <input type="text" class="form-control" name="tracking_number" id="tracking_number"
                            style="border: 3px solid rgba(255, 166, 0, 0.884);">
                    </div>
                    <div><button type="submit" class="btn btn-warning w-100 mt-3">Find Shipment</button></div>
                </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                @if ($shipmentDetails)
                    <div class="tracking-container">
                        <article class="card">
                            <header class="card-header">Tracking Information</header>
                            <div class="card-body">
                                <h6>Order ID: OD45345345435</h6>
                                <article class="card">
                                    <div class="card-body row">
                                        <div class="col-4">
                                            <strong>Estimated Delivery Date & Time:</strong>
                                            <br>{{ $shipmentDetails->estimated_delivery_date->format('D d, M ,Y') }}
                                        </div>

                                        <div class="col-4"> <strong>Status:</strong> <br>
                                            {{ $shipmentDetails->trackingHistory[0]->delivery_status }} </div>
                                        <div class="col-4"> <strong>Tracking #:</strong> <br>
                                            {{ $shipmentDetails->tracking_number }} </div>
                                    </div>
                                </article>
                                <div class=" col-12 track">
                                    <div class="step {{ str_contains($currentStatus, 'Accepted') ? 'active' : '' }}">
                                        <span class="icon"> <i class="fa fa-check"></i> </span>
                                        <span class="text">Accepted</span>
                                    </div>
                                    <div
                                        class="step {{ str_contains($currentStatus, 'Submitted for Service') ? 'active' : '' }}">
                                        <span class="icon"> <i class="fa fa-user"></i> </span>
                                        <span class="text">Submitted for Service</span>
                                    </div>
                                    <div class="step {{ str_contains($currentStatus, 'Transported') ? 'active' : '' }}">
                                        <span class="icon"> <i class="fa fa-truck"></i> </span>
                                        <span class="text">Transported</span>
                                    </div>
                                    <div class="step {{ str_contains($currentStatus, 'Delivered') ? 'active' : '' }}">
                                        <span class="icon"> <i class="fa fa-box"></i> </span>
                                        <span class="text">Delivered</span>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    @if (is_array(json_decode($shipmentDetails->images)) && count(json_decode($shipmentDetails->images)) === 1)
                                        {{-- Display a single image --}}
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                            <div class="card image-card">
                                                @php
                                                    $imagePaths = json_decode($shipmentDetails->images);
                                                @endphp
                                                <img src="{{ asset($imagePaths[0]) }}" alt="Image" class="card-img-top">
                                            </div>
                                        </div>
                                    @elseif (is_array(json_decode($shipmentDetails->images)) && count(json_decode($shipmentDetails->images)) > 1)
                                        {{-- Display a collection of images --}}
                                        @foreach (json_decode($shipmentDetails->images) as $imagePath)
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                <div class="card image-card">
                                                    <img src="{{ asset($imagePath) }}" alt="Image" class="card-img-top">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>


                                <hr>
                                <a href="#" class="btn btn-warning" data-abc="true"> <i
                                        class="fa fa-chevron-left"></i>Go Back
                                </a>
                            </div>
                        </article>
                    </div>

                    <div class="container-fluid">
                        <!-- Sender Information -->
                        <div class="card mb-4">
                            <div>
                                <h5>Package Details</h5>
                            </div>
                            <div class="card-header">
                                Sender Information
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Sender's Name:</label>
                                    <input type="text" value="{{ $shipmentDetails->sender_name }}" class="form-control"
                                        disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Sender's Address:</label>
                                    <input type="text" value="{{ $shipmentDetails->sender_address }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Sender's Contact:</label>
                                    <input type="text" value="{{ $shipmentDetails->sender_contact }}"
                                        class="form-control" disabled readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Receiver Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Receiver Information
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Receiver's Name:</label>
                                    <input type="text" value="{{ $shipmentDetails->receiver_name }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Receiver's Address:</label>
                                    <input type="text" value="{{ $shipmentDetails->receiver_address }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Receiver's Contact:</label>
                                    <input type="text" value="{{ $shipmentDetails->receiver_contact }}"
                                        class="form-control" disabled readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Parcel Details -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Parcel Details
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tracking Number:</label>
                                    <input type="text" value="{{ $shipmentDetails->tracking_number }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Carrier:</label>
                                    <input type="text"
                                        value="{{ $shipmentDetails->courier->name ?? 'Not Available' }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Shipping Date:</label>
                                    <input type="text"
                                        value="{{ $shipmentDetails->created_at->format('M d, Y') ?? 'Not Available' }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Estimated Delivery Date:</label>
                                    <input type="text"
                                        value="{{ $shipmentDetails->estimated_delivery_date->format('F j, Y') ?? 'Not Available' }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Shipping Method:</label>
                                    <input type="text" value="{{ $shipmentDetails->transportation_mode }}"
                                        class="form-control" disabled readonly>
                                </div>
                            </div>
                        </div>


                        <!-- Tracking Status -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Tracking Status
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Status:</label>
                                    {{ $shipmentDetails->trackingHistory[0]->delivery_status }}
                                </div>
                            </div>
                        </div>

                        <!-- Tracking History -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Tracking History
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shipmentDetails->trackingHistory as $tracking)
                                            <tr>
                                                <td>{{ $tracking->event_time->format('M d, Y') }}</td>
                                                <td>{{ $tracking->event_time->format('h:i:s A') }}</td>
                                                <td>
                                                    {{ $shipmentDetails->trackingHistory[0]->delivery_status }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Item Dimension -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Package Dimension
                            </div>
                            <div class="card-body">
                                <div style="max-width: 100%; overflow-x: auto;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Weight(KG)</th>
                                                <th>Height(M)</th>
                                                <th>Width(M)</th>
                                                <th>Length(M)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($shipmentDetails->dimensions as $dimension)
                                                <tr>
                                                    <td>{{ $dimension->weight }}</td>
                                                    <td>{{ $dimension->height }}</td>
                                                    <td>{{ $dimension->width }}</td>
                                                    <td>{{ $dimension->length }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <!-- Comment -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Comment
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" disabled rows="4" readonly>{{ $shipmentDetails->comments ?? 'Not Available' }}</textarea>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
