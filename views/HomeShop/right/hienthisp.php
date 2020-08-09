<?php

use MyProject\Core\Request;
use MyProject\Core\URL;
use MyProject\Database\DB;

$sosp = 6;
if (!isset(Request::uri()[1])) {
    $current_page = 1;
} else {
    $current_page = Request::uri()[1]; //Trang hiện tại
}
$offset = ($current_page - 1) * $sosp;
$totalRecords = DB::makeConnection()->query("SELECT * FROM sanpham")->num_rows;
$sotrang = ceil($totalRecords / $sosp);
$sql = "SELECT * FROM sanpham ORDER BY MaSP ASC  LIMIT " . $offset . ",6";
$sp = DB::makeConnection()->query($sql)->fetch_all();

?>
<p style="text-align:center;color:#e10c00;padding:10px">Tất Cả Sản Phẩm
<hr/></p>
<div class="sanphamall">
    <ul>
        <?php
        foreach ($sp as $item => $row):
            ?>
            <li>
                <a href="<?php echo URL::uri('ctsp') . "/" . $row[0]; ?>">
                    <img src="<?php echo $row[4] ?>" width="180" height="180"/>
                    <p style="color:#292929"><?php echo $row[1] ?></p>
                    <p style="color:#e10c00">Giá:<?php echo $row[2] ?> vnđ</p>
                    <P style="color:#e10c00;">Chi Tiết</P>
                </a>
            </li>
        <?php
        endforeach;
        ?>
        <div class="phantrang">
            <?php for ($b = 1; $b <= $sotrang; $b++) {
                echo '<a href="' . URL::uri('home') . '/' . $b . '">' . $b . '</a>';
            }
            ?>
        </div>
    </ul>

</div>

</div>