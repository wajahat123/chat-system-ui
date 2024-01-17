<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- App favicon -->
      <link rel="shortcut icon" href="https://themesbrand.com/doot/layouts/assets/images/favicon.ico" id="tabIcon">
      <!-- glightbox css -->
      <link rel="stylesheet" href="{{ asset('chatbox/css/glightbox.min.css')}}">
      <!-- swiper css -->
      <link rel="stylesheet" href="{{ asset('chatbox/css/swiper-bundle.min.css')}}">
      <!-- Bootstrap Css -->
      <link href="{{ asset('chatbox/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
      <!-- Icons Css -->
      <link href="{{ asset('chatbox/css/icons.min.css')}}" rel="stylesheet" type="text/css">
      <!-- App Css-->
      <link href="{{ asset('chatbox/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
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

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
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
                        @else
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

     <!-- end  layout wrapper -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('chatbox/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('chatbox/js/simplebar.min.js')}}"></script>
        <script src="{{ asset('chatbox/js/waves.min.js')}}"></script>
        <!-- glightbox js -->
        <script src="{{ asset('chatbox/js/glightbox.min.js')}}"></script>

        <!-- Swiper JS -->
        <script src="{{ asset('chatbox/js/swiper-bundle.min.js')}}"></script>

        <!-- fg-emoji-picker JS -->
        <script src="{{ asset('chatbox/js/fgEmojiPicker.js')}}"></script>

        <!-- page init -->
        <script src="{{ asset('chatbox/js/index.init.js')}}"></script>

        <script src="{{ asset('chatbox/js/app.js')}}"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
