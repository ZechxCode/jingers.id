<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    $_POST = $_SESSION['post'];
    unset($_SESSION['error']);
    unset($_SESSION['post']);
}

$idProduk = $_GET['id_produk'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM `tbl_pricelist` WHERE id_produk = $idProduk");
$row = mysqli_fetch_array($QueryEdit);
$idKategori = $row['id_kategori'];

        $jenisKategori = $row['jenis_kategori'];

     

     

        $jumlahVoucher = $row['jumlah_voucher'];

        $hargaProduk = $row['harga'];
        

        
?>
<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Produk
</h2>
</section>

    <section class="content">
        <div class="card">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Produk</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <form class="form-horizontal" action="../module/produk/aksi_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="idProduk" value="<?= $idProduk; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="kategori" class="col-sm-2 control-label">Layanan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="idKategori">
                                        <option value="">Pilih Kategori</option>
                                        <?php
                                        include "../../lib/koneksi.php";
                                        $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
                                        while ($kategori = mysqli_fetch_array($kueriKategori)) {
                                        ?>
                                            <option value="<?= $kategori['id_kategori']; ?>" <?= $kategori['id_kategori'] == $idKategori ? 'selected="selected"' : ''?>><?= $kategori['nama_kategori']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="jenis_kategori" class="col-sm-2 control-label">Jenis Layanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenisKategori" value="<?= $jenisKategori; ?>">
                                    <p class="text-red"><?php echo isset($error['jenis_kategori']) ? $error['jenis_kategori'] : ''; ?></p>
                                </div>
                            </div>
                            
                            <!-- <div class="form-group">
                                <label for="nama_barang" class="col-sm-2 control-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="namaProduk" value="<?= $namaProduk; ?>">
                                    <p class="text-red"><?php echo isset($error['nama_produk']) ? $error['nama_produk'] : ''; ?></p>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label for="jumlah_voucher" class="col-sm-2 control-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jumlahVoucher" value="<?= $jumlahVoucher; ?>">
                                    <p class="text-red"><?php echo isset($error['jumlah_voucher']) ? $error['jumlah_voucher'] : ''; ?></p>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar">
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="deskripsi_barang" class="col-sm-2 control-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="deskripsiProduk"><?= $deskripsiProduk; ?></textarea>
                                    <p class="text-red"><?php echo isset($error['deskripsi_barang']) ? $error['deskripsi_barang'] : ''; ?></p>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="harga" class="col-sm-2 control-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hargaProduk" placeholder="Harga Produk" value="<?= $hargaProduk; ?>">
                                    <p class="text-red"><?php echo isset($error['harga']) ? $error['harga'] : ''; ?></p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>