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

                                    <li class="list-inline-item">
                                        <a href="{{ route('dashboard.home') }}">Dashboard</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Users List</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('dashboard.user.create') }}" class="btn btn-primary">Create New</a>
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
                                        <th>Avatar</th>
                                        <th>Email Address</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->full_name }}</td>
                                            <td> <img src=" {{ asset('users/avatar/' . $user->avatar) ?? 'Not Available' }}" alt=""> </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone_number ?? 'Not Available' }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->country ?? 'Not Available' }}</td>
                                            <td>{{ $user->state ?? 'Not Available' }}</td>
                                            <td>{{ $user->city ?? 'Not Available' }}</td>
                                            <td>
                                                @if ($user->role == 'Sudo')
                                                    <p>Can not Edit this</p>
                                                @else
                                                    <div class="d-flex justify-content-between mr-2">
                                                        <a href="" class="btn btn-primary">Edit</a>
                                                        <form
                                                            action="{{ route('dashboard.user.send-login-details', ['userId' => $user->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-dark">Resend Login
                                                                Details</button>
                                                        </form>
                                                        <button class="btn btn-danger">Delete</button>
                                                    </div>
                                                @endif
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

    </div>
@endsection
