<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";

$idKategori = $_GET['id_kategori'];
$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_kategori='$idKategori'");
$hasilQuery = mysqli_fetch_array($queryEdit);
$namaKategori = $hasilQuery['nama_kategori'];
$jenisKategori = $hasilQuery['jenis_kategori'];
$metodeLayanan = $hasilQuery['metode_layanan'];
$gambar = $hasilQuery['gambar'];
$deskripsi     = $hasilQuery['deskripsi'];
$slide         = $hasilQuery['slide'];
$rekomendasi   = $hasilQuery['rekomendasi'];


?>

<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Kategori
</h2>
</section>
      <section class="content">

<form action="../module/kategori/aksi_edit.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_kategori" value="<?php echo $idKategori; ?>">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">From Edit Kategori</h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="namaKategori" class="col-sm-2 col-form-label">Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaKategori" placeholder="Nama Game" name="namaKategori" value="<?php echo $namaKategori; ?>">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="namaKategori" class="col-sm-2 col-form-label">Jenis Pelayanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenisKategori" placeholder="Jenis Layanan Produk" name="jenisKategori" value="<?php echo $jenisKategori; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="namaKategori" class="col-sm-2 col-form-label">Metode Pelayanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="metodeLayanan" placeholder="Metode Pelayanan Produk" name="metodeLayanan" value="<?php echo $metodeLayanan; ?>">
                </div>
            </div>

            <div class="form-group row">
                                <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar" value="<?php echo $gambar; ?>">
                                </div>
                            </div>

            <div class="form-group row">
                <label for="namaKategori" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi Produk" name="deskripsiProduk" value="<?php echo $deskripsi; ?>">
                </div>
            </div>

            <div class="form-group">
                                <label for="slide" class="col-sm-2 control-label">Slide</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="slide" value="Y" <?= $slide == "Y" ? 'checked' : '' ?>>Ya
                                        </label>
                                        <label>
                                        <input type="radio" name="slide" value="N" <?= $slide == "N" ? 'checked' : '' ?>>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rekomendasi" class="col-sm-2 control-label">Rekomendasi</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="rekomendasi" value="Y" <?= $rekomendasi == "Y" ? 'checked' : '' ?>>Ya
                                        </label>
                                        <label>
                                        <input type="radio" name="rekomendasi" value="N" <?= $rekomendasi == "N" ? 'checked' : '' ?>>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </div>
    </div>
</form>

