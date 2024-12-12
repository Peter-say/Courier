@extends('dashboard.layouts.app')

@section('contents')
    <style>
        .required-field {
            color: red;
        }

        .dropdown-menu {
            max-height: 200px;
            overflow-y: auto;
        }

        .icon-action {
            font-size: 1.2rem;
            margin-right: 0.5rem;
            cursor: pointer;
            text-decoration: none;
            color: #007bff;
        }

        .icon-action:hover {
            color: #0056b3;
        }

        .action-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .action-form {
            display: inline;
        }

        .action-form button {
            border: none;
            background: none;
            padding: 0;
            margin: 0;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('dashboard.home') }}">Dashboard</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Shipment Lists</li>
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
                <div class="bg-success text-white">
                    @include('notifications.flash-messages')
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tracking No.</th>
                                        <th>Sender Name</th>
                                        <th>Sender Address</th>
                                        <th>Sender Contact</th>
                                        <th>Receiver Name</th>
                                        <th>Receiver Address</th>
                                        <th>Receiver Contact</th>
                                        <th>Delivery Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <td>{{ $shipment->id }}</td>
                                            <td>{{ $shipment->tracking_number }}</td>
                                            <td>{{ $shipment->sender_name }}</td>
                                            <td>{{ $shipment->sender_address }}</td>
                                            <td>{{ $shipment->sender_contact }}</td>
                                            <td>{{ $shipment->receiver_name }}</td>
                                            <td>{{ $shipment->receiver_address }}</td>
                                            <td>{{ $shipment->receiver_contact }}</td>
                                            <td>{!! $shipment->currentDeliveryStatus() !!}</td>
                                            <td>
                                                <div class="action-group">
                                                    <!-- View Details -->
                                                    <a href="{{ route('dashboard.shipment.details', $shipment->id) }}" 
                                                       class="icon-action" title="View Details">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <!-- Edit -->
                                                    <a href="{{ route('dashboard.shipment.edit', $shipment->id) }}" 
                                                       class="icon-action" title="Edit Shipment">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <!-- Delete -->
                                                    <form action="{{ route('dashboard.shipment.delete', $shipment->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Are you sure you want to delete this shipment?');"
                                                          class="action-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="icon-action" title="Delete Shipment">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    <!-- View Receipt -->
                                                    <a href="{{ route('dashboard.shipment.view-receipt', $shipment->id) }}" 
                                                       class="icon-action" title="View Receipt">
                                                        <i class="fas fa-file-invoice"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @include('dashboard.shipment.modal.delivery-status')
            </div>
        </div>
    </div>
@endsection
