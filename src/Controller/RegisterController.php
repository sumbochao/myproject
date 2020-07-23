<?php

namespace MyProject\Controller;

use MyProject\Core\URL;
use MyProject\Model\RegisterModel;
use MyProject\Model\User;
use MyProject\Database\QueryBuilder;
use MyProject\Model\UserModel;
use MyProject\Core\Session;
use MyProject\Core\Redirect;

class RegisterController
{
    public function loadView()
    {
        include "views/register.php";
    }

    public function handleRegister()
    {

//        var_dump(!UserModel::isUserExists($_POST['username']) &&
//            !UserModel::isUserExists($_POST['email']));
//        die();
//        $data = $_POST;
//        $data['password'] = md5($_POST['password']);
//        if (User::isUserExists($data['username'])[0]) {
//            $_SESSION['errorRegister'] = 'Username or Email Da ton tai';
//            header('location:' . URL::uri('register'));
//        } else {
//            if (User::insert($data)) {
//                $_SESSION['islogin1']='the Acount created successfully ';
//                header('location:'.URL::uri('login'));
//                unset($_SESSION['islogin1']);
//            }
//        }
        if (!UserModel::isUserExists($_POST['username']) && !UserModel::isUserExists($_POST['email'])) {
            $userId = UserModel::createUser($_POST['username'], $_POST['email'], $_POST['password']);
            if ($userId) {
                Session::set('register-success','The account has been saved to databasse');
                header('location:'.URL::uri('login'));
            } else {
                Session::set('register-error', 'We could not insert this username to database');
                Redirect::to('register');
            }
        } else {
            Session::set('register-error', 'The username or email are already exists');
            Redirect::to('register');
        }
    }
}
