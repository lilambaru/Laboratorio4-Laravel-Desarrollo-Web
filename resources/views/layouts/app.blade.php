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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .user-dropdown {
            position: relative;
        }

        .user-dropdown summary {
            list-style: none;
            cursor: pointer;
        }

        .user-dropdown summary::-webkit-details-marker {
            display: none;
        }

        .user-dropdown[open] .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <!-- Nombre de la aplicacion -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Menu derecho -->
                    <ul class="navbar-nav ms-auto">

                        @guest

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        Iniciar sesión
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        Registrarse
                                    </a>
                                </li>
                            @endif

                        @else

                            <!-- Menu desplegable del usuario -->
                            <li class="nav-item">

                                <details class="user-dropdown">

                                    <summary class="nav-link dropdown-toggle">
                                        {{ Auth::user()->name }}
                                    </summary>

                                    <div class="dropdown-menu dropdown-menu-end">

                                        <!-- Cerrar sesion -->
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf

                                            <button type="submit" class="dropdown-item">
                                                Cerrar sesión
                                            </button>

                                        </form>

                                    </div>

                                </details>

                            </li>

                        @endguest

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>
