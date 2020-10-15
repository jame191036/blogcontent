<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    {{-- font_template --}}
    <link rel="stylesheet" href="{{ asset('cssfont/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfont/stylecontent.css') }}">

    {{--
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> --}}

    <link rel="stylesheet" href="{{ asset('cssfont/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('cssfont/style.css') }}">

</head>

<body>
    {{--
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <nav class="navbar navbar-expand-lg" data-navbar="sticky">
        <div class="container site-wrap">
            <div class=" navbar-left">
                <button class="navbar-toggler" type="button">&#9776;</button>
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <h2>Blog Content</h2>
                </a>
            </div>
            <a class="btn btn-xs btn-round btn-success text-white nav_login_btn" href="{{ route('home') }}">Login</a>
        </div>
    </nav>
    </div>
    @yield('header')
    {{-- @include('layouts.sidebar') --}}
    @yield('content')
    <!-- Main Content -->

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/page.min.js') }}"></script>
    --}}
    {{-- <script src="{{ asset('js/script.js') }}"></script>
    --}}

    {{-- js_font_template --}}

    <script src="{{ asset('jsfont/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('jsfont/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('jsfont/jquery-ui.js') }}"></script>
    <script src="{{ asset('jsfont/popper.min.js') }}"></script>
    <script src="{{ asset('jsfont/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsfont/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('jsfont/jquery.stellar.min.js') }}"></script>

    <script src="{{ asset('jsfont/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('jsfont/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('jsfont/aos.js') }}"></script>

    <script src="{{ asset('jsfont/main.js') }}"></script>

</body>

</html>
