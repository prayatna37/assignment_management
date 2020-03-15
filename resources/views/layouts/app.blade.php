<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ URL::to('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">


    <link rel="favicon" href="{{URL::to('assets/images/favicon.png')}}">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
{{--    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap-theme.css')}}" media="screen">
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">
    <link rel='stylesheet' id='camera-css'  href="{{URL::to('assets/css/camera.css')}}" type='text/css' media='all'>



    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="{{URL::to('assets/js/modernizr-latest.js')}}"></script>
    <script type='text/javascript' src='{{URL::to('assets/js/jquery.min.js')}}'></script>
    <script type='text/javascript' src='{{URL::to('assets/js/fancybox/jquery.fancybox.pack.js')}}'></script>

    <script type='text/javascript' src='{{URL::to('assets/js/jquery.mobile.customized.min.js')}}'></script>
    <script type='text/javascript' src='{{URL::to('assets/js/jquery.easing.1.3.js')}}'></script>
    <script type='text/javascript' src='{{URL::to('assets/js/camera.min.js')}}'></script>
    <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/js/custom.js')}}"></script>
    <script src="{{URL::to('assets/js/style.js')}}"></script>
    <script>
        jQuery(function(){

            jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
                height: '600',
                loader: 'false',
                pagination: true,
                thumbnails: false,
                hover: false,
                playPause: false,
                navigation: false,
                opacityOnGrid: false,
                imagePath: 'assets/images/'
            });

        });

    </script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item"><a href="" class="nav-link">About</a></li>


                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Teacher Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/student">{{ __('Student Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item"><a href="/user/{{Auth::user()->id}}" class="nav-link">Dashboard</a>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background: white!important;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
