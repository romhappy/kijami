<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="{{ route('app_home') }}"><img src="{{ URL::to('/') }}/img/nav_logo.svg" class="nav_logo"
                alt="logo du site"></a>
        <div class="nav_btn_container">
            <a href="{{ route('app_login') }}"><button class="nav_btn" type="button">Connection</button></a>
            <a href="{{ route('app_register') }}"><button class="nav_btn" type="button">Créer un compte</button></a>
        </div class="nav_btn_container">
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer class="footer">
        <img src="{{ URL::to('/') }}/img/footer_logo.svg" class="footer_logo" alt="logo du site">
    </footer>
</body>

</html>
