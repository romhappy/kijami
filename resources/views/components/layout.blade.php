<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
<nav>

    <img src="{{ URL::to('/') }}/img/nav_logo.svg" class="nav_logo" alt="logo du site">
    <button>Connection</button>
    <button>Créer un compte</button>
</nav>
    {{ $slot }}
</body>

</html>
