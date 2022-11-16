
<?php
/**
 *
 * front end controller
 */
 
    class App{
        protected $controller = "homeController";
        protected $action = "index";
        protected $params = [];

        public function __construct(){
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("/",$url);
        var_dump($url);
        }
    }