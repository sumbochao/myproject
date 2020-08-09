<?php


namespace MyProject\Model;


use MyProject\Database\DB;

class HomeShopModel
{
    public static function searchproduct($like)
    {
        $sql="SELECT * FROM sanpham where TenSP like '%$like%'";
        $db=DB::makeConnection()->query($sql)->fetch_all();
        $numbe_row=DB::makeConnection()->query($sql)->num_rows;
        return [$db,$numbe_row];
    }

}