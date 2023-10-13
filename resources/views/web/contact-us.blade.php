@extends('web.layouts.app')

@section('contents')
    <!--  breadcrumb-area  start -->
    <div class="wrapper-box p-relative ">
        <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
            data-background="{{ $web_assets }}/assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1 ">
                            <div class="breadcrumb__list mb-10">
                                <h3 class="breadcrumb__title mb-15">Contact us</h3>
                                <div class="breadcrumb__item">
                                    <span><a href="/">Home </a></span>
                                    <span class="dvdr"> / </span>
                                    <span class="sub-page-black">Contact us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->
    <!--  contact-area  start -->
    <div class="contact-page-area pt-120 pb-120">
        <div class="container">
           
            <div class="row">

                <div class="col-xl-4">
                    <div class="contact-page-title mr-70">
                        <div class="about-section-title z-index  pb-50">
                            <div class="tp-section__subtitle mb-15 p-relative">CONTACT US NOW
                            </div>
                            <h2 class="tp-section__title mb-30">Write us a
                                message
                            </h2>
                            <p class="mb-35">Air freight is the fastest way to transport goods and we can deliver your
                                cargo to
                                any continent you want fastest way
                                to transport</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="contact-page__comment-form">
                        <form action="{{ route('web.contact-us.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="contact-page__comment-input">
                                        <input name="name" type="text" placeholder="Your Name*">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="contact-page__comment-input">
                                        <input name="email" type="email" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <div class="contact-page__comment-input">
                                        <input name="subject" type="text" placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="contact-page__comment-input">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="contact-page__comment-btn">
                                        <button type="submit" class="thm-btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
           <div class="text-success">
            @include('notifications.flash-messages')
           </div>

        </div>
    </div>
    <!--  contact-area  end -->
    <!--  location area  start -->
    <div class="tp-location-area">
        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-location-page-item theme-color d-flex align-items-center">
                        <div class="icon p-relative">
                            <span><i class="flaticon-group"></i></span>
                        </div>
                        <div class="text">
                            <h3 class="tp-location-page-title">About Portx</h3>
                            <p>Prior to joining company, she spent 20+ years at Inmosys, where he held a wide range of
                                global
                                leadership roles</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-location-page-item tp-location-page-item-2 theme-background d-flex align-items-center">
                        <div class="icon p-relative">
                            <span><i class="flaticon-email"></i></span>
                        </div>
                        <div class="text">
                            <h3 class="tp-location-page-title">Our Adreess</h3>
                            <p>66 Riad Washhington DC main strett <br>
                                United States of America <br>
                                N,O Box 87765</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="tp-location-page-item  tp-location-page-item-3 theme-color-2 d-flex align-items-center">
                        <div class="icon p-relative">
                            <span><i class="flaticon-customer-service"></i></span>
                        </div>
                        <div class="text">
                            <h3 class="tp-location-page-title">Our Address</h3>
                            <p><a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="62120d10161a0a070e120b0c040d22050f030b0e4c010d0f">[email&#160;protected]</a>
                                <br>
                                <a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="355c5b535a455a47414d755258545c591b565a58">[email&#160;protected]</a> <br>
                                +0928 4804 02004
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  location area  end -->
    <div class="tp-contact-map-area p-relative">
        <div class="tp-contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d23341055.96982108!2d121.89101939214198!3d29.057389046526!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1685587831013!5m2!1sen!2sbd"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    <!--  contact map area  end -->
@endsection
