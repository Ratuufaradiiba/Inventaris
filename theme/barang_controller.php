<?php
include_once 'koneksi.php';
include_once 'models/Barang.php';

$nama = $_POST['nama'];
$stok = $_POST['stok'];
$ket = $_POST['ket'];
$jen = $_POST['jenis'];
$sat = $_POST['satuan'];
$foto = $_POST['foto'];

$data = [
    $nama,
    $stok,
    $ket,
    $jen,
    $sat,
    $foto
];

$model = new Barang();
$tombol = $_REQUEST['proses']; 
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;
    default:
        header('Location:index.php?hal=dashboard');
        break;
}
header('Location:index.php?hal=dashboard');
?>