<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";


;
?>
   <!-- Content Wrapper. Contains page content -->
    <div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Produk
</h2>
</section>
      <section class="content">

        <form class="" action="../module/produk/aksi_simpan.php" method="post" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Produk</h3>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Produk</label>
                <div class="col-sm-10">
                  <select class="form-control" name="idKategori" id="">
                    <?php
                      include "../../lib/koneksi.php";
                      $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
                      while ($kat = mysqli_fetch_array($kueriKategori)) {
                          ?>

                    <option
                      value="<?php echo $kat['id_kategori']; ?>">
                      <?php echo $kat['nama_kategori']; ?>
                    </option>

                    <?php
                      } ?>
                  </select>
                </div>
              </div>

              

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Voucher</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenisKategori" name="jenisKategori" placeholder="Jenis Voucher">
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk">
                </div>
              </div> -->

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jumlahVoucher" name="jumlahVoucher"
                    placeholder="Jumlah Voucher">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="hargaProduk" name="hargaProduk"
                    placeholder="Harga Voucher">
                </div>
              </div>

              

              <!-- <div class="form-group row">

                                <label for="gambar" class="col-sm-2 control-label">Gambar</label>

                                <div class="col-sm-10">

                                    <input type="file" name="gambar">

                                    <p class="text-red"><?php echo isset($error['namaGambar']) ? $error['namaGambar'] : ''; ?></p>

                                </div>

                            </div> -->
              <!-- <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Produk</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk"
                    placeholder="Deskripsi produk">
                </div>
              </div> -->
              
             

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
          </div>
        </form>