<?php

use MyProject\Core\App;
use \MyProject\Core\Request;
use \MyProject\Core\Route;

require_once "vendor/autoload.php";
App::bind('config/app', require_once "config/app.php");


Route::load( "config/router.php")
     ->direct(Request::uri(), Request::method())
;

