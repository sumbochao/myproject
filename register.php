<?php
session_start();

$aConfigs = require_once "config/app.php";
require_once "database/connection.php";
require_once "functions.php";

$aRequires = ['username', 'email', 'password'];

foreach ($aRequires as $require) {
    if (isset($_POST[$require]) || empty($_POST[$require])) {
        $_SESSION['error'] = sprintf("The field %s is required", $require);
        redirectTo(buildQueryArgs(['route' => 'register']));
    }
}

$db                = makeConnection();
$aData             = $_POST;
$aData['ID']       = null;
$aData['password'] = md5($_POST['password']);

$sql   = sprintf(
    "INSERT INTO users(%s) VALUES(%s)",
    implode(',', array_keys($aData)),
    '"'.implode('","', array_values($aData)).'"'
);
$query = $db->query($sql);

unset($_SESSION['error']);

if ($query) {
    $_SESSION['logged_in'] = $db->insert_id;
    header("Location: ".$aConfigs['homeURL']);
    exit;
} else {
    $_SESSION['error'] = "Oops! We could not create this user. Error: ".$db->error;
    header("Location: ".buildQueryArgs(['route' => 'register']));
    exit;
}


