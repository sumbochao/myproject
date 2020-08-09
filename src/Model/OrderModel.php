<?php


namespace MyProject\Model;


use MyProject\Database\DB;

class OrderModel
{
    public static function selectAll($id)
    {
        $db = DB::makeConnection()->query("SELECT DISTINCT sp.TenSP,sp.Anh,dhp.price,dhp.quantity,dh.total,dh.note FROM donhang dh JOIN donhangphu dhp ON dh.id=dhp.id_donhang JOIN sanpham sp ON sp.MaSP=dhp.MaSP WHERE dh.id=".$id."")->fetch_all();
        return $db;
    }
}