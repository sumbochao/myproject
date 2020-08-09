<?php


namespace MyProject\Model;

use MyProject\Database\DB;


class AdminModel
{
    //login
    public static function loginUser($data)
    {
        return DB::makeConnection()->query("SELECT * FROM dangnhap where email='" . $data['email'] . "' and password='" . $data['password'] . "' ");
    }

    //Product
    public static function selectAllProduct()
    {
        return DB::makeConnection()->query("SELECT * FROM sanpham");
    }

    public static function addProduct($data)
    {
        $aValues = array_values($data);
        $aValues = '"' . implode('","', $aValues) . '"';
        $sql = sprintf('INSERT INTO sanpham(MaSP,TenSP,GiaBan,ChiTiet,MaNSX,MaLoai,Anh) VALUES(%s)', $aValues);
        return DB::makeConnection()->query($sql);
    }

    public static function selectOneProduct($id)
    {
        return DB::makeConnection()->query("SELECT * FROM sanpham where MaSP='" . $id . "'");
    }

    public static function isProductExists($tensp)
    {
        return DB::makeConnection()->query("SELECT * FROM sanpham sp JOIN nhasanxuat nxx on sp.MaNSX=nxx.MaNSX 
            JOIN loai l ON l.MaLoai=sp.MaLoai WHERE TenSP='" . $tensp . "'");
    }

    public static function deleteProduct($id)
    {
        return DB::makeConnection()->query("DELETE FROM sanpham where MaSP='" . $id . "'");
    }

    public static function updateProduct($data)
    {
        return DB::makeConnection()->query("UPDATE sanpham SET TenSP='" . $data['TenSP'] . "',GiaBan='" . $data['GiaBan'] . "',ChiTiet='" . $data['ChiTiet'] . "',
        MaNSX='" . $data['NSX'] . "',MaLoai='" . $data['Loai'] . "',Anh='" . $data['Images'] . "'
        Where MaSP='" . $data['id'] . "'
        ");
    }

    // Producer
    public static function selectAllProducer()
    {
        return DB::makeConnection()->query("SELECT * FROM nhasanxuat");
    }

    public static function isProducerExists($TenNSX)
    {
        return DB::makeConnection()->query("SELECT * FROM nhasanxuat where TenNSX='" . $TenNSX . "'");
    }

    public static function addProducer($data)
    {
        $aValues = array_values($data);
        $aValues = '"' . implode('","', $aValues) . '"';
        $sql = sprintf('INSERT INTO nhasanxuat VALUES(%s)', $aValues);
        return DB::makeConnection()->query($sql);
    }

    public static function selectOneProducer($id)
    {
        return DB::makeConnection()->query("SELECT * FROM nhasanxuat where MaNSX='" . $id . "'");
    }

    public static function updateProducer($data)
    {
        return DB::makeConnection()->query("UPDATE nhasanxuat SET TenNSX='" . $data['TenNSX'] . "',DiaChi='" . $data['DiaChi'] . "',Sdt='" . $data['Sdt'] . "'
        Where MaNSX='" . $data['id'] . "'
        ");
    }

    public static function deleteProducer($id)
    {
        return DB::makeConnection()->query("DELETE FROM nhasanxuat where MaNSX='" . $id . "'");
    }

    //Type
    public static function selectAllType()
    {
        return DB::makeConnection()->query("SELECT * FROM loai");
    }

    public static function selectOneType($id)
    {
        return DB::makeConnection()->query("SELECT * FROM loai WHERE MaLoai='" . $id . "'");
    }

    public static function isTypeExists($TenLoai)
    {
        return DB::makeConnection()->query("SELECT * FROM loai where TenLoai='" . $TenLoai . "'");
    }

    public static function insertType($data)
    {
        return DB::makeConnection()->query("INSERT INTO loai value ('" . $data['id'] . "','" . $data['TenLoai'] . "')");
    }

    public static function updateType($data)
    {
        return DB::makeConnection()->query("UPDATE loai SET TenLoai='" . $data['TenLoai'] . "' where MaLoai='" . $data['id'] . "'");
    }

    public static function deleteType($id)
    {
        return DB::makeConnection()->query("DELETE FROM loai where MaLoai='" . $id . "'");
    }

    //UserModel
    public static function selectAllUser()
    {
        return DB::makeConnection()->query('SELECT * FROM khachhang');
    }


}