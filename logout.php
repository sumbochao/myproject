<?php
session_start();
unset($_SESSION['logged_in']);

$aConfigs = require_once "config/app.php";
require_once "database/connection.php";
require_once "functions.php";

redirectTo();
