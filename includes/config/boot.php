<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 29.05.2018
 * Time: 14:00
 */
//ini_set('error_reporting', E_ALL);
//require('/usr/share/php/smarty3/Smarty.class.php');
//require('C:/MAMP/bin/php/php7.1.7/lib/Smarty/Smarty.class.php');
//require (INCLUDESPATH."/class/db.php");

require 'smarty/Smarty.class.php';
//require('C:/MAMP/bin/php/php7.1.7/lib/Smarty/Smarty.class.php');

spl_autoload_register(function ($className) {

    if (file_exists(CONTROLLERPATH . $className . '.php')) {
        include CONTROLLERPATH . $className . '.php';
        return;
    } elseif (file_exists(MODELPATH . $className . '.php')) {
        include MODELPATH . $className . '.php';
        return;
    } elseif (file_exists(CLASSPATH . $className . '.php')) {
        include CLASSPATH . $className . '.php';
        return;
    } else {
        throw new MissingException("Impossible to load $className.");
    }

});


/*
 * START SESSION
 */
Session::start_session();
var_dump($_SESSION);