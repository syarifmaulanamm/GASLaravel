<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images\GAS_DESIGN_KIT-04.png') }}" height="70" alt="Gardi Agency System">
                </a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> -->
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="notification" data-toggle="modal" data-target="#notification-modal">
                                    <span id="notification-count" class="badge badge-pill badge-danger">3</span>
                                    <img src="{{ asset('images\GAS_DESIGN_KIT-05.png') }}" height="30" alt="Notification">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                                    <img src="{{ asset('images\GAS_DESIGN_KIT-06.png') }}" height="30" alt="Menu">
                                </a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            <div class="collapse" id="main-menu">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-2 col-6">
                            <a href="{{ route('createJamaah') }}">
                                <div class="card text-center bg-transparent">
                                    <div class="card-body">
                                        <h1>
                                            <ion-icon name="person-add"></ion-icon>
                                        </h1>
                                    </div>
                                    <div class="card-footer">
                                        Pendaftaran
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="{{ route('jamaah') }}">
                                <div class="card text-center bg-transparent">
                                    <div class="card-body">
                                        <h1>
                                            <ion-icon name="people"></ion-icon>
                                        </h1>
                                    </div>
                                    <div class="card-footer">
                                        Jamaah
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <div class="card text-center bg-transparent">
                                    <div class="card-body">
                                        <h1>
                                            <ion-icon name="wallet"></ion-icon>
                                        </h1>
                                    </div>
                                    <div class="card-footer">
                                        Pembayaran
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <div class="card text-center bg-transparent">
                                    <div class="card-body">
                                        <h1>
                                            <ion-icon name="podium"></ion-icon>
                                        </h1>
                                    </div>
                                    <div class="card-footer">
                                        Poin
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="#">
                                <div class="card text-center bg-transparent">
                                    <div class="card-body">
                                        <h1>
                                            <ion-icon name="settings"></ion-icon>
                                        </h1>
                                    </div>
                                    <div class="card-footer">
                                        Pengaturan
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <div class="card text-center bg-transparent">
                                    <div class="card-body">
                                        <h1>
                                            <ion-icon name="wallet"></ion-icon>
                                        </h1>
                                    </div>
                                    <div class="card-footer">
                                        Log Out
                                    </div>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
        </main>
    </div>
    <div class="footer text-center p-5">
        <small>Made with <ion-icon name="heart" style="color: red"></ion-icon> by Gardi Tour&reg;</small>
    </div>

    <div class="modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><ion-icon name="notifications-outline"></ion-icon> Notifications</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-block btn-outline-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b334eb3eba8cd3125e3376f/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
