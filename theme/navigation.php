<?php
$sesi = $_SESSION['USER'];
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.jpg" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($hal == 'home') echo 'active'; ?>"
                                    href="index.php?hal=home">Home</a>
                            </li>

                            <!--<li class="nav-item dropdown dropdown-slide @@pages">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages <span><i class="fa fa-angle-down"></i></span>
                                </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item @@about" href="about-us.html">About Us</a></li>
                                <li><a class="dropdown-item @@contact" href="contact-us.html">Contact Us</a>
                                </li>
                                <li><a class="dropdown-item @@profile" href="user-profile.html">User Profile</a>
                                </li>
                                <li><a class="dropdown-item @@404" href="404.html">404 Page</a></li>
                                <li><a class="dropdown-item @@package" href="package.html">Package</a></li>
                                <li><a class="dropdown-item @@singlePage" href="single.html">Single Page</a>
                                </li>
                                <li><a class="dropdown-item @@store" href="store.html">Store Single</a></li>
                                <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item @@singleBlog" href="single-blog.html">Blog
                                        Details</a></li>
                                <li><a class="dropdown-item @@terms" href="terms-condition.html">Terms &amp;
                                        Conditions</a></li>
                            </ul>
                            </li>-->
                            <li class="nav-item dropdown dropdown-slide @@listing">
                                <a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    List Barang <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item @@category" href="index.php?hal=barangmsk">Barang
                                            Masuk</a>
                                    </li>
                                    <li><a class="dropdown-item @@listView" href="index.php?hal=barangklr">Barang
                                            Keluar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php
                        if (!isset($sesi)) {
                        ?>
                        <ul class="navbar-nav ml-auto mt-10">
                            <li class="nav-item">
                                <a class="nav-link login-button" href="login.php">Login</a>
                            </li>
                            <?php } else {
                            ?>
                        </ul>
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($hal == 'dashboard') echo 'active'; ?>"
                                    href="index.php?hal=dashboard">Dashboard Barang</a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide @@listing">
                                <a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <b> <?= $sesi['nama'] ?> </b><span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <ul class="dropdown-menu">
                                    <?php 
                                        if($sesi['role'] == 'Admin'){
                                        ?>
                                    <li><a class="dropdown-item @@listView" href="index.php?hal=user">Data User</a>
                                    </li>
                                    <?php 
                                        } ?>
                                    <li><a class="dropdown-item @@listView" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            <li>
                                <a class="nav-link text-white add-button" href="index.php?hal=formbrg"><i
                                        class="fa fa-plus-circle"></i> Tambah Barang</a>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
            </div>
            </nav>
        </div>
    </div>
    </div>
</header>