<!--===================================
=            Store Section            =
====================================-->
<?php
$id = $_REQUEST['id'];
$model = new Barang();
$databrg = $model->getBarang($id);
?>
<section class="section bg-gray">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-lg-12">
                <div class="product-details">
                    <h1 align="center" class="product-title"><?= $databrg['nama_barang'] ?></h1>
                    <div class="product-slider-item my-4" data-image="images/products/<?= $databrg['foto'] ?>">
                        <center><img class="img-fluid w-50" src="images/products/<?= $databrg['foto'] ?>"
                                alt="product-img">
                        </center>
                    </div>
                </div>
                <!-- product slider -->
                <center>
                    <div class="content mt-5 pt-5">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <h3 class="tab-title">Product Description</h3>
                                <p><?= $databrg['ket'] ?></p>
                </center>
                <br>
                <p>Jenis : <?= $databrg['nama_jenis'] ?>
                    <br>
                    Satuan : <?= $databrg['nama_satuan'] ?>
                    <br>
                    Stok : <?= $databrg['stok'] ?>
                </p>
            </div>
        </div>

    </div>
</section>