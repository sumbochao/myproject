<?php
/**
 * @var $oRoute \MyProject\Core\Route
 */

//
$oRoute->get('login', 'MyProject\Controller\LoginController@loadView');
$oRoute->get('404', 'MyProject\Controller\PageNotFound@loadView');
$oRoute->get('register', 'MyProject\Controller\RegisterController@loadView');
$oRoute->post('register', 'MyProject\Controller\RegisterController@handleRegister');
$oRoute->post('logout', 'MyProject\Controller\LoginController@handleLogout');
$oRoute->post('login', 'MyProject\Controller\LoginController@handleLogin');
