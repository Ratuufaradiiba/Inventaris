<?php

$model = new Barang();
$databrg = $model->dataBarang();

$sesi = $_SESSION['USER'];
if(isset($sesi)){
?>
<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Recently Favorited -->
                <center>
                    <div class="widget dashboard-container my-adslist">
                        <h3 class="widget-header">Dashboard Barang</h3>
                        <table class="table  product-dashboard-table">
                            <center>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Nama Barang</th>
                                        <th class="text-center">Jenis Barang</th>
                                        <th class="text-center">Satuan</th>
                                        <th class="text-center">Stok</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        foreach ($databrg as $row) {
                                        ?>
                                        <td class="product-thumb">
                                            <img width="80px" height="auto" src="images/products/<?= $row['foto'] ?>"
                                                alt="image description">
                                        </td>
                                        <td class="product-details">
                                            <h3 class="title"><?= $row['nama_barang'] ?></h3>
                                        </td>
                                        <td class="product-category"><span
                                                class="categories"><?= $row['nama_jenis'] ?></span>
                                        </td>
                                        <td class="product-category"><span class="categories">
                                                <?= $row['nama_satuan'] ?>
                                            </span>
                                        </td>
                                        <td class="product-category"><span class="categories">
                                                <?= $row['stok'] ?>
                                            </span>
                                        </td>
                                        <td class="action" data-title="Action">
                                            <form action="barang_controller.php" method="POST">
                                                <ul class="list-inline justify-content-center">
                                                    <li class="list-inline-item">
                                                        <a data-toggle="tooltip" data-placement="top" title="view"
                                                            class="view"
                                                            href="index.php?hal=detailbrg&id=<?= $row['id_barang'] ?>">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="edit" data-toggle="tooltip" data-placement="top"
                                                            title="Edit"
                                                            href="index.php?hal=formbrg&idedit=<?= $row['id_barang'] ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        &nbsp;
                                                        <?php 
                                                        if($sesi['role'] != 'Staff'){ ?>
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            data-toggle="tooltip" data-placement="top" name="proses"
                                                            value="hapus"
                                                            onclick="return confirm('Yakin mau hapus barang?')"
                                                            title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        <input type="hidden" name="idx"
                                                            value="<?= $row['id_barang'] ?>">
                                                        <?php  }?>
                                                    </li>
                                                </ul>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </center>
                        </table>
                    </div>
                </center>
            </div>
        </div>
        <div class="row ">
            <div class=" p-3 border bg-danger ms-12">
                <a href=" index.php?hal=dashboard#" class="to-top-right">
                    <h2><i class="fa fa-angle-up"></i></h2>
                </a>
            </div>
        </div>
    </div>
</section>
<?php } 
else{
    echo '<script>alert("Anda Dilarang Mengakses Halaman Ini");history.back();</script>t>';
}
?>