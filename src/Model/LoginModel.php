<?php

namespace MyProject\Model;

use MyProject\Core\URL;
use MyProject\Database\DB;
use MyProject\Database\QueryBuilder;

class LoginModel
{
    public static function isLoggedIn($data)
    {
//        $query = DB::makeConnection()->query("SELECT id,username FROM user WHERE username='" . mysqli_real_escape_string(DB::makeConnection(),$data['username']) . "'
//        and password='" .mysqli_real_escape_string( DB::makeConnection(),$data['password'] ). "'
//        or email='" .mysqli_real_escape_string(DB::makeConnection(),$data['username']) . "'");
//        $odata=$query->fetch_assoc();
//        return [($query->num_rows > 0),$odata];
         $query=QueryBuilder::table('user')
             ->select('id')
             ->where('username',$data['username'])
             ->orWhere('email',$data['username'])
             ->andWhere('password',$data['password'])
             ->first();
        return $query;
    }
}
