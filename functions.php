<?php
function createDatabase()
{
    global $aConfigs;
    
    $db = new mysqli(
        $aConfigs['database']['host'],
        $aConfigs['database']['username'],
        $aConfigs['database']['password']
    );
    
    $query = $db->query("CREATE DATABASE IF NOT EXISTS myproject1");
    
    if ($query) {
        //        echo "The database has been created successfully";
    } else {
        echo "We could not create this database due to: ".$db->error;
    }
}

function createUsersTable()
{
    $db    = makeConnection();
    $query = $db->query("CREATE TABLE IF NOT EXISTS users(
        ID TINYINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username varchar(50) NOT NULL,
        email varchar(50) NOT NULL,
        password varchar(32) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )");
    
    if ($query) {
        //        echo "The table has been created successfully";
    } else {
        echo "We could not create this table due to: ".$db->error;
    }
}

function buildQueryArgs($aArgs, $url = '')
{
    global $aConfigs;
    if (empty($url)) {
        $url = $aConfigs['homeURL'];
    }
    
    return $url.'?'.http_build_query($aArgs);
}

function redirectTo($where = '')
{
    global $aConfigs;
    
    if (empty($where)) {
        $where = $aConfigs['homeURL'];
    }
    
    header('Location: '.$where);
    exit;
}

function isUserLoggedIn()
{
    return isset($_SESSION['logged_in']);
}

function route($currentRoute)
{
    if (is_file("views/".$currentRoute.".php")) {
        include "views/".$currentRoute.".php";
    } else {
        include "views/404.php";
    }
}

function isUserExist()
{

}

function isEmailExist()
{

}
