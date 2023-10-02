@extends('web.layouts.app')

@section('contents')
    <!-- slider area start -->
    <div class="tp-slider__area p-relative">
        <div class="hero-active swiper-container">
            <div class="swiper-wrapper">
                <div class=" swiper-slide tp-slider__item p-relative">
                    <div class="tp-slider-right-bg tp-slider__height d-flex align-items-center "
                        data-background="{{ $web_assets }}/assets/img/slider/slider-img.jpg">
                        <div class="tp-slider__social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="circal">
                        </div>
                        <div class="cargo-shipping text-end ">
                            <div class="cargo-shipping-text">
                                <span>Cargo Shipping</span>
                            </div>
                        </div>
                        <div class="tp-slider__counter-number d-flex align-items-start">
                            <span>01</span>
                            <div class="tp-slider__quote-icon">
                                <i class="flaticon-quotations"></i>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-9 col-xl-9">
                                    <div class="tp-slider__content p-relative z-index-1">
                                        <h2 class="tp-slider-title mb-35">Safest Logistics
                                            Solutions Provider
                                            With Integrity
                                        </h2>
                                        <div class="tp-slide-btn-box">
                                            <a class="thm-btn" href="{{ route('web.about-us') }}">EXPLORE MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" swiper-slide tp-slider__item p-relative">
                    <div class="tp-slider-right-bg tp-slider__height d-flex align-items-center "
                        data-background="{{ $web_assets }}/assets/img/slider/slider-img-2.jpg">
                        <div class="tp-slider__social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="circal">
                        </div>
                        <div class="cargo-shipping text-end">
                            <div class="cargo-shipping-text">
                                <span>Cargo Shipping</span>
                            </div>
                        </div>
                        <div class="tp-slider__counter-number d-flex align-items-start">
                            <span>03</span>
                            <div class="tp-slider__quote-icon">
                                <i class="flaticon-quotations"></i>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="tp-slider__content p-relative z-index-1">
                                        <h2 class="tp-slider-title mb-35">Safest Logistics
                                            Solutions Provider
                                            With Integrity
                                        </h2>
                                        <div class="tp-slide-btn-box">
                                            <a class="thm-btn" href="about.html">EXPLORE MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" swiper-slide tp-slider__item p-relative">
                    <div class="tp-slider-right-bg tp-slider__height d-flex align-items-center "
                        data-background="{{ $web_assets }}/assets/img/slider/slider-img-3.jpg">
                        <div class="tp-slider__social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="circal">
                        </div>
                        <div class="cargo-shipping text-end">
                            <div class="cargo-shipping-text">
                                <span>Cargo Shipping</span>
                            </div>
                        </div>
                        <div class="tp-slider__counter-number d-flex align-items-start">
                            <span>02</span>
                            <div class="tp-slider__quote-icon">
                                <i class="flaticon-quotations"></i>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="tp-slider__content p-relative z-index-1">
                                        <h2 class="tp-slider-title mb-35">Safest Logistics
                                            Solutions Provider
                                            With Integrity
                                        </h2>
                                        <div class="tp-slide-btn-box">
                                            <a class="thm-btn" href="about.html">EXPLORE MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-slider__nav text-end">
                <button class="hero-button-next"><i class="fa-regular fa-angle-left"></i></button>
                <button class="hero-button-prev"><i class="fa-regular fa-angle-right"></i></button>
            </div>
        </div>
    </div>
    <!-- slider area end -->
    <!-- services area start -->
    <div class="services-area tp-services__ptb pt-120 pb-90 p-relative fix">
        <div class="tp-services__tran  wow fadeInDownBig    ">
            <img src="{{ $web_assets }}/assets/img/services/services-tran.png" alt="">
        </div>
        <div class="tp-services__shap">
            <img src="{{ $web_assets }}/assets/img/services/services-left-img.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="services-section-title z-index  pb-50">
                        <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative wow fadeInUp"
                            data-wow-duration=".9s" data-wow-delay=".3s">OUR SERVICES
                        </div>
                        <h2 class="tp-section__title mb-10 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".4s">
                            Safe & Reliable
                            Cargo Solutions
                        </h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="tp-services__item p-relative fix mb-30 wow fadeInUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-services__hover-img">
                            <img src="{{ $web_assets }}/assets/img/services/services-hover-img.jpg" alt="">
                        </div>
                        <div class="tp-services__wrap z-index-2 d-flex align-items-start">
                            <div class="tp-services__icon">
                                <i class="flaticon-plane"></i>
                            </div>
                            <div class="tp-services__content">
                                <h3 class="tp-services__title-1"><a href="#">Air Freight</a></h3>
                                <p>Transport your cargo by air to any destination competitively.</p>
                            </div>
                            <div class="tp-services__number-count">
                                <span>01</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="tp-services__item p-relative fix mb-30 wow fadeInUp" data-wow-duration=".9s"
                        data-wow-delay=".6s">
                        <div class="tp-services__hover-img">
                            <img src="{{ $web_assets }}/assets/img/services/services-hover-img.jpg" alt="">
                        </div>
                        <div class="tp-services__wrap z-index-2 d-flex align-items-start">
                            <div class="tp-services__icon">
                                <i class="flaticon-cruise"></i>
                            </div>
                            <div class="tp-services__content">
                                <h3 class="tp-services__title-1"><a href="#">Ship Freight</a></h3>
                                <p>Transport your cargo by sea and remain competitive.</p>
                            </div>
                            <div class="tp-services__number-count">
                                <span>02</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="tp-services__item p-relative fix mb-30 wow fadeInUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-services__hover-img">
                            <img src="{{ $web_assets }}/assets/img/services/services-hover-img.jpg" alt="">
                        </div>
                        <div class="tp-services__wrap z-index-2 d-flex align-items-start">
                            <div class="tp-services__icon">
                                <i class="flaticon-delivery-truck"></i>
                            </div>
                            <div class="tp-services__content">
                                <h3 class="tp-services__title-1"><a href="#">Road Transport</a></h3>
                                <p>Transport your cargo by road and remain competitive.</p>
                            </div>
                            <div class="tp-services__number-count">
                                <span>03</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="tp-services__item p-relative fix mb-30 wow fadeInUp" data-wow-duration=".9s"
                        data-wow-delay=".8s">
                        <div class="tp-services__hover-img">
                            <img src="{{ $web_assets }}/assets/img/services/services-hover-img.jpg" alt="">
                        </div>
                        <div class="tp-services__wrap z-index-2 d-flex align-items-start">
                            <div class="tp-services__icon">
                                <i class="flaticon-train"></i>
                            </div>
                            <div class="tp-services__content">
                                <h3 class="tp-services__title-1"><a href="#">Railway Logistic</a></h3>
                                <p>Transport your cargo by rail and remain competitive.</p>
                            </div>
                            <div class="tp-services__number-count">
                                <span>04</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="tp-services__item p-relative fix mb-30 wow fadeInUp" data-wow-duration=".9s"
                        data-wow-delay=".9s">
                        <div class="tp-services__hover-img">
                            <img src="{{ $web_assets }}/assets/img/services/services-hover-img.jpg" alt="">
                        </div>
                        <div class="tp-services__wrap z-index-2 d-flex align-items-start">
                            <div class="tp-services__icon">
                                <i class="flaticon-warehouse-1"></i>
                            </div>
                            <div class="tp-services__content">
                                <h3 class="tp-services__title-1"><a href="#">Warehousing</a></h3>
                                <p>Store your cargo in our warehouses and remain competitive.</p>
                            </div>
                            <div class="tp-services__number-count">
                                <span>05</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- services area end -->
    <!-- video area start -->
    <div class="video-area tp-video__height-video-bg tp-video__bg-opacity p-relative jarallax"
        style="background-image: url({{ $web_assets }}/assets/img/video/home-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div
                        class="tp-video__wrap d-flex align-items-center justify-content-md-end justify-content-center z-index-2 pt-135">
                        {{-- <div class="video-one__text">
                            <h4>Watch our videos</h4>
                        </div>
                        <div class="video-one__video-link ml-40">
                            <a href="https://www.youtube.com/watch?v=o4GuSJYSzrY" class="popup-video">
                                <div class="video-one__video-icon">
                                    <span><i class="fa-sharp fa-solid fa-play"></i></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video area end -->
    <!-- about area start -->
    <div class="about-area ">
        <div class="tp-about__wrap pt-110 pb-60">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12 wow fadeInLeft   " data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-about__content">
                            <div class="about-section-title z-index  pb-50">
                                <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">KNOW ABOUT
                                    PORTX
                                </div>
                                <h2 class="tp-section__title mb-30">We provide full range
                                    global logistics solution
                                </h2>
                                <p class="mb-35">We strive to understand what they’re going through, what they need <br>
                                    what their price points are, and what’s important to them and their customers. We
                                    connect
                                    with
                                    our customers</p>
                                <div class="tp-about__list mb-50">
                                    <div class="tp-about__travel d-flex align-items-center mb-20">
                                        <div class="tp-about__icon mr-20">
                                            <i class="flaticon-find"></i>
                                        </div>
                                        <div class="tp-about__text">
                                            <span>Optimized Travel Cost</span>
                                        </div>
                                    </div>
                                    <div class="tp-about__delivery d-flex align-items-center">
                                        <div class="tp-about__icon mr-20">
                                            <i class="flaticon-delivery"></i>
                                        </div>
                                        <div class="tp-about__text">
                                            <span>Delivery Intime</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-about__btn-box">
                                    <a href="{{ route('web.about-us') }}" class="about-two__btn thm-btn">EXPLORE MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12 wow fadeInRight   " data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-about__right-img p-relative text-end">
                            <div class="tp-about__lg-img ml-40">
                                <img class="w-100" src="{{ $web_assets }}/assets/img/about/about-lg.jpg"
                                    alt="">
                            </div>
                            <div class="tp-about__sm-img">
                                <img class="w-100" src="{{ $web_assets }}/assets/img/about/about-sm.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!-- counter area start -->
    <div class="counter-area">
        <div class="container tp-counter__border-tb">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6  col-sm-12 col-12 tp-counter__border-r">
                    <div class="tp-counter__wrap d-flex align-items-center justify-content-center pt-20 pb-20 ">
                        <h3 class="counter p-relative"><span>81294</span></h3>
                        <span>Delivery Packaged</span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="tp-counter__wrap d-flex align-items-center justify-content-center pt-20 pb-20 ">
                        <h3 class="counter p-relative"><span>13893</span></h3>
                        <span>Satisfied Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->
    <!-- project area start -->
    <div class="project-area pt-110 fix">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-9">
                    <div class="blog-section-title text-center z-index  pb-40">
                        <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">CHECK OUR LATEST
                            PROJECTS
                        </div>
                        <h2 class="tp-section__title mb-10">Works across the world
                        </h2>
                    </div>
                </div>
            </div>
            <div class="project-active swiper-container gx-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tp-project__item p-relative">
                            <div class="tp-project__thumb ">
                                <img class="w-100" src="{{ $web_assets }}/assets/img/project/project-1.jpg"
                                    alt="">
                            </div>
                            <div class="tp-project-box">
                                <div class="tp-project-content">
                                    <div class="tp-project-info ">
                                        <span>ANALYTICS</span>
                                        <h4 class="tp-project-titile-1"><a href="project-details.html">Supply Chain</a>
                                        </h4>
                                    </div>
                                </div>
                                {{-- <div class="tp-project-icon">
                                    <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-project__item p-relative">
                            <div class="tp-project__thumb ">
                                <img class="w-100" src="{{ $web_assets }}/assets/img/project/project-2.jpg"
                                    alt="">
                            </div>
                            <div class="tp-project-box">
                                <div class="tp-project-content">
                                    <div class="tp-project-info ">
                                        <span>LOGISTICS</span>
                                        <h4 class="tp-project-titile-1"><a href="project-details.html">Special
                                                Transport</a></h4>
                                    </div>
                                </div>
                                {{-- <div class="tp-project-icon">
                                    <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-project__item p-relative">
                            <div class="tp-project__thumb ">
                                <img class="w-100" src="{{ $web_assets }}/assets/img/project/project-3.jpg"
                                    alt="">
                            </div>
                            <div class="tp-project-box">
                                <div class="tp-project-content">
                                    <div class="tp-project-info ">
                                        <span>DISTRIBUTION</span>
                                        <h4 class="tp-project-titile-1"><a href="project-details.html">Shipping
                                                Transport</a></h4>
                                    </div>
                                </div>
                                {{-- <div class="tp-project-icon">
                                    <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-project__item p-relative">
                            <div class="tp-project__thumb ">
                                <img class="w-100" src="{{ $web_assets }}/assets/img/project/project-4.jpg"
                                    alt="">
                            </div>
                            <div class="tp-project-box">
                                <div class="tp-project-content">
                                    <div class="tp-project-info ">
                                        <span>ANALYTICS</span>
                                        <h4 class="tp-project-titile-1"><a href="project-details.html">Air Freight
                                                Solution</a>
                                        </h4>
                                    </div>
                                </div>
                                {{-- <div class="tp-project-icon">
                                    <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project area end -->
    <!-- challenges area start -->
    <div class="challenges-area pt-110 pb-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-9">
                    <div class="blog-section-title text-center z-index  pb-40">
                        <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">WE SPECIALISE
                            TRANSPORTATION
                        </div>
                        <h2 class="tp-section__title mb-10">We have challenges covered
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 ">
                <div class="col-xl-3 col-lg-3 col-md-3 p-0">
                    <div class="tp-challenges__item text-center tp-challenges__item-last-none">
                        <div class="tp-challenges__icon p-relative mb-30">
                            <i class="flaticon-project-management"></i>
                        </div>
                        <div class="tp-challenges__number p-relative">
                            <h3 class="counter"><span>980</span></h3>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 p-0">
                    <div class="tp-challenges__item text-center tp-challenges__item-last-none">
                        <div class="tp-challenges__icon p-relative mb-30">
                            <i class="flaticon-teamwork"></i>
                        </div>
                        <div class="tp-challenges__number p-relative">
                            <h3 class="counter"><span>665</span></h3>
                            <span>People</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 p-0">
                    <div class="tp-challenges__item text-center tp-challenges__item-last-none">
                        <div class="tp-challenges__icon p-relative mb-30">
                            <i class="flaticon-badge"></i>
                        </div>
                        <div class="tp-challenges__number p-relative">
                            <h3 class="counter"><span>30</span></h3>
                            <span>Years</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 p-0">
                    <div class="tp-challenges__item tp-challenges__item-last tp-challenges__item-last-none text-center">
                        <div class="tp-challenges__icon p-relative mb-30">
                            <i class="flaticon-coffee-cup"></i>
                        </div>
                        <div class="tp-challenges__number p-relative">
                            <h3 class="counter"><span>148</span></h3>
                            <span>Offices</span>
                        </div>
                    </div>
                </div>
                {{-- <div class="tp-challenges__join-over text-center mt-70">
                    <p>Join over 3000 people who engage with sector. <button><a href="contact.html">Join Now!</a></button>
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- challenges area end -->

    <!-- cta area start -->
    <section class="cta-area cta-opasity pt-170 pb-180 p-relative include-bg jarallax "
        data-background="{{ $web_assets }}/assets/img/bg/cta1-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta__content text-center z-index-1">
                        <span class=" wow fadeInUp   " data-wow-duration=".9s" data-wow-delay=".3s">Get in touch with
                            us anytime</span>
                        <h3 class="cta-title-1  wow fadeInUp   " data-wow-duration=".9s" data-wow-delay=".5s"> Looking
                            for the best
                            <br>
                            logistics transport service?
                        </h3>
                        <div class="cta__btn wow fadeInUp   " data-wow-duration=".9s" data-wow-delay=".7s">
                            <a class="tp-btn" href="{{ route('web.contact-us') }}">REQUEST A QUOTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- choose area start -->
    <div class="choose-area pt-120 pb-50 p-relative z-index-1">
        <div class="tp-choose__circel-img d-none d-md-block">
            <img src="{{ $web_assets }}/assets/img/choose/choose-circel-img.png" alt="">
        </div>
        <div class="red-trick wow fadeInUp   d-none d-xxl-block">
            <img src="{{ $web_assets }}/assets/img/choose/trick-img.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12">
                    <div class="tp-choose__content">
                        <div class="choose-section-title z-index">
                            <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative wow fadeInUp   "
                                data-wow-duration=".9s" data-wow-delay=".7s">Why you Choose us
                            </div>
                            <h2 class="tp-section__title mb-30 wow fadeInUp   " data-wow-duration=".9s"
                                data-wow-delay=".3s">We create an opportunity
                                reach our potential
                            </h2>
                            <p class="mb-35 wow fadeInUp   " data-wow-duration=".9s" data-wow-delay=".5s">Logistics is a
                                distinguished supply chain management firm which provides <br>
                                comprehensive solutions for warehousing, transportation and a host of <br> logistics
                                services
                            </p>
                        </div>
                        <div class="tp-choose__list mb-50 wow fadeInUp   " data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-choose__travel d-flex align-items-center mb-20">
                                <div class="tp-choose__icon mr-20">
                                    <ul>
                                        <li><i class="flaticon-package"></i><span>Safe package</span></li>
                                        <li><i class="flaticon-internet"></i><span>Global Tracking</span></li>
                                        <li><i class="flaticon-boat"></i><span>Ship Everywhere</span></li>
                                        <li><i class="flaticon-headphone"></i><span>24/7 Support</span></li>
                                        <li><i class="flaticon-clock"></i><span>In Time Delivery</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <H4>Request A Quote</H4>
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
        </div>
    </div>
    <!-- choose area end -->

    <!-- features area start -->
    <div class="features-area tp-features__bg-color p-relative pt-10 fix">
        <div class="tp-features__class-fix">
            <div class="tp-features__shap-img">
                <img src="{{ $web_assets }}/assets/img/features/features-shap-img-2.png" alt="">
            </div>
            <div class="container mb-110">
                <div class="row align-items-xl-end">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="tp-features__img wow fadeInDownBig   ">
                            {{-- <img src="{{$web_assets}}/assets/img/features/features-img.png" alt=""> --}}
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="tp-features">
                            <div class="tp-features__wrap">
                                <h2 class="tp-section__title-white mb-40">Our fleet covers your needs & pricing range</h2>
                                <div class="tp-features__list">
                                    <!-- First Set of Features -->
                                    <div class="tp-features__single d-flex align-items-start">
                                        <span class="mr-30"><img src="{{ $web_assets }}/assets/img/features/icon1.png"
                                                alt=""></span>
                                        <p>Providing independent advice and identifying the right fit for you, sourced and
                                            procured based on solutions. Advice and identifying.</p>
                                    </div>

                                    <!-- Second Set of Features -->
                                    <div class="tp-features__single d-flex align-items-start">
                                        <span class="mr-30"><img src="{{ $web_assets }}/assets/img/features/icon2.png"
                                                alt=""></span>
                                        <p>Offering competitive pricing and flexible options to meet your budget and
                                            requirements. Competitive pricing and flexible options.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tp-brand__items mt-110">
                    <div class="row gx-0">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tp-brand__single p-relative">
                                <span class="tp-brand__hover-logo ">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-bg.jpg" alt="">
                                </span>
                                <span class="tp-brand__logo">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-1.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tp-brand__single p-relative">
                                <span class="tp-brand__hover-logo ">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-bg.jpg" alt="">
                                </span>
                                <span class="tp-brand__logo">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-2.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tp-brand__single p-relative">
                                <span class="tp-brand__hover-logo ">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-bg.jpg" alt="">
                                </span>
                                <span class="tp-brand__logo">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-3.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="tp-brand__single p-relative">
                                <span class="tp-brand__hover-logo ">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-bg.jpg" alt="">
                                </span>
                                <span class="tp-brand__logo">
                                    <img src="{{ $web_assets }}/assets/img/brand/brand-4.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- features area end -->
    <!-- testimonial area start -->
    <div class="testimonial-area pt-120 pb-120 fix p-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tp-choose__content mr-100">
                        <div class="choose-section-title z-index">
                            <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">CLIENTS
                                TESTIMONIAL
                            </div>
                            <h2 class="tp-section__title mb-30">What they’re talking
                                about company
                            </h2>
                            <p>Providers of personal safety, comfort, and protection products for the outdoor
                                enthusiast It has been our experience that Classic Transportation is in an elite
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="testimonials-wrapper">
                        <div class="testimonials-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide ">
                                    <div class="tp-testimonial__item p-relative fix">
                                        <div class="shap-img">
                                            <img src="{{ $web_assets }}/assets/img/testimonial/shap-1.png"
                                                alt="">
                                        </div>
                                        <div class="quote-img">
                                            <span> <i class="flaticon-quote"></i></span>
                                        </div>
                                        <div class="tp-testimonial__content pb-20">
                                            <p>Sed tincidunt augue et so lobortis lacus, nec feugiat massa gravida a. Aenean
                                                risus
                                                dolor, placerat teelementumMorbi lacus metus, pellentesque rat ornare duis
                                            </p>
                                        </div>
                                        <div class="tp-testimonial__avata d-flex align-items-start">
                                            <div class="tp-testimonial__avata-img p-relative mr-30">
                                                <img src="{{ $web_assets }}/assets/img/testimonial/testimonial-1.jpg"
                                                    alt="">
                                                <div class="icon">
                                                    <i class="flaticon-double-quotes"></i>
                                                </div>
                                            </div>
                                            <div class="tp-testimonial__avada-info ">
                                                <div class="tp-testimonial__ster-icon mb-20">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="tp-testimonial__text">
                                                    <h3 class="tp-testimonial-title-1">Harry Newman</h3>
                                                    <span>Co Founder</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-2__bottom-color"></div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="tp-testimonial__item p-relative fix">
                                        <div class="shap-img">
                                            <img src="{{ $web_assets }}/assets/img/testimonial/shap-1.png"
                                                alt="">
                                        </div>
                                        <div class="quote-img">
                                            <span> <i class="flaticon-quote"></i></span>
                                        </div>
                                        <div class="tp-testimonial__content pb-20">
                                            <p>Sed tincidunt augue et so lobortis lacus, nec feugiat massa gravida a. Aenean
                                                risus
                                                dolor, placerat teelementumMorbi lacus metus, pellentesque rat ornare duis
                                            </p>
                                        </div>
                                        <div class="tp-testimonial__avata d-flex align-items-start">
                                            <div class="tp-testimonial__avata-img p-relative mr-30">
                                                <img src="{{ $web_assets }}/assets/img/testimonial/testimonial-5.jpg"
                                                    alt="">
                                                <div class="icon">
                                                    <i class="flaticon-double-quotes"></i>
                                                </div>
                                            </div>
                                            <div class="tp-testimonial__avada-info ">
                                                <div class="tp-testimonial__ster-icon mb-20">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="tp-testimonial__text">
                                                    <h3 class="tp-testimonial-title-1">Harry Newman</h3>
                                                    <span>Developer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-testimonial__nav">
                    <div class="testimonial-button-next"><i class="fa-regular fa-angle-right"></i></div>
                    <div class="testimonial-button-prev"><i class="fa-regular fa-angle-left"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->

    <!-- team area start -->
    <div class="team-area fix">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-9">
                    <div class="blog-section-title text-center z-index  pb-50">
                        <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">Our Workers
                        </div>
                        <h2 class="tp-section__title mb-10">Meet with expert team
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-xl-12">
                    <div class="swiper-container team-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team__slider-wrapper">
                                    <div class="team__item p-relative ">
                                        <div class="team__thumb fix">
                                            <img class="w-100" src="{{ $web_assets }}/assets/img/team/team-1.jpg"
                                                alt="">
                                            <div class="team__wrapp">
                                                <div class="team__content">
                                                    <h3 class="team__title-1"><a href="team-details.html">Helen
                                                            Wilmore</a></h3>
                                                    <span>Cargo Head</span>
                                                    <div class="team__social">
                                                        <ul>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team__lg-text text-center">
                                                    <h2>PORTX</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team__slider-wrapper">
                                    <div class="team__item p-relative">
                                        <div class="team__thumb">
                                            <img class="w-100" src="{{ $web_assets }}/assets/img/team/team-2.jpg"
                                                alt="">
                                            <div class="team__wrapp">
                                                <div class="team__content">
                                                    <h3 class="team__title-1"><a href="team-details.html">Helen
                                                            Wilmore</a></h3>
                                                    <span>Cargo Head</span>
                                                    <div class="team__social">
                                                        <ul>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team__lg-text text-center">
                                                    <h2>PORTX</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team__slider-wrapper">
                                    <div class="team__item p-relative">
                                        <div class="team__thumb">
                                            <img class="w-100" src="{{ $web_assets }}/assets/img/team/team-3.jpg"
                                                alt="">
                                            <div class="team__wrapp">
                                                <div class="team__content">
                                                    <h3 class="team__title-1"><a href="team-details.html">Helen
                                                            Wilmore</a></h3>
                                                    <span>Cargo Head</span>
                                                    <div class="team__social">
                                                        <ul>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team__lg-text text-center">
                                                    <h2>PORTX</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team__slider-wrapper">
                                    <div class="team__item p-relative">
                                        <div class="team__thumb">
                                            <img class="w-100" src="{{ $web_assets }}/assets/img/team/team-4.jpg"
                                                alt="">
                                            <div class="team__wrapp">
                                                <div class="team__content">
                                                    <h3 class="team__title-1"><a href="team-details.html">Helen
                                                            Wilmore</a></h3>
                                                    <span>Cargo Head</span>
                                                    <div class="team__social">
                                                        <ul>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-instagram"></i></a></li>
                                                            <li><a href="#"><i
                                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team__lg-text text-center">
                                                    <h2>PORTX</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->

    <!-- blog area start -->
    {{-- <div class="blog-area pt-105 pb-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-9">
                    <div class="blog-section-title text-center z-index  pb-50">
                        <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">Our News From Blog
                        </div>
                        <h2 class="tp-section__title mb-10">Latest news, advices & best
                            posts from the blog
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="tpblog  pb-30 wow fadeInUp  " data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{$web_assets}}/assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__content fix p-relative">
                            <div class="tpblog__meta mb-10 mt-15">
                                <span class="date pr-25">April 15, 2023 </span>
                                <span class="user">by Belal Mahmud</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Grow Your Following by Building
                                    Trustworthy Brand</a>
                            </h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tpblog pb-30 wow fadeInUp  " data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{$web_assets}}/assets/img/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__content fix p-relative">
                            <div class="tpblog__meta mb-10 mt-15">
                                <span class="date pr-25">March 18, 2023</span>
                                <span class="user">by Belal Mahmud
                                </span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Inland freight a worthy solution
                                    for your business
                                </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tpblog pb-30 wow fadeInUp  " data-wow-duration=".9s" data-wow-delay=".9s">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{$web_assets}}/assets/img/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__content fix p-relative">
                            <div class="tpblog__meta mb-10 mt-15">
                                <span class="date pr-25">January 24, 2023</span>
                                <span class="user">by Belal Mahmud
                                </span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Five things you should have
                                    ready for your broker
                                </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="blog-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- blog area end -->
@endsection
