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
                                                <div class="d-flex justify-content-between">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Change Status
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            @foreach ($statusOptions as $status)
                                                                <li>
                                                                    <form
                                                                        action="{{ route('dashboard.shipment.update.delivery_status', ['id' => $shipment->id, 'status' => $status]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <!-- Use PUT method for status update -->
                                                                        <input type="hidden" name="delivery_status"
                                                                            value="{{ $status }}">
                                                                        <button type="submit" class="dropdown-item">
                                                                            Change as {{ ucfirst($status) }}
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                   
                                                        <a href="{{ route('dashboard.shipment.view-receipt', $shipment->id) }}"
                                                            class="btn btn-success">View Receipt</a>
                                                   
                                                    <a href="{{ route('dashboard.shipment.details', $shipment->id) }}"
                                                        class="btn btn-dark">View</a>
                                                    <a href="{{ route('dashboard.shipment.edit', $shipment->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('dashboard.shipment.delete', $shipment->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this shipment?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"> Delete</button>
                                                    </form>
                                                </div>

                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {{-- @include('notifications.pop-up'); --}}
                @include('dashboard.shipment.modal.delivery-status')
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var deleteButton = document.getElementById('delete-shipment');

                deleteButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default link behavior

                    // Display a confirmation dialog
                    var confirmation = confirm('Are you sure you want to delete this shipment?');

                    if (confirmation) {
                        // If the user confirms, proceed with the deletion
                        window.location.href = this.getAttribute('href');
                    }
                });
            });
        </script>

    </div>
@endsection
