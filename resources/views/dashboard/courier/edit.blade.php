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
                                        <a href="{{ route('dashboard.shipment.courier.index') }}">All Couriers</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Update</li>
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
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    @include('notifications.flash-messages')
                </div>
                <form action="{{ route('dashboard.shipment.courier.update', $courier->id) }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    <div class="row justify-content-center mb-3">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <p>Required field are mark with <span class="required-field">*</span></p>

                                </div>

                            </div>
                        </div>

                        <!-- Additional User Fields -->
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Courier Information</strong>
                                </div>
                                <div class="card-body card-block">

                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Name <span
                                                class="required-field">*</span></label>
                                        <input type="text" id="name" name="name" placeholder=""
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name', $courier->name) }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_number" class="form-control-label">Contact Number <span
                                                class="required-field">*</span></label>
                                        <input type="number" id="contact_number" name="contact_number" placeholder=""
                                            class="form-control @error('contact_number') is-invalid @enderror"
                                            value="{{ old('contact_number', $courier->contact_number) }}">
                                        @error('contact_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="vehicle_type">Vehicle Types <span
                                                class="required-field">*</span></label>
                                        <select name="vehicle_type" id="vehicle_type"
                                            class="form-control @error('vehicle_type') is-invalid @enderror">
                                            @foreach ($vehicleTypes as $key => $vehicle)
                                                <option value="{{ $key }}"
                                                    {{ old('vehicle_type', $courier->vehicle_type) == $key ? 'selected' : '' }}>
                                                    {{ $vehicle }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('vehicle_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="license_plate" class="form-control-label">License Plate </span></label>
                                        <input type="text" id="license_plate" name="license_plate" placeholder=""
                                            class="form-control @error('license_plate') is-invalid @enderror"
                                            value="{{ old('license_plate', $courier->license_plate) }}">
                                        @error('license_plate')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="license_plate" class="form-control-label">Status </label>
                                        <select class="form-control @error('status') is-invalid @enderror" name="status"
                                            id="status" required>
                                            <option value="" disabled selected>Select Status</option>
                                            @foreach ($statusOptions as $option)
                                                <option value="{{ $option }}"
                                                    {{ old('status', $courier->status) == $option ? 'selected' : '' }}>{{ $option }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary w-100 mx-auto">Update Courier</button>
                        </div>
                    </div>





                </form>
            </div>
        </div>

    </div>
@endsection
