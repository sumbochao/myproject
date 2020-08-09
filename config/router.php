<?php
/**
 * @var $oRoute \MyProject\Core\Route ...
 */

//login_logout
$oRoute->get('login', 'MyProject\Controller\LoginController@loadView');
$oRoute->get('404', 'MyProject\Controller\PageNotFound@loadView');
$oRoute->get('register', 'MyProject\Controller\RegisterController@loadView');
$oRoute->post('register', 'MyProject\Controller\RegisterController@handleRegister');
$oRoute->post('login', 'MyProject\Controller\LoginController@handleLogin');
$oRoute->get('home', 'MyProject\Controller\HomeShopController@homeView');
$oRoute->get('', 'MyProject\Controller\HomeController@loadview');
$oRoute->get('about', 'MyProject\Controller\AboutController@loadview');
//$oRoute->get('contact', 'MyProject\Controller\ContactController@loadview');
$oRoute->get('logout', 'MyProject\Controller\LogoutController@logout');
$oRoute->get('logout1', 'MyProject\Controller\LogoutController@logout1');
//$oRoute->get('delete', 'MyProject\Controller\ManagerController@deleteUser');
//$oRoute->get('add', 'MyProject\Controller\ManagerController@viewAdd');
$oRoute->get('forgot', 'MyProject\Controller\ForgotController@loadview');
$oRoute->post('forgot', 'MyProject\Controller\ForgotController@forgot');
$oRoute->get('repass', 'MyProject\Controller\ForgotController@viewRePass');
$oRoute->post('repass', 'MyProject\Controller\ForgotController@resertPass');
//$oRoute->post('add', 'MyProject\Controller\ManagerController@addUser');
//$oRoute->get('update', 'MyProject\Controller\ManagerController@viewUpdate');
//$oRoute->post('update', 'MyProject\Controller\ManagerController@updateUser');
//admin-login
$oRoute->post('loginadmin', 'MyProject\Controller\AdminController@loginUser');
//admin-product
$oRoute->get('admin', 'MyProject\Controller\AdminController@viewAdmin');
$oRoute->get('profile', 'MyProject\Controller\AdminController@viewProfile');
$oRoute->get('listProduct', 'MyProject\Controller\AdminController@listProductView');
$oRoute->get('updateProduct', 'MyProject\Controller\AdminController@updateView');
$oRoute->get('deleteProduct', 'MyProject\Controller\AdminController@deleteProduct');
$oRoute->get('addProduct', 'MyProject\Controller\AdminController@addView');
$oRoute->post('updateProduct', 'MyProject\Controller\AdminController@updateProduct');
$oRoute->post('addProduct', 'MyProject\Controller\AdminController@addProduct');
//admin-Producer
$oRoute->get('listProducer', 'MyProject\Controller\AdminController@listViewProducer');
$oRoute->get('addProducer', 'MyProject\Controller\AdminController@addViewProducer');
$oRoute->get('updateProducer', 'MyProject\Controller\AdminController@updateViewProducer');
$oRoute->get('deleteProducer', 'MyProject\Controller\AdminController@deleteProducer');
$oRoute->post('updateProducer', 'MyProject\Controller\AdminController@updateProducer');
$oRoute->post('addProducer', 'MyProject\Controller\AdminController@addProducer');
//admin-Type
$oRoute->get('listType', 'MyProject\Controller\AdminController@listViewType');
$oRoute->get('addType', 'MyProject\Controller\AdminController@addViewType');
$oRoute->post('addType', 'MyProject\Controller\AdminController@addType');
$oRoute->get('updateType', 'MyProject\Controller\AdminController@updateViewType');
$oRoute->post('updateType', 'MyProject\Controller\AdminController@updateType');
$oRoute->get('deleteType', 'MyProject\Controller\AdminController@deleteType');
//admin-UserModel
$oRoute->get('listUser', 'MyProject\Controller\AdminController@listViewUser');
$oRoute->get('addUser', 'MyProject\Controller\AdminController@addViewUser');
$oRoute->get('updateUser', 'MyProject\Controller\AdminController@updateViewUser');
$oRoute->get('deleteUser', 'MyProject\Controller\AdminController@deletewUser');
//////route SHOP
//Chitietsp
$oRoute->get('ctsp', 'MyProject\Controller\CTSPController@ctspView');
//tìm kiếm
$oRoute->post('search', 'MyProject\Controller\SearchController@searchProduct');
//Giỏ hàng
$oRoute->get('cart', 'MyProject\Controller\CartController@cartView');
//xóa sp
$oRoute->get('logout2', 'MyProject\Controller\LogoutController@logout2');
$oRoute->post('cart', 'MyProject\Controller\CartController@cartView');
$oRoute->post('cartaction', 'MyProject\Controller\HomeShopController@cartAction');
//donhang
$oRoute->get('order', 'MyProject\Controller\OrderController@orderView');

