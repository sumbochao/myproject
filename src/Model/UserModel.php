<?php


namespace MyProject\Model;


use MyProject\Database\QueryBuilder;

class UserModel
{
    public static function isUserExists($usernameOrEmail)
    {
        //SELECT * FROM user Where username='' or email='' and password='';
        $aUserInfo = QueryBuilder::table('user')
            ->select('email', 'username') // tra ve ('email','username')
            ->where('email', $usernameOrEmail)
            ->orWhere('username', $usernameOrEmail)
            ->first();
        return $aUserInfo;
    }

    public static function createUser($username, $email, $password)
    {
        $password = md5($password);

        $status = QueryBuilder::table('user')
            ->insert([
                'username' => $username,
                'email' => $email,
                'password' => $password
            ]);

        if (!$status) {
            return $status;
        }

        return QueryBuilder::getId();
    }

    public static function getUserById($userId)
    {
        return QueryBuilder::table('user')
            ->where('ID', $userId)
            ->first();
    }

    public static function loginUser()
    {

    }
}