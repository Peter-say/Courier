@extends('web.layouts.app')

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">

@section('contents')

   <!--  breadcrumb-area  start -->
   <div class="wrapper-box p-relative ">
    <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
       data-background="{{$web_assets}}/assets/img/breadcrumb/breadcrumb-bg-1.jpg">
       <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="breadcrumb__content p-relative z-index-1">
                   <div class="breadcrumb__list mb-10">
                      <h3 class="breadcrumb__title mb-15">Service</h3>
                      <div class="breadcrumb__item">
                         <span><a href="/">Home </a></span>
                         <span class="dvdr"> / </span>
                         <span class="sub-page-black">Service</span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  breadcrumb-area  end -->
 <!-- services area start -->
 <section class="services-area pt-120 pb-90">
    <div class="container">
       <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
             <div class="tp-services-3__item p-relative mb-30 z-index-2 wow fadeInUp  " data-wow-duration=".9s"
                data-wow-delay=".3s">
                <div class="tp-services-3__thumb tp-services-3__before-color p-relative">
                   <img class="w-100" src="{{$web_assets}}/assets/img/services/services-1.jpg" alt="">
                </div>
                <div class="tp-services-3__wrap d-flex align-items-start">
                   <div class="tp-services-3__icon">
                      <span><i class="flaticon-plane-1"></i></span>
                   </div>
                   <div class="tp-services-3__content">
                      <h3 class="tp-services-3-title-3"><a href="services-details.html">Air Transport</a></h3>
                      <p>Air freight is the fastest way to transport goods on air</p>
                      {{-- <div class="tp-services-3__btn">
                         <a class="tp-services-btn" href="contact.html">READ MORE<i
                               class="fa-sharp fa-regular fa-arrow-right"></i></a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
             <div class="tp-services-3__item p-relative mb-30 z-index-2 wow fadeInUp  " data-wow-duration=".9s"
                data-wow-delay=".5s">
                <div class="tp-services-3__thumb tp-services-3__before-color p-relative">
                   <img class="w-100" src="{{$web_assets}}/assets/img/services/services-2.jpg" alt="">
                </div>
                <div class="tp-services-3__wrap d-flex align-items-start">
                   <div class="tp-services-3__icon">
                      <span><i class="flaticon-truck-1"></i></span>
                   </div>
                   <div class="tp-services-3__content">
                      <h3 class="tp-services-3-title-3"><a href="services-details.html">Road Freight</a></h3>
                      <p>Air freight is the fastest way to transport goods on road</p>
                      {{-- <div class="tp-services-3__btn">
                         <a class="tp-services-btn" href="contact.html">READ MORE<i
                               class="fa-sharp fa-regular fa-arrow-right"></i></a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
             <div class="tp-services-3__item p-relative mb-30 z-index-2 wow fadeInUp  " data-wow-duration=".9s"
                data-wow-delay=".7s">
                <div class="tp-services-3__thumb tp-services-3__before-color p-relative">
                   <img class="w-100" src="{{$web_assets}}/assets/img/services/services-3.jpg" alt="">
                </div>
                <div class="tp-services-3__wrap d-flex align-items-start">
                   <div class="tp-services-3__icon">
                      <span><i class="flaticon-cruise"></i></span>
                   </div>
                   <div class="tp-services-3__content">
                      <h3 class="tp-services-3-title-3"><a href="services-details.html">Ocean Freight</a></h3>
                      <p>Air freight is the fastest way to transport goods in/on the sea</p>
                      {{-- <div class="tp-services-3__btn">
                         <a class="tp-services-btn" href="contact.html">READ MORE<i
                               class="fa-sharp fa-regular fa-arrow-right"></i></a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
             <div class="tp-services-3__item p-relative mb-30 z-index-2 wow fadeInUp  " data-wow-duration=".9s"
                data-wow-delay=".3s">
                <div class="tp-services-3__thumb tp-services-3__before-color p-relative">
                   <img class="w-100" src="{{$web_assets}}/assets/img/services/services-4.jpg" alt="">
                </div>
                <div class="tp-services-3__wrap d-flex align-items-start">
                   <div class="tp-services-3__icon">
                      <span><i class="flaticon-train"></i></span>
                   </div>
                   <div class="tp-services-3__content">
                      <h3 class="tp-services-3-title-3"><a href="services-details.html">Rail Transport</a></h3>
                      <p>Air freight is the fastest way to transport goods on rail</p>
                      {{-- <div class="tp-services-3__btn">
                         <a class="tp-services-btn" href="contact.html">READ MORE<i
                               class="fa-sharp fa-regular fa-arrow-right"></i></a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
             <div class="tp-services-3__item p-relative mb-30 z-index-2 wow fadeInUp  " data-wow-duration=".9s"
                data-wow-delay=".5s">
                <div class="tp-services-3__thumb tp-services-3__before-color p-relative">
                   <img class="w-100" src="{{$web_assets}}/assets/img/services/services-5.jpg" alt="">
                </div>
                <div class="tp-services-3__wrap d-flex align-items-start">
                   <div class="tp-services-3__icon">
                      <span><i class="flaticon-warehouse"></i></span>
                   </div>
                   <div class="tp-services-3__content">
                      <h3 class="tp-services-3-title-3"><a href="services-details.html">Warehousing</a></h3>
                      <p>We got a perfect warehouse to housing your goods </p>
                      {{-- <div class="tp-services-3__btn">
                         <a class="tp-services-btn" href="contact.html">READ MORE<i
                               class="fa-sharp fa-regular fa-arrow-right"></i></a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
             <div class="tp-services-3__item p-relative mb-30 z-index-2 wow fadeInUp  " data-wow-duration=".9s"
                data-wow-delay=".7s">
                <div class="tp-services-3__thumb tp-services-3__before-color p-relative">
                   <img class="w-100" src="{{$web_assets}}/assets/img/services/services-6.jpg" alt="">
                </div>
                <div class="tp-services-3__wrap d-flex align-items-start">
                   <div class="tp-services-3__icon">
                      <span><i class="flaticon-delivery-truck"></i></span>
                   </div>
                   <div class="tp-services-3__content">
                      <h3 class="tp-services-3-title-3"><a href="services-details.html">Road Transport</a></h3>
                      <p>Air freight is the fastest way to transport goods on road</p>
                      {{-- <div class="tp-services-3__btn">
                         <a class="tp-services-btn" href="contact.html">READ MORE<i
                               class="fa-sharp fa-regular fa-arrow-right"></i></a>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- services area end -->
 <!-- cta area start -->
 <div class="cta-area-2 theme-color-2 pt-60 pb-60 p-relative fix">
    <div class="tp-cta__lg-circel">
       <img src="{{$web_assets}}/assets/img/blog/lg-circel.png" alt="">
    </div>
    <div class="tp-cta__sm-circel">
       <img src="{{$web_assets}}/assets/img/blog/circel.png" alt="">
    </div>
    <div class="tp-cta__shap-3 wow slideInLeft   ">
       <img src="{{$web_assets}}/assets/img/cta/cta-shap-3.png" alt="">
    </div>
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-9 col-lg-8">
             <div class="tp-cta-2">
                <div class="tp-cta__content wow fadeInUp   text-center text-lg-start" data-wow-duration=".9s"
                   data-wow-delay=".5s">
                   <h2 class="tp-cta-title-2">We’re best transport agency for <br>
                      give best quality service</h2>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4">
             <div class="tp-cta-2__btn text-center text-lg-start">
                <div class="tp-cta-2__btn wow fadeInUp  " data-wow-duration=".9s" data-wow-delay=".7s">
                   <a class="tp-btn-white" href="{{route('web.contact-us')}}">REQUEST A QUOTE</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- cta area end -->

@endsection