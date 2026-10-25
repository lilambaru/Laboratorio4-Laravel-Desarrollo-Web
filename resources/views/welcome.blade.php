<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f6fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 90%;
            max-width: 450px;
        }

        h1 {
            color: #333;
            margin-bottom: 15px;
        }

        p {
            color: #666;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            margin: 5px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .btn:hover {
            background-color: #2779bd;
        }

        .btn-register {
            background-color: #38c172;
        }

        .btn-register:hover {
            background-color: #2d995b;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Bienvenido a Laravel</h1>

        @auth

            <p>Has iniciado sesión correctamente.</p>

            <a href="{{ url('/home') }}" class="btn">
                Ir al inicio
            </a>

        @else

            <p>Bienvenido a nuestro sistema de usuarios.</p>

            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn">
                    Iniciar sesión
                </a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-register">
                    Registrarse
                </a>
            @endif

        @endauth

    </div>

</body>
</html>
