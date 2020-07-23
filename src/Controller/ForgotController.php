<?php


namespace MyProject\Controller;


use MyProject\Core\URL;
use MyProject\Model\User;


class ForgotController
{
    public function loadview()
    {
        require_once 'views/forgotpassword.php';
    }

    public function viewRePass()
    {
        require_once 'views/ResestPassWord.php';
    }

    public function forgot()
    {
        $email = $_POST['email'];
        if (User::isUserExists($email)[0]) {
            $_SESSION['id']= User::isUserExists($email)[1]['id'];
            header('location:'.URL::uri('repass'));

        } else {
            $_SESSION['errorps'] = 'Email Khong Ton Tai';
            header('location:' . URL::uri('forgot'));
        }
    }

    public function resertPass()
    {
        $data=$_POST;
        $data['pass']=md5($_POST['pass']);
        if (User::updatePass($data)){
            $_SESSION['islogin1']='Password da cap nhat';
            header('location:'.URL::uri('login'));
        }
    }
}