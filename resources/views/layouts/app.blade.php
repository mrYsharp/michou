<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-page">
<div id="app">
    <nav class="bg-white">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-4">
                <a class="navbar-brand" href="{{ url('/projects') }}">
                    <img   class="xl:w-1/3" src="/images/Logo.png">
                </a>
                <div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-4" src="/images/michou.jpg" >
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">{{ Auth::user()->name }}</p>
                                    <div class="text-red-700" >
                                        <a class="" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>

                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto  py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
