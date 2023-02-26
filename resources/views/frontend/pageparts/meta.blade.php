<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_descriptions')">
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="author" content="{{ $sitedetail->title }}"/>
    <meta property='og:title' content='@yield('ogtitle')' />
    <meta property='og:description' content='@yield('ogdescription')' />
    <meta property='og:image' content='@yield('ogimage')' />
    <meta property='og:url' content='@yield('ogurl')' />
    <meta property='og:type' content='website' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="all,follow">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/fab.PNG')}}">
    <link rel="stylesheet" type="text/css"
              href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.my_theme.css') }}">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.transitions.css') }}">
    <!-- nivo slider slider css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/nivo-slider.css') }}">
    <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Price jquery-ui  -->
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <!-- fancy-box theme -->
        <link rel="stylesheet" href="fancy-box/jquery.fancybox.css') }}">
    <!-- normalizer -->
        <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Mobile menu css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <!-- main -->
        <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <!-- style -->
        <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- modernizr JS -->
        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <link rel="stylesheet" href="https://nswlandscaping.com/frontend/assets/css/lightbox.css">
        <script src="https://nswlandscaping.com/frontend/assets/js/lightbox.js"></script>

        <style>
            /* .newsletterpopup{
            box-sizing: border-box;
            height: auto;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -moz-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            -o-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            margin: auto;
            position: fixed;
            top: 50%;
            width: 750px;
            z-index: 1000000;
            display: none;
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            overflow: hidden
            } */
            
    </style>


            </head>



