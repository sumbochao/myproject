<?php


namespace MyProject\Controller;


use MyProject\Core\URL;
use MyProject\Core\Session;

class LogoutController
{
    public function logout()
    {
        Session::destroyAll();
        header('location:'.URL::uri('admin'));
    }
}