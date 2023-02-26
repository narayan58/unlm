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
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
      <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <!-- Swiper slider-->
        <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}">
        <!-- Lightbox-->
        <link rel="stylesheet" href="{{ asset('frontend/vendor/glightbox/css/glightbox.css') }}">
        <!-- Choices.js-->
        <link rel="stylesheet" href="{{ asset('frontend/vendor/choices.js/public/assets/styles/choices.css') }}">
        <!-- Nouislider-->
        <link rel="stylesheet" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css') }}">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset('frontend/css/theme-style.css') }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.9f24e811.png') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
          integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <link rel="stylesheet"
            href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
            <link rel="stylesheet" type="text/css"
              href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
            </head>