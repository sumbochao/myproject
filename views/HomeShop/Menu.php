<div class="menu">
    <ul >
        <li ><i class="fas fa-home"></i><a href="<?php echo \MyProject\Core\URL::uri('home');?>">TRANG CHỦ</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('home');?>">SẢN PHẨM</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('register');?>">ĐĂNG KÝ</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('login');?>">ĐĂNG NHẬP</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('cart');?>">GIỎ HÀNG</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('order');?>">ĐƠN HÀNG</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('about');?>">GIỚI THIỆU</a></li>
        <li><a href="<?php echo \MyProject\Core\URL::uri('logout1');?>">ĐĂNG XUẤT</a></li>

        <form action="<?php echo \MyProject\Core\URL::uri('search');?>"method="post" enctype="multipart/form-data">
            <div class="searchform">
                <input type="text"id="searchf"name="search" placeholder="Search..."/>
                <input type="submit" value="search"/>
            </div>
        </form>

    </ul>

</div>