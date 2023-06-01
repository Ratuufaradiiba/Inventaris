<?php
class Jenis
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
    public function dataJenis()
    {
        $sql = "SELECT * FROM jenis";
        //$databrg = $dbh->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $datajns = $ps->fetchAll();
        return $datajns;
    }
}