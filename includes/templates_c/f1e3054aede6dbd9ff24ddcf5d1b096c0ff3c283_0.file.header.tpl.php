<?php
/* Smarty version 3.1.32, created on 2018-06-01 09:47:39
  from 'C:\MAMP\htdocs\ProgServ\coursphp\progcs\pokedex\includes\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b11163b1eee50_41887115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1e3054aede6dbd9ff24ddcf5d1b096c0ff3c283' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\ProgServ\\coursphp\\progcs\\pokedex\\includes\\templates\\header.tpl',
      1 => 1527846453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b11163b1eee50_41887115 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-language" content="fr" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pok game</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="./assets/img/1.png" alt=""
                 width="40" height="40">
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="game.php">Game</a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <?php if (!isset($_SESSION['username'])) {?>
                        <p class="control">
                            <a class="button is-primary" href="registration.php">
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
                    <?php } else { ?>
                        <p class="control">
                            <a class="button" href="#">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span><?php echo $_SESSION['username'];?>
</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-info" href="logout.php">
                                <span class="icon"><i class="fas fa-sign-out-alt"></i> </span>
                                <span>Logout</span>
                            </a>
                        </p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</nav><?php }
}
