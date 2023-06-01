<?php
class Barangmsk
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
    public function dataBarangmsk()
    {
        $sql = "SELECT b.foto,b.nama_barang,bm.jumlah_masuk, bm.tgl_masuk,j.nama_jenis,j.ket FROM barang_masuk bm
                INNER JOIN jenis j ON j.id_jenis = bm.id_jenis
                INNER JOIN barang b ON b.id_barang = bm.id_barang
                ORDER BY bm.id_barang_masuk DESC";
        //$databrg = $dbh->query($sql);
                $ps = $this->koneksi->prepare($sql);
                $ps->execute();
                $databrg = $ps->fetchAll();
                return $databrg;
    } }