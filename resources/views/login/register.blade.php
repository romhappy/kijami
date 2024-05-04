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
            <h2>Inscription</h2>
            <input type="text" class="login_input" name="username" placeholder="Nom" required="" autofocus="" />
            <input type="text" class="login_input" name="username" placeholder="Prénom" required=""
                autofocus="" />
                <input type="text" class="login_input" name="username" placeholder="Email" required=""
                autofocus="" />
                <input type="text" class="login_input" name="username" placeholder="Mot de passe" required=""
                autofocus="" />
                <input type="text" class="login_input" name="username" placeholder="Confirmation mot de passe" required=""
                autofocus="" />

            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Je reconnais avoir pris connaissance des conditions générales d'utilisation.
            </label>
            <button class="submit_btn" type="submit">Créer un compte</button>
        </form>
    </div>
    <div class="form_forgot">
        <a href="#"></a>Déjà un compte? Connectez vous ...</a>
    </div>
    <footer class="footer">
        <img src="{{ URL::to('/') }}/img/footer_logo.svg" class="footer_logo" alt="logo du site">
    </footer>
</body>

</html>
