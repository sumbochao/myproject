<?php

namespace MyProject\Controller;

use MyProject\Model\LoginModel;

class LoginController
{
    public function loadView()
    {
        view('login');
    }
    
    public function handleLogin()
    {
        if (LoginModel::isLoggedIn($_POST['username'], $_POST['password'])) {
        
        }
    }
}
