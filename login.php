<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 30.05.2018
 * Time: 17:12
 */

require ('config.php');
//include CONTROLLERPATH."LoginCtrl.php";

$clogin = new LoginCtrl();

if (!isset($_POST['username']) || !isset($_POST['password']) || empty($_POST['username']) || empty($_POST['password']))
    $clogin->login();
else {
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . reCAPTCHAKEY . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
    $obj = json_decode($response);

    if ($obj->success == true)
        $clogin->checkLogin($_POST['username'], $_POST['password']);
    else
        $clogin->login();
}