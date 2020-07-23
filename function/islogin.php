<?php
function isUserLoggedIn(){
    return isset($_SESSION['isLogin']);
}