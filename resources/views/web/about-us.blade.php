@extends('web.layouts.app')


<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDescription }}">

@section('contents')

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
       <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-12 wow fadeInLeft  " data-wow-duration=".9s"
             data-wow-delay=".5s">
             <div class="tpabout__section-title z-index  pb-40 ">
                <div class="tp-section__subtitle mb-15 p-relative">KNOW ABOUT PORTX
                </div>
                <h2 class="tp-section__title mb-40">We give you control of
                   your shipments
                </h2>
                <span>Treacherously far so late have immense condes
                   We provide the best logistic</span>
                <p>Providers of personal safety, comfort, and protection products for the outdoor enthusiast It has
                   been our experience that Classic <br> Transportation is in an elite</p>
             </div>
             <div class="tpabout__progress-bar mb-50 fix">
                <span>Transport</span>
                <div class="tpabout__bar">
                   <div class="tpabout__bar-item">
                      <div class="tpabout__bar-progress">
                         <div class="progress">
                            <div class="progress-bar wow slideInLeft" data-wow-delay="0s" data-wow-duration=".8s"
                               role="progressbar" data-width="78%" aria-valuenow="78" aria-valuemin="0"
                               aria-valuemax="100"
                               style="width: 78%; visibility: visible; animation-duration: 0.8s; animation-delay: 0s; animation-name: slideInLeft;">
                               <span>78%</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="tpabout__btn-box">
                <a class="thm-btn mr-30" href="about.html">EXPLORE MORE</a>
                <span><a href="maito:thepures@support.com"><span class="__cf_email__" data-cfemail="a4ccc1c8c8cbd4cbd6d0dce4c3c9c5cdc88ac7cbc9">[email&#160;protected]</span></a></span>
             </div>

          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-12 wow fadeInRight  " data-wow-duration=".9s"
             data-wow-delay=".5s">
             <div class="tpabout__thumb-shape-2 p-relative"
                data-parallax="{&quot;y&quot;: 100, &quot;smoothness&quot;: 100}"
                style="transform:translate3d(0px, 36.768px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 36.768px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
                <img class="tpabout__thumb-shape-logo" src="{{$web_assets}}/assets/img/about/about-shape-2.png" alt="">
                <img class="tpabout__thumb-shape-logo-icon" src="{{$web_assets}}/assets/img/about/about-shape-2-icon.png" alt="">
             </div>
             <div class="tpabout__wrap text-end p-relative">
                <div class="tpabout__lg-img ">
                   <img src="{{$web_assets}}/assets/img/about/about-2-lg.jpg" alt="">
                </div>
                <div class="tpabout__sm-img ml-40">
                   <img src="{{$web_assets}}/assets/img/about/about-2-sm.jpg" alt="">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- about area end -->
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
                   <img class="w-100" src="{{$web_assets}}/assets/img/project/project-1.jpg" alt="">
                </div>
                <div class="tp-project-box">
                   <div class="tp-project-content">
                      <div class="tp-project-info ">
                         <span>ANALYTICS</span>
                         <h4 class="tp-project-titile-1"><a href="project-details.html">Supply Chain</a></h4>
                      </div>
                   </div>
                   <div class="tp-project-icon">
                      <a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="swiper-slide">
             <div class="tp-project__item p-relative">
                <div class="tp-project__thumb ">
                   <img class="w-100" src="{{$web_assets}}/assets/img/project/project-2.jpg" alt="">
                </div>
                <div class="tp-project-box">
                   <div class="tp-project-content">
                      <div class="tp-project-info ">
                         <span>LOGISTICS</span>
                         <h4 class="tp-project-titile-1"><a href="project-details.html">Special Transport</a></h4>
                      </div>
                   </div>
                   <div class="tp-project-icon">
                      <a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="swiper-slide">
             <div class="tp-project__item p-relative">
                <div class="tp-project__thumb ">
                   <img class="w-100" src="{{$web_assets}}/assets/img/project/project-3.jpg" alt="">
                </div>
                <div class="tp-project-box">
                   <div class="tp-project-content">
                      <div class="tp-project-info ">
                         <span>DISTRIBUTION</span>
                         <h4 class="tp-project-titile-1"><a href="#">Shipping Transport</a></h4>
                      </div>
                   </div>
                   <div class="tp-project-icon">
                      <a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="swiper-slide">
             <div class="tp-project__item p-relative">
                <div class="tp-project__thumb ">
                   <img class="w-100" src="{{$web_assets}}/assets/img/project/project-4.jpg" alt="">
                </div>
                <div class="tp-project-box">
                   <div class="tp-project-content">
                      <div class="tp-project-info ">
                         <span>ANALYTICS</span>
                         <h4 class="tp-project-titile-1"><a href="project-details.html">Air Freight Solution</a>
                         </h4>
                      </div>
                   </div>
                   <div class="tp-project-icon">
                      <a href="project-details.html"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                   </div>
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
          <div class="col-xxl-8 col-xl-8  col-lg-9">
             <div class="blog-section-title text-center z-index  pb-40">
                <div class="tp-section__subtitle tp-section__subtitle-before mb-15 p-relative">WE SPECIALISE
                   TRANSPORTATION
                </div>
                <h2 class="tp-section__title mb-10">We have challenges covered
                </h2>
             </div>
          </div>
       </div>
       <div class="row g-0">
          <div class="col-xl-3 col-lg-3 col-md-3">
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
          <div class="col-xl-3 col-lg-3 col-md-3">
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
          <div class="col-xl-3 col-lg-3 col-md-3">
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
          <div class="col-xl-3 col-lg-3 col-md-3">
             <div class="tp-challenges__item tp-challenges__item-last tp-challenges__item-last-none text-center">
                <div class="tp-challenges__icon p-relative mb-30">
                   <i class="flaticon-project-management"></i>
                </div>
                <div class="tp-challenges__number p-relative">
                   <h3 class="counter"><span>148</span></h3>
                   <span>Offices</span>
                </div>
             </div>
          </div>
          <div class="tp-challenges__join-over text-center mt-70">
             <p>Join over 3000 people who engage with sector. <button><a href="contact.html">Join Now!</a></button>
             </p>
          </div>
       </div>
    </div>
 </div>
 <!-- challenges area end -->
<!-- choose area start -->
<div class="tp-choose-area theme-background fix">
 <div class="dddd mb-100 p-relative">
    <div class="tpchoose__left-img p-relative">
       <img src="{{$web_assets}}/assets/img/choose/choose-2-left-img.jpg" alt="">
       <div class="tpchoose__play-video text-center">
          {{-- <div class="tpchoose__video ml-20">
             <a href="https://www.youtube.com/watch?v=o4GuSJYSzrY" class="popup-video">
                <div class="tpchoose__video-icon">
                   <span class="fa fa-play"></span>
                   <i class="ripple"></i>
                </div>
             </a>
          </div> --}}
          <div class="text mt-200 pt-130 text-start">
             <span>We are always
                dedicated to give
                best service</span>
          </div>
       </div>
    </div>
    <div class="tpchoose__air-plan  wow slideInRight    ">
       <img src="{{$web_assets}}/assets/img/choose/choose-air-plan.png" alt="">
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xl-7 offset-xl-5">
             <div class="tpchoose__content pt-115 ml-70">
                <div class="tpchoose__section-title  z-index-1  pb-10">
                   <div class="tp-section__subtitle-2 mb-15 p-relative  wow fadeInUp  "
                      data-wow-duration=".9s" data-wow-delay=".2s">Why you Choose us
                   </div>
                   <h2 class="tp-section__title-2 mb-10  wow fadeInUp  " data-wow-duration=".9s"
                      data-wow-delay=".4s">We create an opportunity
                      reach our potential
                   </h2>
                   <p class=" wow fadeInUp  " data-wow-duration=".9s" data-wow-delay=".6s">Logistics is a
                      distinguished supply chain management firm which provides comprehensive solutions
                      for warehousing, transportation and provides a host of logistics services.</p>
                </div>
                <div class="tpchoose__list d-flex align-items-start mb-10  wow fadeInUp  "
                   data-wow-duration=".9s" data-wow-delay=".8s">
                   <div class="tpchoose__icon mr-30">
                      <span><i class="flaticon-timing"></i></span>
                   </div>
                   <div class="tpchoose__info">
                      <span>Real time tracking</span>
                      <p>Logistics is a distinguished supply chain management <br> firm which provides
                         comprehensive
                      </p>
                   </div>
                </div>
                <div class="tpchoose__list d-flex align-items-start  wow fadeInUp  " data-wow-duration=".9s"
                   data-wow-delay=".9s">
                   <div class="tpchoose__icon mr-30">
                      <span><i class="flaticon-shield"></i></span>
                   </div>
                   <div class="tpchoose__info">
                      <span>Safe & reliable</span>
                      <p>Logistics is a distinguished supply chain management <br> firm which provides
                         comprehensive
                      </p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<!-- choose area end -->
 <!-- team area start -->
 <div class="team-area p-relative pt-120 pb-120">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xxl-8 col-xl-8  col-lg-10 ">
             <div class="blog-section-title text-center z-index  pb-40">
                <div class="tp-section__subtitle mb-15 p-relative  wow fadeInUp  " data-wow-duration=".9s"
                   data-wow-delay=".3s">Our Workers
                </div>
                <h2 class="tp-section__title mb-10  wow fadeInUp  " data-wow-duration=".9s"
                   data-wow-delay=".5s">Meet with expert team
                </h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  wow fadeInUp  " data-wow-duration=".9s"
             data-wow-delay=".5s">
             <div class="tp-team__item p-relative mb-40">
                <div class="tp-team__thumb ">
                   <img src="{{$web_assets}}/assets/img/team/team-4.jpg" alt="">
                </div>
                <div class="tp-team__content">
                   <div class="tp-team__social text-end">
                      <ul>
                         <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      </ul>
                   </div>
                   <div class="tp-team__designation">
                      <span>Cargo Head</span>
                      <h3 class="tp-team-title-2"><a href="team-details.html">Helen Wilmore</a></h3>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6  wow fadeInUp  " data-wow-duration=".9s"
             data-wow-delay=".7s">
             <div class="tp-team__item p-relative mb-40">
                <div class="tp-team__thumb ">
                   <img src="{{$web_assets}}/assets/img/team/team-5.jpg" alt="">
                </div>
                <div class="tp-team__content">
                   <div class="tp-team__social text-end">
                      <ul>
                         <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      </ul>
                   </div>
                   <div class="tp-team__designation">
                      <span>Cargo Head</span>
                      <h3 class="tp-team-title-2"><a href="team-details.html">Helen Wilmore</a></h3>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4  col-sm-6 wow fadeInUp  " data-wow-duration=".9s"
             data-wow-delay=".9s">
             <div class="tp-team__item p-relative mb-40">
                <div class="tp-team__thumb ">
                   <img src="{{$web_assets}}/assets/img/team/team-6.jpg" alt="">
                </div>
                <div class="tp-team__content">
                   <div class="tp-team__social text-end">
                      <ul>
                         <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                         <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      </ul>
                   </div>
                   <div class="tp-team__designation">
                      <span>Cargo Head</span>
                      <h3 class="tp-team-title-2"><a href="team-details.html">Helen Wilmore</a></h3>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-12">
             <div class="team-btn text-center mt-20">
                <a class="tp-btn-2" href="team-details.html">MEET OUR TEAM</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- team area end -->
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
                   <a class="tp-btn-white" href="contact.html">REQUEST A QUOTE</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- cta area end -->

@endsection