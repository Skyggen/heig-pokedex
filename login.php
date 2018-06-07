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

if (!isset($_POST['pseudo']) || !isset($_POST['password']) || empty($_POST['pseudo']) || empty($_POST['password']))
    $clogin->login();
else {
        $clogin->checkLogin($_POST['pseudo'], $_POST['password']);

}
