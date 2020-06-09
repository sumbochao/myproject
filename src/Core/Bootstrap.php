<?php
require "vendor/autoload.php";

use \MyProject\Core\App;
use \MyProject\Core\Request;
use \MyProject\Core\Router;

if (!function_exists('view')) {
    function view($file)
    {
        $file = "views/".$file.'.php';
        if (is_file($file)) {
            include $file;
        } else {
            include "views/404.php";
        }
    }
}

App::bind('config/app', require "config/app.php");
App::bind('config/route', require "config/route.php");
//
//$oInit = new Router();

Router::load(App::get('config/route'))->direct(Request::uri());
