<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT_PATH", dirname(__DIR__) . DS);
define("APP", ROOT_PATH . 'APP' . DS);
define("src", ROOT_PATH . 'src' . DS);
define("CONFIG", APP . 'config' . DS);
define("CONTROLLERS", APP . 'controllers' . DS);
define("MODELS", APP . 'models' . DS);
define("VIEWS", ROOT_PATH . 'views' . DS);
define("UPLOADS", ROOT_PATH . 'public' . DS . 'uploads' . DS);





// autoload all classes 
$modules = [ROOT_PATH, APP, src, VIEWS, CONTROLLERS, MODELS, CONFIG];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', false);




new App();
