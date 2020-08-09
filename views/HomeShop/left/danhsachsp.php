<?php
$loaisp=\MyProject\Database\DB::makeConnection()->query("select * from loai")->fetch_all();
$NSX=\MyProject\Database\DB::makeConnection()->query("select * from nhasanxuat")->fetch_all();
?>
<h4 style="text-align:center;color:#f7922a;background:#202020;;padding:10px"><i class="fas fa-bars"></i>Loại Sản Phẩm</h4>
<div class="danhsachsanpham">
    <ul>
        <?php
        foreach ($loaisp as $item=>$row){
            ?>
            <li><a href="<?php ?>"</a><?php echo $row[1]; ?></a></li>
            <?php
        }
        ?>
    </ul>
</div>
<!--================HIEUSANPHAM=============-->
<h4 style="text-align:center;color:#f7922a;background:#202020;;padding:10px"><i class="fas fa-bars"></i>Nhà Sản Phẩm
</h4>
<div class="danhsachsanpham">
    <ul>
        <?php
        foreach ($NSX as $item=>$row):
        ?>
        <li><a href="#"><?php echo $row[1];?></a></li>
        <?php
        endforeach;
        ?>
    </ul>
</div>