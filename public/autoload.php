<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(__DIR__) . DS);
define("APP", ROOT_PATH . 'APP' . DS);
define("CORE", ROOT_PATH . 'src' . DS);
define("CONFIG", ROOT_PATH . 'config' . DS);
define("CONTROLLERS", APP . 'controllers' . DS);
define("MODELS", APP . 'models' . DS);
define("VIEWS", ROOT_PATH . 'views' . DS);
define("LIBS", ROOT_PATH . 'Libs' . DS);
define("UPLOADS", ROOT_PATH . 'public' . DS . 'uploads' . DS);


require_once(CONFIG.'Config.php');
require_once(CONFIG.'helpers.php');
// autoload all classes 
$modules = [ROOT_PATH, APP, CORE, VIEWS, CONTROLLERS, MODELS, CONFIG];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload');




new App();
