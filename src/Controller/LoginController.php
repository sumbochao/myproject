<?php

namespace MyProject\Controller;

use MyProject\Model\LoginModel;

class LoginController
{
    public function loadView()
    {
        include "views/login.php";
    }
    
    public function handleLogin()
    {
        var_export($_POST);die;
    }
}
