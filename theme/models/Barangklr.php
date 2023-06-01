<?php
class Barangklr
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
    public function dataBarangklr()
    {
        $sql = "SELECT b.foto,b.nama_barang,bk.jumlah_keluar, bk.tgl_keluar,j.nama_jenis,j.ket FROM barang_keluar bk
                INNER JOIN jenis j ON j.id_jenis = bk.id_jenis
                INNER JOIN barang b ON b.id_barang = bk.id_barang
                ORDER BY bk.id_barang_keluar DESC";
        //$databrg = $dbh->query($sql);
                $ps = $this->koneksi->prepare($sql);
                $ps->execute();
                $databrg = $ps->fetchAll();
                return $databrg;
    } 
}