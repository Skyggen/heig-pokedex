<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-06-20 17:11:10
         compiled from "/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8218633665b2a6e8e84f9b1-91519085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277b2a3ac6c38b2f435bc68000175d01a9f4ae25' => 
    array (
      0 => '/home/EINET/adrien.ciampone/public_html/progcs/pokedex/includes/templates/header.tpl',
      1 => 1528378946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8218633665b2a6e8e84f9b1-91519085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b2a6e8e8dfa67_68690882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a6e8e8dfa67_68690882')) {function content_5b2a6e8e8dfa67_68690882($_smarty_tpl) {?><!DOCTYPE html>
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
            <img src="./assets/img/logo.png" alt=""
                 width="70" height="100%">
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
                    <?php if (!isset($_SESSION['pseudo'])) {?>
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
                    <?php } else { ?>
                        <p class="control">
                            <a class="button" href="#">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span><?php echo $_SESSION['pseudo'];?>
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
</nav><?php }} ?>
