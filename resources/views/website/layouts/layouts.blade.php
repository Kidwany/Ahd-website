<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> عهد - @yield('title')</title>
    <!-- =================font icon================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/all.css')}}">
    <!-- =================font icon================= -->
    <!-- =================animate================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/animate.css')}}">
    <!-- =================animate================= -->
    <link href="{{assetPath('website/css/banner-rotator.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="./css/banner-.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{assetPath('website/css/video.popup.css')}}">
    <!-- =================font icon================= -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="{{assetPath('website/css/main.css')}}">
    <!-- =================font icon================= -->

    <!-- =================owl slider================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{assetPath('website/css/owl.theme.default.min.css')}}">
    <!-- =================owl slider================= -->
    <!--Main Menu File-->
    <link id="effect" rel="stylesheet" type="text/css" media="all" href="{{assetPath('website/css/rotate-x.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{assetPath('website/css/webslidemenu.css')}}" />
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{assetPath('website/css/grd-black.css')}}" />
    <!--Main Menu File-->



    <!-- =================bootstrap================= -->
    <!-- <link rel="stylesheet" href="./css/bootstrap-rtl.css"> -->
    <link rel="stylesheet" href="{{assetPath('website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{assetPath('website/css/bootstrap-rtl.css')}}">
    <!-- =================bootstrap================= -->

    <!-- =================file css================= -->
    <link rel="stylesheet" href="{{assetPath('website//css/style.css')}}">
    <link rel="stylesheet" href="{{assetPath('website//css/media.css')}}">
    <!-- =================file css================= -->
</head>


{{--<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> عهد - @yield('title')</title>

    <!-- CSS ============================================ -->

    <link rel="icon" type="image/png" href="{{asset('website/images/favicon.png')}}">


    <!-- =================font icon================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/all.css')}}">
    <!-- =================font icon================= -->
    <!-- =================animate================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/animate.css')}}">
    <!-- =================animate================= -->
    <link href="{{assetPath('website/css/banner-rotator.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href="./css/banner-.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{assetPath('website/css/video.popup.css')}}">
    <!-- =================font icon================= -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="{{assetPath('website/css/main.css')}}">
    <!-- =================font icon================= -->

    <!-- =================owl slider================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{assetPath('website/css/owl.theme.default.min.css')}}">
    <!-- =================owl slider================= -->
    <!--Main Menu File-->
    <link id="effect" rel="stylesheet" type="text/css" media="all" href="{{assetPath('website/css/rotate-x.css')}}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{assetPath('website/css/webslidemenu.css')}}" />
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{assetPath('website/css/webslidemenu.css')}}" />
    <!--Main Menu File-->

    <!-- =================bootstrap================= -->
    <!-- <link rel="stylesheet" href="./css/bootstrap-rtl.css"> -->
    <link rel="stylesheet" href="{{assetPath('website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{assetPath('website/css/bootstrap-rtl.css')}}">
    <!-- =================bootstrap================= -->

    <!-- =================file css================= -->
    <link rel="stylesheet" href="{{assetPath('website/css/style.css')}}">
    <link rel="stylesheet" href="{{assetPath('website/css/media.css')}}">
    <!-- =================file css================= -->


   --}}{{-- @if(app()->getLocale() == 'en')


    @endif

    @if(app()->getLocale() == 'ar')

    @endif--}}{{--


    @yield('customizedStyle')





</head>--}}







<body>
<div id="app">
    <main>
        @include('website.layouts.header')
        @yield('content')
        @include('website.layouts.footer')
    </main>
</div>






{{--<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- JS
============================================ -->
<!-- javascript libraries -->
<div class="scroll-top">
    <i class="to-top lef fas fa-tooth"></i>
</div>
<!-- =========== scroll-top =========== -->


<script src="{{assetPath('website/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{assetPath('website/js/webslidemenu.js')}}"></script>
<script src="{{assetPath('website/js/video.popup.js')}}"></script>
<script src="{{assetPath('website/js/jquery.min.js')}}"></script>
<script src="{{assetPath('website/js/jquery.banner-rotator.js')}}"></script>
<script src="{{assetPath('website/js/jquery.easing.1.3.min.js')}}"></script>
<script src="{{assetPath('website/js/wow.min.js')}}"></script>
<script src="{{assetPath('website/js/owl.carousel.min.js')}}"></script>
<script src="{{assetPath('website/js/castm-owl.js')}}"></script>
<script src="{{assetPath('website/js/popper.js')}}"></script>
<script src="{{assetPath('website/js/bootstrap.min.js')}}"></script>
<script src="{{assetPath('website/js/main.js')}}"></script>
<script src="{{assetPath('website/js/custom.js')}}"></script>

@yield('customizedScript')



</body>
</html>
