<?php


namespace MyProject\Model;


use MyProject\Core\URL;
use MyProject\Database\DB;

class User
{
    public static function isUserExists($usernameOrEmail)
    {
        $oCheck = DB::makeConnection()->query("SELECT * FROM user WHERE username='" . $usernameOrEmail . "' 
        OR email='" . $usernameOrEmail . "'");

        return [$oCheck->num_rows > 0, $oCheck->fetch_assoc()];
    }

    public static function insert($data)
    {
        $sql = sprintf(
            "INSERT INTO user(%s) VALUES(%s)",
            implode(',', array_keys($data)),
            '"' . implode('","', array_values($data)) . '"');
        $oCheck = DB::makeConnection()->query($sql);
        return $oCheck;
    }

    public static function SelectAll()
    {
        $oCheck = DB::makeConnection()->query("SELECT id,username,email FROM user ");
        return $oCheck;
    }

    public static function getAddUser($id)
    {
        $oCheck = DB::makeConnection()->query("SELECT id,username,email,password FROM user where id='" . $id . "'");
        return $oCheck;
    }

    public static function deleteUser($id)
    {
        $oDelete = DB::makeConnection()->query("DELETE FROM user WHERE id='" . $id . "'");
        return $oDelete;
    }

    public static function updateUser($data)
    {
        $oUpdate = DB::makeConnection()->query("UPDATE user SET id='" . $data['id'] . "',username='" . $data['username'] . "',
        email='" . $data['email'] . "',password='" . $data['password'] . "'
         WHERE id='" . $data['id'] . "'");
        return $oUpdate;
    }

    public static function updatePass($data)
    {
        $oUpDate=DB::makeConnection()->query("UPDATE user SET password='" . $data['pass'] . "' 
        WHERE id='" . $data['id'] . "' ");
        return $oUpDate;
    }

}