<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/responsive.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('bootstrap/css/themify-icons.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://vip-reseller.co.id/home/css/themify-icons.css">

    
    

</head>
<body>

    <style>
        /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.py-5 {
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.text-center {
    text-align: center;
}

/* Header Styles */


.bek img {
    max-width: 100%;
    height: auto;
}

/* Section Why Choose Us Styles */


.py-2 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

/* Responsive Styles */
@media (max-width: 767px) {
    .col-6 {
        width: 100%;
        margin-bottom: 1rem;
    }

    .col-2 {
        width: 48%;
        margin-bottom: 1rem;
    }

    .col-3 {
        width: 100%;
        margin-bottom: 1rem;
    }

    .bek img {
        width: 100%;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .col-2 {
        width: 48%;
        margin-bottom: 1rem;
    }

    .col-3 {
        width: 48%;
        margin-bottom: 1rem;
    }

    .bek img {
        width: 100%;
    }
}

/* Add more media queries for larger screen sizes if needed */

    </style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>
                    <!--- Mid side of Navbar-->
                    @include('partials.navbar')

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                            
                            @else
                            
                            @if (Route::has('login'))
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="">
            @yield('content')
        </main>

    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script src="{{ asset('bootstrap/js/js.js') }}"></script>


</body>
</html>
