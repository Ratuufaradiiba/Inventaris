<?php
$obj_jenis= new Jenis();
$obj_satuan= new Satuan();
$obj_barang= new Barang();

$datajenis = $obj_jenis->dataJenis();
$datasatuan = $obj_satuan->dataSatuan();

$idedit = $_REQUEST['idedit'];
$brg = !empty($idedit) ? $obj_barang->getBarang($idedit) : array();
?>
<section class="advt-post bg-gray py-5">
    <div class="container">
        <form action="barang_controller.php" method="POST">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Input Barang</h3>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Nama Barang</h6>
                        <input type="text" name="nama" id="nama" class="form-control bg-white"
                            placeholder="Masukkan Nama Barang" value="<?= $brg['nama_barang']?>">
                        <h6 class="font-weight-bold pt-4 pb-1">Stok</h6>
                        <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white">
                            <input type="text" name="stok" id="stok" class="form-control bg-white"
                                placeholder="Isi Stok" value="<?= $brg['stok']?>">
                        </div>

                        <!--h6 class="font-weight-bold pt-4 pb-1">Ad Type:</!--h6>
                        <div-- class="row px-3">
                            <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white">
                                <input type="radio" name="itemName" value="personal" id="personal" >
                                <label for="personal" class="py-2">Personal</label>
                            </div>
                            <div class="col-lg-4 mr-lg-4 my-2 pt-2 pb-1 rounded bg-white ">
                                <input type="radio" name="itemName" value="business" id="business" >
                                <label for="business" class="py-2">Business</label>
                            </div>
                        </div-->
                        <h6 class="font-weight-bold pt-4 pb-1">Keterangan :</h6>
                        <textarea name="ket" id="ket" class="form-control bg-white" rows="7"
                            placeholder="Masukan Detail Keterangan Produk"><?= $brg['ket']?></textarea>
                    </div>
                    <div class=" col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Masukan Jenis Barang :</h6>
                        <select name="jenis" class="form-control w-100 bg-white">
                            <option value="">Pilih Jenis</option>
                            <?php 
                            foreach($datajenis as $jen){
                               // $sel1 = $brg['id_jenis'] == $jen['id_jenis'] ? 'selected' : '';
                               //<?= $sel1 
                            ?>
                            <option value="<?= $jen['id_jenis'] ?>"><?= $jen['nama_jenis'] ?></option>
                            <?php } ?>
                        </select>
                        <div class=" price">
                            <h6 class="font-weight-bold pt-4 pb-1">Masukan Satuan :</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 rounded my-2  pt-2 pb-1 bg-white">
                                    <?php 
                                    foreach($datasatuan as $sat){?>
                                    <input type="radio" name="satuan" value=" <?= $sat['id_satuan'] ?>"
                                        id="<?= $sat['id_satuan'] ?>">
                                    <label for="unit" class="py-2"><?= $sat['nama_satuan'] ?> &nbsp;</label>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="choose-file text-center my-4 py-4 rounded bg-white">
                            <label for="file-upload">
                                <span class="d-block font-weight-bold text-dark">Drop files foto untuk upload</span>
                                <span class="d-block">or</span>
                                <span class="d-block btn bg-primary text-white my-3 select-files">Select
                                    files</span>
                                <span class="d-block">Maximum upload file size: 500 KB</span>
                                <input type="file" class="form-control-file d-none" id="file-upload" name="foto">
                            </label>
                        </div>
                    </div>

                </div>

            </fieldset>
            <div class="checkbox d-inline-flex">
                <input type="checkbox" id="terms-&-condition" class="mt-1">
                <label for="terms-&-condition" class="ml-2">By click you must agree with our
                    <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting
                            Rules.</a></span>
                </label>
            </div>
            <center>
                <button type="submit" name="proses" value="batal" class="btn btn-danger d-block mt-2">Batal</button>
                <?php 
                if(empty($idedit)){
                ?>
                <button type="submit" name="proses" value="simpan" class="btn btn-primary d-block mt-2">Simpan</button>
                <?php }
                else{ ?>
                <button type="submit" name="proses" value="ubah" class="btn btn-success d-block mt-2">Ubah</button>
                <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?>

            </center>
        </form>
    </div>
</section>