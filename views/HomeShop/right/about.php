<?php

use MyProject\Core\Request;
use MyProject\Database\DB;

require_once 'views/HomeShop/Header.php';
require_once 'views/HomeShop/Menu.php';
require_once 'views/HomeShop/Slide.php';
?>
    <div class="content">
        <div class="left">
            <?php
            require_once 'views/HomeShop/left/danhsachsp.php';
            ?>
        </div>
        <div class="right">
            <?php
            require_once 'views/Admin/AdminProfile/profileView.php';
            ?>
        </div>
    </div>
<?php
require_once 'views/HomeShop/Footer.php';
?>