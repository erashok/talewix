<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2f80ed">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2f80ed">
    <!-- iOS Safari -->
    <meta name="pureblissy-mobile-web-app-capable" content="yes">
    <meta name="pureblissy-mobile-web-app-status-bar-style" content="#2f80ed">
    <title>Support - pureblissy</title>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/48x48.png')}}" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/64x64.png')}}" sizes="64x64">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('public/assets/css/all.min.css')}}" />
    <script src="{{ asset('public/assets/js/jquery.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('public/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css')}}" />   
    <script src="{{ asset('public/assets/js/main.js')}}"></script>

</head>

<body>

    @include('layouts.header')
    
 	@yield('content')

   @include('layouts.footer')

</body>
</html>
