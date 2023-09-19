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
                                    <li class="list-inline-item">notification Lists</li>
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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date Sent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $notification)
                                        <a href="#">
                                            <tr>
                                                @php
                                                    $notificationData = json_decode($notification->data, true);
                                                @endphp
                                                <td>{{ $notification->id }}</td>
                                                <<td>{{ isset($notificationData['name']) ? $notificationData['name'] : '' }}
                                                    </td>
                                                    <td>{{ isset($notificationData['email']) ? $notificationData['email'] : '' }}
                                                    </td>
                                                    <td>{{ isset($notificationData['subject']) ? $notificationData['subject'] : '' }}
                                                    </td>
                                                    <td>{{ isset($notificationData['message']) ? $notificationData['message'] : '' }}
                                                    </td>
                                                    <td>{{ $notification->created_at }}</td>

                                            </tr>
                                        </a>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {{-- @include('notifications.pop-up'); --}}

            </div>
        </div>

    </div>
@endsection
