<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{  setting('site.description ') }}">

    <!-- ========== Page Title ========== -->
    <title>{{  setting('site.title') }} | @yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ Voyager::image( setting('site.logo')) }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="\css\bootstrap.min.css" rel="stylesheet">
    <link href="\css\font-awesome.min.css" rel="stylesheet">
    <link href="\css\flaticon-set.css" rel="stylesheet">
    <link href="\css\magnific-popup.css" rel="stylesheet">
    <link href="\css\owl.carousel.min.css" rel="stylesheet">
    <link href="\css\owl.theme.default.min.css" rel="stylesheet">
    <link href="\css\animate.css" rel="stylesheet">
    <link href="\css\bootsnav.css" rel="stylesheet">
    <link href="\css\style.css" rel="stylesheet">
    <link href="\css\responsive.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/html5/html5shiv.min.js"></script>
    <script src="/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>
<body>
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="se-pre-con"></div>
@include('layouts.navbar')

@yield('content')

@include('layouts.footer')
<script src="\js\jquery-1.12.4.min.js"></script>
<script src="\js\bootstrap.min.js"></script>
<script src="\js\equal-height.min.js"></script>
<script src="\js\jquery.appear.js"></script>
<script src="\js\jquery.easing.min.js"></script>
<script src="\js\jquery.magnific-popup.min.js"></script>
<script src="\js\modernizr.custom.13711.js"></script>
<script src="\js\owl.carousel.min.js"></script>
<script src="\js\wow.min.js"></script>
<script src="\js\progress-bar.min.js"></script>
<script src="\js\isotope.pkgd.min.js"></script>
<script src="\js\imagesloaded.pkgd.min.js"></script>
<script src="\js\count-to.js"></script>
<script src="\js\bootsnav.js"></script>
<script src="\js\main.js"></script>

</body>
</html>
