<?php
$model = new Barangmsk();
$databrg = $model->dataBarangmsk();
?>
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-result bg-gray">
                    <h2>Results For "Barang Masuk"</h2>
                    <p>123 Results on <script>
                        var CurrentDate = new Date()
                        document.write(CurrentDate)
                        </script>.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section-sm">
        <div class="container">
            <div class="ad-listing-list mt-20">
                <?php 
                    foreach ($databrg as $row){ ?>
                <div class="row p-lg-3 p-sm-5 p-4">
                    <div class="col-lg-4 align-self-center">
                        <a href="#!">
                            <img src="images/products/<?= $row['foto'] ?>" class="img-fluid" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-10">
                                <div class="ad-listing-content">
                                    <div>
                                        <a href="#" class="font-weight-bold"><?= $row['nama_barang'] ?></a>
                                    </div>
                                    <ul class="list-inline mt-2 mb-3">
                                        <li class="list-inline-item">
                                            <a href="category.html">
                                                <i class="fa fa-folder-open-o"></i> <?= $row['nama_jenis'] ?></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="category.htm"><i class="fa fa-calendar"></i>
                                                <?= $row['tgl_masuk'] ?></a>
                                        </li>
                                    </ul>
                                    <p class="pr-5">
                                        Jumlah Masuk : <?= $row['jumlah_masuk'] ?>
                                        <br>
                                        Keterangan : <?= $row['ket'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="product-ratings float-lg-right pb-3">
                                    <ul class="list-inline">
                                        <li class="list-inline-item selected">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="list-inline-item selected">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="list-inline-item selected">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="list-inline-item selected">
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <br>
            <div class="row ">
                <div class=" p-3 border bg-danger ms-12">
                    <a href=" index.php?hal=barangmsk#" class="to-top-right">
                        <h2><i class="fa fa-angle-up"></i></h2>
                    </a>
                </div>
            </div>
        </div>
    </section>