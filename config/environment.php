<?php
//Entorno y Base de Datos
if (!isset ($environment)) {
    $environment = 'DEV';
}
$environment = 'DEV';

define('ENVIRONMENT', $environment);

switch ($environment) {

    case 'DEV' :
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        break;

    case 'PRE' :
        error_reporting(E_ERROR);
        break;
    case 'PRO' :
        ini_set("display_errors", 0);
        //disable all error notifications
        error_reporting(0);
        break;

}
