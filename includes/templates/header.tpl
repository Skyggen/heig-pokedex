<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-language" content="fr" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pok game</title>
    <link rel="shortcut icon" href="./assets/img/favico.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="./assets/img/logo.png" alt=""
                 width="70" height="100%">
        </a>

    </div>

        <div class="navbar-start">
            <a class="navbar-item" href="game.php">Game</a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    {if !isset($smarty.session.pseudo)}
                        <p class="control">
                            <a class="button is-danger is-primary" href="registration.php">
                                <span class="icon"><i class="fas fa-user-plus"></i> </span>
                                <span>S'inscrire</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-info" href="login.php">
                                <span class="icon"><i class="fas fa-sign-in-alt"></i> </span>
                                <span>Login</span>
                            </a>
                        </p>
                    {else}
                        <p class="control">
                            <a class="button" href="#">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span>{$smarty.session.pseudo}</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-info" href="logout.php">
                                <span class="icon"><i class="fas fa-sign-out-alt"></i> </span>
                                <span>Logout</span>
                            </a>
                        </p>
                    {/if}
                </div>
            </div>
        </div>

</nav>