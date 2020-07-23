<?php

namespace MyProject\Controller;

use MyProject\Core\Session;
use MyProject\Core\URL;
use MyProject\Model\LoginModel;
use MyProject\Model\User;
use MyProject\Model\UserModel;

class LoginController
{
    public function loadView()
    {

        include "views/login.php";
    }

    public function handleLogin()
    {
        $data = $_POST;
        $data['password'] = md5($_POST['password']);
        var_dump(LoginModel::isLoggedIn($data));die();
        if (LoginModel::isLoggedIn($data)['id']) {
            $a=LoginModel::isLoggedIn($data)['id'];
            Session::set('isLogin',UserModel::getUserById($a)['username']);
            header('location:' . URL::uri('home'));
        } else {
            Session::set('errorLogin','username Or Password khong dung');
            header('location:' . URL::uri('login'));
        }
    }
}
