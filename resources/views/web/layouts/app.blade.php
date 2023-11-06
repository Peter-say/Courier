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
    <div class="container">
        <div id="google_translate_element"></div>
    </div>
    @yield('contents')

    @include('web.layouts.bottom.footer')

    @include('web.layouts.bottom.script')

    <!--Start of Crisp.chat Script-->
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "9631766e-7f75-4007-a4b6-cf0aa668789a";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>
    <!--End of Crisp.chat Script-->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</body>

<!-- Mirrored from html.weblearnbd.net/portx-demo/portx/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Sep 2023 11:37:49 GMT -->

</html>
