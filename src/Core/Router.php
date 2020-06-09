<?php

namespace MyProject\Core;

use MyProject\Controller\LoginController;

class Router
{
    private static $_self;
    private static $aRouter;
    
    public static function load($route)
    {
        if (empty(self::$_self)) {
            self::$_self = new self();
        }
        
        self::$aRouter = $route;
        
        return self::$_self;
    }
    
    public function direct($uri)
    {
        if (array_key_exists($uri, self::$aRouter)) {
            $aParse = explode('@', self::$aRouter[$uri]);
            $oInit  = new $aParse[0];
            
            $oInit->{$aParse[1]}();
        }
    }
}

