<?php

$model = new User();
$datauser = $model->dataUser();

$sesi = $_SESSION['USER'];
if(isset($sesi) && $sesi['role'] == 'Admin'){
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
                        <h3 class="widget-header">Dashboard User</h3>
                        <table class="table  product-dashboard-table">
                            <center>
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        foreach ($datauser as $row) {
                                        ?>
                                        <td class="product-details">
                                            <h3 class="title"><?= $row['nama'] ?></h3>
                                        </td>
                                        <td class="product-category"><span
                                                class="categories"><?= $row['email'] ?></span>
                                        </td>
                                        <td class="product-category"><span class="categories">
                                                <?= $row['username'] ?>
                                            </span>
                                        </td>
                                        <td class="product-category"><span class="categories">
                                                <?= $row['role'] ?>
                                            </span>
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
                <a href=" index.php?hal=user#" class="to-top-right">
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