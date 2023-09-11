<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.weblearnbd.net/portx-demo/portx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 11:36:34 GMT -->

<head>
    @include('web.layouts.head.meta-data')

    @include('web.layouts.head.style')
</head>

<body>

    @include('web.fragments.preloader_back_to_top')
    @include('web.layouts.navigation.nav-menu')
    
    @yield('contents')

    @include('web.layouts.bottom.footer')

    @include('web.layouts.bottom.script')

</body>

<!-- Mirrored from html.weblearnbd.net/portx-demo/portx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 11:37:49 GMT -->

</html>
