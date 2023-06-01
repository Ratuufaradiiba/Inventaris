<?php
class Barang
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
    public function dataBarang()
    {
        $sql = "SELECT b.id_barang,b.foto,b.nama_barang,j.nama_jenis,s.nama_satuan,b.stok  FROM barang b
                INNER JOIN jenis j ON j.id_jenis = b.id_jenis
                INNER JOIN satuan s ON s.id_satuan = b.id_satuan
                ORDER BY b.id_barang DESC";
        //$databrg = $dbh->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $databrg = $ps->fetchAll();
        return $databrg;
    }

    public function getBarang($id)
    {
        $sql = "SELECT b.id_barang,b.foto,b.nama_barang,j.nama_jenis,s.nama_satuan,b.stok,j.ket  FROM barang b
                INNER JOIN jenis j ON j.id_jenis = b.id_jenis
                INNER JOIN satuan s ON s.id_satuan = b.id_satuan
                WHERE b.id_barang = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $databrg = $ps->fetch();
        return $databrg;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO barang (nama_barang,stok,ket,id_jenis,id_satuan,foto) VALUES (?,?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    
    public function ubah($data)
    {
        $sql = "UPDATE barang SET nama_barang=?,stok=?,ket=?,id_jenis=?,id_satuan=?,foto=? WHERE id_barang=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    
    public function hapus($id)
    {
        $sql = "DELETE FROM barang WHERE id_barang=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
    
}