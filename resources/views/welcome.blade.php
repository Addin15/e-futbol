<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet">

        <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        </style>
    </head>

    <body class="antialiased">
        <div class="">
            @if (Route::has('login'))
            <div class="">
                @auth
                <a href="{{ url('/home') }}" class="">Home</a>
                @else
                <a href="{{ route('login') }}" class="">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-3xl italic">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </body>

</html>