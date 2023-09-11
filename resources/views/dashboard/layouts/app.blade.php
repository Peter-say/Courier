<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    @include('dashboard.layouts.head.style')

</head>

<body class="animsition">

    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        @include('dashboard.layouts.navigation.mobile')

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            @include('dashboard.layouts.navigation.desktop')
            
            @yield('contents')

        </div>
    </div>

    @include('dashboard.layouts.bottom.scripts')

</body>

</html>
<!-- end document-->
