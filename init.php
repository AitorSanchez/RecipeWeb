<?php
/*
 * Inicializa la configuracion del sistema
 */

//function __autoload($class_name)
//{
//    $name = strtolower($class_name);
//    include ROOT_PATH . 'application/models/' . $name . '.php';
//}

require_once(ROOT_PATH . 'config/init_db.php');
// todos los require de librerias
include_once (LIBS_PATH . 'class.inputfilter.php');
include_once (LIBS_PATH . 'utils.php');

/*
$sbm = 0;
$mc = customMC :: iniMemCache();
$mc->getCache('Seconds_Behind_Master', $sbm);
if ($sbm > 100) {
	define('USING_SLAVE', false);
} else {
	define('USING_SLAVE', true);
}
*/

define('USING_SLAVE', true);
