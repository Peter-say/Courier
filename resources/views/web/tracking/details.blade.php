@extends('web.layouts.app')

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

        .custom-input {
            background-color: white;
            /* Set background color to white */
            border: 1px solid #ccc;
            /* Add a border to create an outline */
            border-radius: 5px;
            /* Add rounded corners */
            padding: 10px;
            /* Add some padding to the input field */
            width: 100%;
            /* Make the input field expand to 100% of its container */
            box-sizing: border-box;
            /* Include padding and border in width calculation */
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
                                <h3 class="breadcrumb__title mb-15">About Us</h3>
                                <div class="breadcrumb__item">
                                    <span><a href="/">Home </a></span>
                                    <span class="dvdr"> / </span>
                                    <span class="sub-page-black"> About us</span>
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
    <div class="tpabout_area pt-120 pb-120">
        <div class="container">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="form-group justify-content-center">
                    <Label class=" form group">Enter Your tracking Number To Find Shipment</Label>
                    <input type="text" class="form-control" name="tracking_number" id="tracking_number"
                        style=" border: 3px solid rgba(255, 166, 0, 0.884); border-radius: 5px; padding: 10px; width: 100%; box-sizing: border-box;">
                </div>
                <div><button class="btn btn-warning w-100 mt-3">Track Now</button></div>
            </div>

            <div class="tracking-container">
                <article class="card">
                    <header class="card-header">Tracking Infomation</header>
                    <div class="card-body">
                        <h6>Order ID: OD45345345435</h6>
                        <article class="card">
                            <div class="card-body row">
                                <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div>
                                <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i
                                        class="fa fa-phone"></i> +1598675986 </div>
                                <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                                <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                            </div>
                        </article>
                        <div class="track">
                            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span
                                    class="text">Order confirmed</span> </div>
                            <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span
                                    class="text"> Picked by courier</span> </div>
                            <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span
                                    class="text"> On the way </span> </div>
                            <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span
                                    class="text">Ready for pickup</span> </div>
                        </div>
                        <hr>
                        <ul class="row">
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="https://i.imgur.com/iDwDQ4o.png" class="img-sm border">
                                    </div>
                                    <figcaption class="info align-self-center">
                                        <p class="title">Dell Laptop with 500GB HDD <br> 8GB RAM</p> <span
                                            class="text-muted">$950 </span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="https://i.imgur.com/tVBy5Q0.png" class="img-sm border">
                                    </div>
                                    <figcaption class="info align-self-center">
                                        <p class="title">HP Laptop with 500GB HDD <br> 8GB RAM</p> <span
                                            class="text-muted">$850 </span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="https://i.imgur.com/Bd56jKH.png" class="img-sm border">
                                    </div>
                                    <figcaption class="info align-self-center">
                                        <p class="title">ACER Laptop with 500GB HDD <br> 8GB RAM</p> <span
                                            class="text-muted">$650 </span>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <hr>
                        <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back
                            to orders</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
