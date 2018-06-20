<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 30.05.2018
 * Time: 17:12
 */
session_start();

if (!isset($_SESSION["Authenticated"]))
{
   header("location: login.php");
}
include "config.php";
//$pok = Pokemon::getById($_GET['idPok']);
$cGame = new GameCtrl();

if(isset($_GET['IdPok'])){
    $cGame->catchPokemon($_GET['IdPok']);
}

$cGame->displayPokedex();