<?php

namespace MyProject\Core;

class Request
{
    public static function uri()
    {
        return str_replace(
            App::get('config/app')['baseURI'],
            '',
            $_SERVER['REQUEST_URI']
        );
    }
}
