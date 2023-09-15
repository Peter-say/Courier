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
                                    <li class="list-inline-item">
                                    <a href="{{ route('dashboard.shipment.') }}">Shipment</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Details</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('dashboard.shipment.create') }}" class="btn btn-primary">Create New</a>
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
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <title>Parcel Tracking Details</title>
                </head>

                <body>
                    <div class="container mt-5">
                        <h1 class="mb-4">Parcel Tracking Details</h1>

                        <!-- Sender Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Sender Information
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Sender's Name:</label>
                                    <input type="text" value="{{ $shipment->sender_name }}" class="form-control" disabled
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label>Sender's Address:</label>
                                    <input type="text" value="{{ $shipment->sender_address }}" class="form-control"
                                        disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Sender's Contact:</label>
                                    <input type="text" value="{{ $shipment->sender_contact }}" class="form-control"
                                        disabled readonly>
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
                                    <input type="text" value="{{ $shipment->receiver_name }}" class="form-control"
                                        disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Receiver's Address:</label>
                                    <input type="text" value="{{ $shipment->receiver_address }}" class="form-control"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Receiver's Contact:</label>
                                    <input type="text" value="{{ $shipment->receiver_contact }}" class="form-control"
                                        disabled readonly>
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
                                    <input type="text" value="{{ $shipment->tracking_number }}" class="form-control"
                                        disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Carrier:</label>
                                    <input type="text" value="{{ $shipment->courier->name ?? 'Not Available' }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Shipping Date:</label>
                                    <input type="text"
                                        value="{{ $shipment->created_at->format('M d, Y') ?? 'Not Available' }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Estimated Delivery Date:</label>
                                    <input type="text"
                                        value="{{ $shipment->estimated_delivery_date->format('F j, Y') ?? 'Not Available' }}"
                                        class="form-control" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label>Shipping Method:</label>
                                    <input type="text" value="{{ $shipment->transportation_mode }}" class="form-control"
                                        disabled readonly>
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
                                    @if ($shipment->delivery_status == \App\Constants\StatusConstants::PENDING)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif ($shipment->delivery_status == \App\Constants\StatusConstants::SHIPPED)
                                        <span class="badge badge-primary">Shipped</span>
                                    @elseif ($shipment->delivery_status == \App\Constants\StatusConstants::IN_TRANSIT)
                                        <span class="badge badge-info">In Transit</span>
                                    @elseif ($shipment->delivery_status == \App\Constants\StatusConstants::OUT_FOR_DELIVERY)
                                        <span class="badge badge-info">Out for Delivery</span>
                                    @elseif ($shipment->delivery_status == \App\Constants\StatusConstants::DELIVERED)
                                        <span class="badge badge-success">Delivered</span>
                                    @endif
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
                                            <th>Location</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>_________</td>
                                            <td>_________</td>
                                            <td>_________</td>
                                            <td>_________</td>
                                        </tr>
                                        <tr>
                                            <td>_________</td>
                                            <td>_________</td>
                                            <td>_________</td>
                                            <td>_________</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Notes -->
                        <div class="card mb-4">
                            <div class="card-header">
                                Notes
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" disabled rows="4" readonly>________________________________________
                ________________________________________
                ________________________________________</textarea>
                            </div>
                        </div>

                    </div>

                </body>

                </html>

                @include('notifications.pop-up');
            </div>
        </div>
    </div>
@endsection
