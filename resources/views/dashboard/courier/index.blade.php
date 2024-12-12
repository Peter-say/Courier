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

        .no-data {
            text-align: center;
            color: #007bff;
            font-size: 1.2rem;
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
                                    <li class="list-inline-item">Couriers List</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('dashboard.shipment.courier.create') }}" class="btn btn-primary">Create New</a>
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
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Vehicle Type</th>
                                        <th>License Plate Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($couriers->count())
                                        @foreach ($couriers as $courier)
                                            <tr>
                                                <td>{{ $courier->id }}</td>
                                                <td>{{ $courier->name }}</td>
                                                <td>{{ $courier->contact_number }}</td>
                                                <td>{{ $courier->vehicle_type ?? 'Not Available' }}</td>
                                                <td>{{ $courier->license_plate ?? 'Not Available' }}</td>
                                                <td>{{ $courier->status }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-between mr-2">
                                                        <a href="{{ route('dashboard.shipment.courier.edit', $courier->id) }}" class="btn btn-primary">Edit</a>
                                                        <form action="{{ route('dashboard.shipment.courier.destroy', $courier->id) }}" method="POST"
                                                              onsubmit="return confirm('Are you sure you want to delete this courier?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="no-data">No data available</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
