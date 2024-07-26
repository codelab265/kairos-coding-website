<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="IT Infinite - IT Solutions and Services Company HTML5 Template">
    <meta name="author" content="potenzaglobalsolutions.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ $title ?? 'KairosCoding' }} - KairosCoding
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&amp;family=Russo+One&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.css') }}">
    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!--=================================
    cursor -->
    <div id="cursor">
        <div class="cursor__circle"></div>
    </div>
    <!--=================================
      cursor -->

    <div id="page" class="main">

        <!--=================================
        Header -->
        @include('components.navigationmenu')

        <!--=================================
        Main Menu OffCanvas -->
        @include('components.mobile-navigation')

        <!--=================================
        Header Side Panel -->
        @include('components.sidebar')


        <div class="site-content">

            <div class="container-fluid">
                <div class="item-efftect container">
                    <div class="efftect overflow-hidden"></div>
                    <div class="efftect overflow-hidden"></div>
                    <div class="efftect overflow-hidden"></div>
                    <div class="efftect overflow-hidden"></div>
                    <div class="efftect overflow-hidden"></div>
                </div>
            </div>

            <!--=================================
              Main Banner -->
            {{ $slot }}
        </div>


        <!--=================================
      Site Footer -->
        @include('components.footer')

        <!--=================================
      Back To Top -->
        <div class="back-to-top">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>
    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <script src="{{ asset('js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('js/swiperanimation/SwiperAnimation.min.js') }}"></script>
    <script src="{{ asset('js/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/attractHover.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script> <!-- Template Scripts (Do not remove)-->
</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/it-infinite/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 09:01:21 GMT -->

</html>
