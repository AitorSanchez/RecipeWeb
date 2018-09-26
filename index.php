<?php

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
define('APPPATH', ROOT_PATH . 'application/');
define('SYSTEMPATH', ROOT_PATH . 'system/');
require_once ROOT_PATH . 'config/environment.php';



require_once SYSTEMPATH . 'constants.php';
require_once SYSTEMPATH . 'genericController.php';
require_once SYSTEMPATH . 'genericModel.php';
require_once SYSTEMPATH . 'template.php';


require_once ROOT_PATH . 'config/constants.php';
require_once ROOT_PATH . 'init.php';

require_once SYSTEMPATH . 'frontController.php';

//Lo iniciamos con su método estático main.
FrontController:: main($db);
