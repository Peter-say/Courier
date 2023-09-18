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
                @include('notifications.flash-messages')
                <form action="{{ route('dashboard.shipment.update', $shipment->id) }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Sender Information -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Sender Information</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="sender_name" class="form-control-label">Name <span
                                                class="required-field">*</span></label>
                                        <input type="text" id="sender-name" name="sender_name" placeholder=""
                                            class="form-control @error('sender_name') is-invalid @enderror"
                                            value="{{ $shipment->sender_name }}">
                                        @error('sender_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sender_address" class="form-control-label">Address <span
                                                class="required-field">*</span></label>
                                        <input type="text" id="sender-address" name="sender_address" placeholder=""
                                            class="form-control @error('sender_address') is-invalid @enderror"
                                            value="{{ $shipment->sender_address }}">
                                        @error('sender_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sender_contact" class="form-control-label">Enter Email Address or Phone
                                            Number
                                            <span class="required-field">*</span></label>
                                        <input type="text" id="sender_contact" name="sender_contact" placeholder=""
                                            class="form-control @error('sender_contact') is-invalid @enderror"
                                            value="{{ $shipment->sender_contact }}">
                                        @error('sender_contact')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Receiver Information -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Receiver Information</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="receiver_name" class="form-control-label">Name <span
                                                class="required-field">*</span></label>
                                        <input type="text" id="receiver_name" name="receiver_name" placeholder=""
                                            class="form-control @error('receiver_name') is-invalid @enderror"
                                            value="{{ $shipment->receiver_name }}">
                                        @error('receiver_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="receiver_address" class="form-control-label">Address <span
                                                class="required-field">*</span></label>
                                        <input type="text" id="receiver_address" name="receiver_address" placeholder=""
                                            class="form-control @error('receiver_address') is-invalid @enderror"
                                            value="{{ $shipment->receiver_address }}">
                                        @error('receiver_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="receiver_contact" class="form-control-label">Enter Email Address or
                                            Phone Number <span class="required-field">*</span></label>
                                        <input type="text" id="receiver_contact" name="receiver_contact" placeholder=""
                                            class="form-control @error('receiver_contact') is-invalid @enderror"
                                            value="{{ $shipment->receiver_contact }}">
                                        @error('receiver_contact')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Details -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                    <strong>Additional Details</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="transportation_mode">Transportation Mode</label>
                                            <select name="transportation_mode" id="transportation_mode"
                                                class="form-control @error('transportation_mode') is-invalid @enderror">
                                                @foreach ($transportModes as $key => $mode)
                                                    <option value="{{ $key }}"
                                                        {{ $shipment->transportation_mode == $key ? 'selected' : '' }}>
                                                        {{ $mode }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('transportation_mode')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="estimated_delivery_date" class="form-control-label">Estimated
                                                Delivery Date</label>
                                            <input type="date" id="estimated_delivery_date"
                                                name="estimated_delivery_date" placeholder=""
                                                class="form-control @error('estimated_delivery_date') is-invalid @enderror"
                                                value="{{ $shipment->estimated_delivery_date ? \Carbon\Carbon::parse($shipment->estimated_delivery_date)->format('Y-m-d') : '' }}">
                                            @error('estimated_delivery_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="pickup_datetime" class="form-control-label">Pickup Date</label>
                                            <input type="date" id="pickup_datetime" name="pickup_datetime"
                                                placeholder=""
                                                class="form-control @error('pickup_datetime') is-invalid @enderror"
                                                value="{{ $shipment->pickup_datetime ? \Carbon\Carbon::parse($shipment->pickup_datetime)->format('Y-m-d') : '' }}">
                                            @error('pickup_datetime')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="delivery_datetime" class="form-control-label">Delivery
                                                Date</label>
                                            <input type="date" id="delivery_datetime" name="delivery_datetime"
                                                placeholder=""
                                                class="form-control @error('delivery_datetime') is-invalid @enderror"
                                                value="{{ $shipment->delivery_datetime ? \Carbon\Carbon::parse($shipment->delivery_datetime)->format('Y-m-d') : '' }}">
                                            @error('delivery_datetime')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dimension Info -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                    <strong>Dimension Info</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row" id="dimensions-container">
                                        <!-- Check if dimensions exist before looping through them -->
                                        @if (!empty($shipment->dimensions))
                                            <!-- Loop through each dimension -->
                                            @foreach ($shipment->dimensions as $index => $dimension)
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 dimension">
                                                    <label for="weight[]" class="form-control-label">Weight <span
                                                            class="required-field">*</span></label>
                                                    <input type="number" name="weight[]" placeholder=""
                                                        class="form-control @error('weight.' . $index) is-invalid @enderror"
                                                        value="{{ $dimension->weight }}">
                                                    @error('weight.' . $index)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 dimension">
                                                    <label for="height[]" class="form-control-label">Height <span
                                                            class="required-field">*</span></label>
                                                    <input type="number" name="height[]" placeholder=""
                                                        class="form-control @error('height.' . $index) is-invalid @enderror"
                                                        value="{{ $dimension->height }}">
                                                    @error('height.' . $index)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 dimension">
                                                    <label for="width[]" class="form-control-label">Width <span
                                                            class="required-field">*</span></label>
                                                    <input type="number" name="width[]" placeholder=""
                                                        class="form-control @error('width.' . $index) is-invalid @enderror"
                                                        value="{{ $dimension->width }}">
                                                    @error('width.' . $index)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 dimension">
                                                    <label for="length[]" class="form-control-label">Length <span
                                                            class="required-field">*</span></label>
                                                    <input type="number" name="length[]" placeholder=""
                                                        class="form-control @error('length.' . $index) is-invalid @enderror"
                                                        value="{{ $dimension->length }}">
                                                    @error('length.' . $index)
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            @endforeach
                                            <!-- End loop -->
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-dark" type="button" id="add-dimension">Add Another
                                            Package</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                    <strong>Additional Details</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <label for="comment" class="form-control-label">Comment</label>
                                            <textarea type="text" id="comment" name="comment" placeholder=""
                                                class="form-control @error('comment') is-invalid @enderror" cols="10">{{ $shipment->comment }}</textarea>
                                            @error('comment')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mx-auto">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // Counter to keep track of the number of dimensions added
                let dimensionCount = 1;

                // Handle click event for "Add Another Package" button
                $('#add-dimension').click(function() {
                    // Clone only one dimension (the first one) and its contents
                    const newDimension = $('#dimensions-container .dimension:eq(0), #dimensions-container .dimension:eq(1), #dimensions-container .dimension:eq(2), #dimensions-container .dimension:eq(3)').clone();


                    // Clear input values in the cloned dimension
                    newDimension.find('input[type="number"]').val('');

                    // Update the name attributes for each input field in the cloned dimension
                    newDimension.find('input[name="weight[]"]').attr('name', 'weight[' + dimensionCount + ']');
                    newDimension.find('input[name="height[]"]').attr('name', 'height[' + dimensionCount + ']');
                    newDimension.find('input[name="width[]"]').attr('name', 'width[' + dimensionCount + ']');
                    newDimension.find('input[name="length[]"]').attr('name', 'length[' + dimensionCount + ']');

                    // Append the cloned dimension to the container
                    $('#dimensions-container').append(newDimension);

                    // Increment the dimension count
                    dimensionCount++;
                });
            });
        </script>
    </div>

@endsection
