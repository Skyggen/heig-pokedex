<?php
session_start();
if (!isset($_SESSION["Authenticated"]))
{
    header("location: login.php");
}else
    header("location: game.php");

require ('config.php');
?>

//redirection sur login ou sur game