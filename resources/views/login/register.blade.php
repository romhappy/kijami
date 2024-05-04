<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">

    <title>Register Page</title>
</head>

<body>
    <div class="login_form_container">
        <form class="login_form">
            <img src="{{ URL::to('/') }}/img/nav_logo.svg" class="nav_logo" alt="logo du site">
            <h2>Connectez-vous</h2>
            <input type="text" class="login_input" name="username" placeholder="Email Address" required=""
                autofocus="" />
            <input type="password" class="login_input" name="password" placeholder="Password" required="" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Rester connecté
            </label>
            <button class="submit_btn" type="submit">Se connecter</button>
        </form>
    </div>
    <div class="form_forgot">
        <a href="#"></a>Mot de passe oublié ?</a>
        <a href="#"></a>Pas encore de compte ? Créez en un ! </a>
    </div>
</body>

</html>
