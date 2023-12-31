<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'Laravel') }}</title>
   
       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
   
       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
       <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/animate.min.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/owl.carousel.min.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/owl.theme.default.min.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/responsive.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/themify-icons.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
       <link rel="stylesheet" href="{{ asset('bootstrap/css/magnific-popup.css') }}">
    <style>
        .kontent{
        min-width: 100vh;
        width: 100%;}

    </style>
</head>
<body>
    
    <main class="">
        @yield('content')
    </main>


    <script src="{{ asset('bootstrap/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/wow.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/scripts.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>