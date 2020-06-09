<?php
session_start();

//$_SESSION['mysession'] = '1';
//$_SESSION['mysession2'] = '1';
//$_SESSION['mysession3'] = '1';
//$_SESSION['mysession4'] = '1';
//$_SESSION['mysession5'] = '1';

session_destroy();

var_export($_SESSION);die;
