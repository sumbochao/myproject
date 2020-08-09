<?php


namespace MyProject\Controller;


use MyProject\Core\Request;
use MyProject\Core\URL;
use MyProject\Model\UserModel;

class ManagerController
{
    public static function deleteUser()
    {
        $id = Request::uri()[1];
        if (UserModel::deleteUser($id)) {
            $_SESSION['islogin'] = 'admin';
            header('location:' . URL::uri('home'));
        }
    }

    public static function viewAdd()
    {
        require_once 'views/adduser.php';
    }

    public static function viewUpdate()
    {
        require_once 'views/edituser.php';
    }

    public static function updateUser()
    {
        $data = $_POST;
        $data['password'] = md5($_POST['password']);
        if (UserModel::updateUser($data)) {
            $_SESSION['islogin']='admin';
            header('location:'.URL::uri('home'));
        }
    }

    public static function addUser()
    {
        $data = $_POST;
        $data['password'] = md5($_POST['password']);
        if (UserModel::isUserExists($data['username'])[0] || UserModel::isUserExists($data['gmail'])[0]) {
            $_SESSION['erroradd'] = 'user or email da ton tai';
            header('location:' . URL::uri('add'));
        } else {
            if (UserModel::insert($data)) {
                $_SESSION['islogin'] = 'admin';
                header('location:' . URL::uri('home'));
            }
        }
    }

}