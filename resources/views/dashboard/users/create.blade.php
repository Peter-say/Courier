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
                                    <li class="list-inline-item">Create</li>
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
                <form action="{{ route('dashboard.user.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row justify-content-center mb-3">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <strong>User Information</strong>
                                    <p>Required field are mark with <span class="required-field">*</span></p>

                                </div>

                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="first_name" class="form-control-label">First Name <span
                                                class="required-field">*</span></label>
                                        <input type="text" id="first_name" name="first_name" placeholder=""
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            value="{{ old('first_name') }}">
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name" class="form-control-label">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" placeholder=""
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            value="{{ old('last_name') }}">
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email <span
                                                class="required-field">*</span></label>
                                        <input type="email" id="email" name="email" placeholder=""
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="form-control-label">Role <span
                                                class="required-field">*</span></label>
                                        <select id="role" name="role"
                                            class="form-control @error('role') is-invalid @enderror">
                                            <option value="" disabled selected>Select Role</option>
                                            @foreach ($userRole as $role)
                                                <option value="{{ $role }}"
                                                    {{ old('role') == $role ? 'selected' : '' }}>{{ $role }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Additional User Fields -->
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Additional User Fields</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="avatar" class="form-control-label">Avatar </span></label>
                                        <input type="file" id="avatar" name="avatar" placeholder=""
                                            class="form-control @error('avatar') is-invalid @enderror"
                                            value="{{ old('avatar') }}">
                                        @error('avatar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="street_address" class="form-control-label">Street Address</label>
                                        <input type="text" id="street_address" name="street_address" placeholder=""
                                            class="form-control @error('street_address') is-invalid @enderror"
                                            value="{{ old('street_address') }}">
                                        @error('street_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="form-control-label">City</label>
                                        <input type="text" id="city" name="city" placeholder=""
                                            class="form-control @error('city') is-invalid @enderror"
                                            value="{{ old('city') }}">
                                        @error('city')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="state" class="form-control-label">State</label>
                                        <input type="text" id="state" name="state" placeholder=""
                                            class="form-control @error('state') is-invalid @enderror"
                                            value="{{ old('state') }}">
                                        @error('state')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="postal_code" class="form-control-label">Postal Code</label>
                                        <input type="text" id="postal_code" name="postal_code" placeholder=""
                                            class="form-control @error('postal_code') is-invalid @enderror"
                                            value="{{ old('postal_code') }}">
                                        @error('postal_code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="form-control-label">Country</label>
                                        <input type="text" id="country" name="country" placeholder=""
                                            class="form-control @error('country') is-invalid @enderror"
                                            value="{{ old('country') }}">
                                        @error('country')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number" class="form-control-label">Phone Number</label>
                                        <input type="text" id="phone_number" name="phone_number" placeholder=""
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Add more additional fields as needed -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary w-100 mx-auto">Create User</button>
                        </div>
                    </div>





                </form>
            </div>
        </div>

    </div>
@endsection
