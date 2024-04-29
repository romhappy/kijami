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
        <div class="nav_btn_container">
            <button class="nav_btn">Connection</button>
            <button class="nav_btn">Créer un compte</button>
        </div class="nav_btn_container">
    </nav>
    {{ $slot }}
<footer class="footer">
    <img src="{{ URL::to('/') }}/img/footer_logo.svg" class="footer_logo" alt="logo du site">
</footer>
</body>

</html>
