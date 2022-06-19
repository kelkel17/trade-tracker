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
    <script src="{{ asset('js/form.js') }}" defer></script>
    <script src="{{ asset('js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/Chart.extension.js') }}" defer></script>
    <script src="{{ asset('js/soft-ui-dashboard.min.js?v=1.0.2') }}" defer></script>
    <script>
        let limitDecimalPlaces = (e, count) => {
            if (e.target.value.indexOf('.') == -1) { return; }

            if (e.target.value.length - e.target.value.indexOf('.') > count) {
                e.target.value = parseFloat(e.target.value).toFixed(count);
            }
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet">
    <link href="{{ asset('css/soft-ui-dashboard.min.css?v=1.0.2"') }}" rel="stylesheet">
    <link href="{{ asset('css/loopple/loopple.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
</head>

<body>
    <div id="app">
        @guest
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                New Trade
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        @else
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3" id="navbarTop">
                <div class="container-fluid">
                    <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        {{ Auth::user()->name }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <div class="row">
                                <div class="col-auto m-auto">
                                    <a class="cursor-pointer">
                                        <i class="fa fa-cog fixed-plugin-button-nav" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-auto m-auto">
                                    <div class="dropdown">
                                        <a class="cursor-pointer" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                                            ...
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="bg-white border-radius-lg d-flex">
                                        <button type="button" class="btn btn-dark my-1 me-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Create Trade
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        @endguest
        <main class="container-fluid py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
