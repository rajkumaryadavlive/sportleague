<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
      
    <!-- Styles -->
     <!-- Css Files -->
     <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/timeline.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-scheme.css') }}" rel="stylesheet">

    <link href="http://fonts.cdnfonts.com/css/furore" rel="stylesheet">
     <style>
                            @import url('http://fonts.cdnfonts.com/css/furore');
</style>
</head>
<body style="overflow-x: hidden;">
   <!--// Main Wrapper \\-->
  <div class="sportsmagazine-main-wrapper">  
     @include('layouts.header')
     
       @yield('content')
       
     @include('layouts.footer')
  </div>  
   <!--// Main Wrapper \\--> 
</body>
</html>
