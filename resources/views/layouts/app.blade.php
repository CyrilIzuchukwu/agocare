<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donat - Charity & Donation HTML Template - Home One</title>
    <meta name="author" content="Donat">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">

    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">

    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <link rel="manifest" href="assets/img/favicons/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon.png">
    <meta name="theme-color" content="#ffffff">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;display=swap"
        rel="stylesheet">

    <!--All CSS File -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>


    <!--Preloader -->
    <div id="global-loader">
        <div class="whirly-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="far fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--===== Mobile Menu ===== -->
    @include('partials.mobile-menu')

    <!--Header Area-->
    @include('partials.header')


    @yield('content')

    <!--Footer Area-->
    @include('partials.footer')

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>



    <!-- All Js File -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from html.themehour.net/donat/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2026 10:10:09 GMT -->

</html>
