<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>


    <!-- Styles -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="{{ route('app_home') }}"><img src="{{ URL::to('/') }}/img/nav_logo.svg" class="nav_logo"
                alt="logo du site"></a>
        <div class="nav_btn_container">
            <a href="{{ route('app_login') }}"><button class="nav_btn">Connection</button></a>
            <button class="nav_btn">Créer un compte</button>
        </div class="nav_btn_container">
    </nav>
    {{ $slot }}
    <footer class="footer">
        <img src="{{ URL::to('/') }}/img/footer_logo.svg" class="footer_logo" alt="logo du site">
    </footer>
</body>

</html>
