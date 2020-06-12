<?php

namespace MyProject\Core;

class Route
{
    private static $_self = null;
    private static $aRouter = null;
    
    public static function load($router)
    {
        if (self::$_self === null) {
            self::$_self = new self();
        }
        
        $oRoute = self::$_self;
        include $router;
        
        return self::$_self;
    }
    
    public function get($uri, $controller)
    {
        self::$aRouter['GET'][$uri] = $controller;
    }
    
    public function post($uri, $controller)
    {
        self::$aRouter['POST'][$uri] = $controller;
    }
    
    // login, GET
    private function getRoute($uri, $method)
    {
//        self::$aRouter = [
//            'GET'  => [
//                'login' => 'MyProject\Controller\LoginController@loadView',
//                '404'   => 'MyProject\Controller\LoginController@loadView',
//            ],
//            'POST' => [
//                'login' => 'MyProject\Controller\PageNotFound@handleLogin'
//            ]
//        ];
        
        return array_key_exists($uri, self::$aRouter[$method]) ? self::$aRouter[$method][$uri] : false;
    }
    
    private function callToAction($controller, $method, $aArgs = [])
    {
        $oInit = new $controller;
        call_user_func_array([$oInit, $method], $aArgs);
    }
    
    public function direct($uri, $method)
    {
        if ($controller = $this->getRoute($uri, $method)) {
            $aPasted = explode('@', $controller);
            $this->callToAction($aPasted[0], $aPasted[1]);
        } else {
        
        
        }
    }
}
