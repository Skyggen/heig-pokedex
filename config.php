<?php

$dbConfig = [
  'username' => 'adrien.ciampone',
  'password' => 'adrien.ciampone',
  'database' => 'adrien.ciampone'
];

define ("TBCONF",serialize($dbConfig));
define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('INCLUDESPATH', ROOTPATH . "includes" . DIRECTORY_SEPARATOR);
define('CLASSPATH', INCLUDESPATH . 'class' . DIRECTORY_SEPARATOR);
define('CONFIGPATH', INCLUDESPATH . 'config' . DIRECTORY_SEPARATOR);
define('TEMPLATESPATH', INCLUDESPATH . 'templates' . DIRECTORY_SEPARATOR);
define('TEMPLATECOMPILEDPATH', INCLUDESPATH . 'templates_c' . DIRECTORY_SEPARATOR);
define('CONTROLLERPATH', realpath(CLASSPATH . 'controller') . DIRECTORY_SEPARATOR);
define('MODELPATH', realpath(CLASSPATH . 'model') . DIRECTORY_SEPARATOR);
require(CONFIGPATH."boot.php");