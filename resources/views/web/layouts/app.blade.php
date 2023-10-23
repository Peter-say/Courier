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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6536708da84dd54dc4844bcf/1hdeafanb';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

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
