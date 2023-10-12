<!-- header area start -->
<header>
    <style>
        .site-logo{
            width: 180px
        }
    </style>
    <div class="main-header d-none d-xl-block">
        <div class="tp-header__top tp-header__he pt-20 pb-20 p-relative">
            <div class="tp-header-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="main-logo img-fluid">
                                <a href="/"><img class="img-fluid site-logo" src="{{$web_assets}}/assets/img/logo/cover.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="tp-header">
                                <div class="tp-header__right  d-flex justify-content-end">
                                    <div class="tp-header__contact mr-30">
                                        <div class="tp-header__contact d-flex align-items-center">
                                            <span class="tp-header__icon"><i class="flaticon-clock"></i></span>
                                            <div class="tp-header__icon-info ml-20">
                                                <label>Sunday Closed</label>
                                                <span>Mon - Sat 9.00 - 18.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-header__contact mr-30">
                                        <div class="tp-header__contact d-flex align-items-center">
                                            <span class="tp-header__icon"><i class="flaticon-envelope"></i></span>
                                            <div class="tp-header__icon-info ml-20">
                                                <label>Email</label>
                                                <span><a href="mailto:swiftlysend.online@gmail.com" target="_blank"><span class="__cf_email__"
                                                    data-cfemail="d1a1bea3a5a9b8bfb7be91b6bcb0b8bdffb2bebc">[email&#160;protected]</span></a></span>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-header__contact">
                                        <div class="tp-header__contact d-flex align-items-center">
                                            <span class="tp-header__icon"><i class="flaticon-telephone"></i></span>
                                            <div class="tp-header__icon-info ml-20">
                                                <label>Call Us</label>
                                                <span><a href="tel:+14377826276">+14377826276</a></span>
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
        <div class="tp-header">
            <div id="header-sticky" class="header-bottom black-bg d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <div class="tp-header__main-menu main-menu">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li class=""><a href="/">HOME</a>

                                        </li>
                                       
                                        <li class="has-dropdown"><a href="{{ route('web.service.') }}">SERVICES</a>
                                        </li>
                                        
                                        <li><a href="{{route('web.tracking.')}}">TRACKING</a></li>
                                        <li><a href="{{ route('web.contact-us') }}">CONTACT</a></li>
                                       
                                            <a class="tp-btn" href="{{ route('login') }}">Login</a>

                                        
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-xl-4">

                            <div class="tp-header__right text-end d-flex align-items-center justify-content-end">
                                <div class="search-img f-left mr-30">
                                    <button class="search-open-btn">
                                        <i class="flaticon-loupe"></i>
                                    </button>
                                </div>
                                <div class="tp-header__btn">
                                    <a class="tp-btn" href="{{ route('web.contact-us') }}">REQUEST A QUOTE</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-header d-xl-none pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="main-logo ">
                        <a href="index.html"><img src="assets/img/logo/black-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile__menu d-flex align-items-center justify-content-end">
                        <button class="search-open-btn mr-30 d-none d-sm-block">
                            <i class="flaticon-loupe"></i>
                        </button>
                        <a class="tp-menu-bar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
