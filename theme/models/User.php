<?php
class User
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct()
    {
        global $dbh; //panggil instance object di koneksi.php 
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataUser()
    {
        $sql = "SELECT * FROM user ORDER BY id_user DESC";
        //$databrg = $dbh->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $databrg = $ps->fetchAll();
        return $databrg;
    }

    public function getUser($id)
    {
        $sql = "SELECT * FROM user WHERE id_user = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $databrg = $ps->fetch();
        return $databrg;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO user (nama,username,email,password,foto,role) VALUES (?,?,?,SHA1(MD5(SHA1(?))),?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    
    public function ubah($data)
    {
        $sql = "UPDATE user SET nama=?,username=?,email=?,password=SHA1(MD5(SHA1(?))),foto=?,role=? WHERE id_user=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    
    public function hapus($id)
    {
        $sql = "DELETE FROM user WHERE id_user=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
    
    public function cekLogin($data)
    {
        $sql = "SELECT * FROM user WHERE username = ? AND password=SHA1(MD5(SHA1(?)))";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $databrg = $ps->fetch();
        return $databrg;
    }
}