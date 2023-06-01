<?php
session_start();
//------sertakan file koneksi db------
include_once 'koneksi.php';
//------sertakan models------
include_once 'models/Barang.php';
include_once 'models/Barangmsk.php';
include_once 'models/Barangklr.php';
include_once 'models/Jenis.php';
include_once 'models/Satuan.php';
include_once 'models/User.php';

//------sertakan potongan2 file template web------
include_once 'header.php';

$hal = $_REQUEST['hal'];

include_once 'navigation.php';
//jika ada request dari menu di url tampilkan hal sesuai request
if (!empty($hal)) {
    include_once $hal . '.php';
} else { //jika tidak ada request dari menu di url tampilkan hal home.php
    include_once 'home.php';
}
//area main di logic
//tangkap request menu di url (index.php?hal=.....)

include_once 'footer.php';