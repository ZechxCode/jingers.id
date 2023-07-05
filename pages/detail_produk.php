<?php
include "lib/config.php";
include "lib/koneksi.php";

$idKat = $_GET['id_kategori'];



?>

<div class="row">

  <div class="col-md-6 col-sm-12">
    <div class="container">
      <!-- Content here -->
      <div class="p-4 ml-80 mt-20">
        <?php

                $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk p INNER JOIN tbl_pricelist k on p.id_kategori = k.id_kategori where p.id_kategori = '$idKat' ");
                // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                if ($show = mysqli_fetch_array($QueryProduk)) {

                ?>
        <img src="admin/upload/<?= $show['gambar']; ?>" height="190" width="400">
        <H1 class="mt-25"><?= $show['nama_kategori']; ?></H1>
        <p class="text-justify"><?= $show['deskripsi']; ?></p>



        <?php } ?>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-sm-12">
    <div class="container">
      <!-- Content here -->
      <form action="pembayaran.php" method="post" name="input" enctype="multipart/form-data">



        <div class="form">
          <div class="card p-3 m-3 mr-5 shadow p-3 mb-5 bg-white rounded">
            <div class="form-group row">
              <label for="namaKategori" class="col-sm-6 col-form-label"><b><label class="text-danger">(1)</label>
                  Masukkan
                  Player ID</label></b>
              <div class="col-sm-7">
                <input type="text" class="form-control w-55 wd" id="PlayerID"
                  placeholder="<?= $show['metode_layanan']; ?>" name="playerid" required>
              </div>
            </div>

          </div>

          <div class="card p-4 m-3 mr-5 shadow p-3 mb-5 bg-white rounded">
            <div class="form-group row">
              <label for="namaKategori" class="col-sm-12 col-form-label"><b><label class="text-danger">(2)</label> Pilih
                  Nominal </label></b>
              <?php

                $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori where p.id_kategori = '$idKat' order by jumlah_voucher ASC");
                // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                while ($show = mysqli_fetch_array($QueryProduk)) {

                ?>
              <input type="text" class="form-control w-55 wd border-0" id="id_kategori" name="id_kategori"
                value="<?= $show['id_kategori']; ?> " hidden>
              <div class="col-sm-12 col-md-6">
                <div class="input-group p-1">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" name="jumlahVOC" value="<?= $show['jumlah_voucher']; ?>" required>
                    </div>
                  </div>
                  <input type="text" class="form-control col-5" value="<?= $show['jumlah_voucher']; ?>"
                    aria-label="Text input with radio button" disabled>
                  <input type="text" class="form-control col-5" value="Rp.<?= $show['harga']; ?>"
                    aria-label="Text input with radio button" disabled>
                  <!--show jumlah_voucher -->
                </div>

              </div>

              <?php } ?>




            </div>

          </div>

          <div class="card p-3 m-3 shadow mr-5 p-3 mb-5 bg-white rounded">
            <div class="form-group row">
              <label for="namaKategori" class="col-sm-12 col-form-label"><b><label class="text-danger">(3)</label> Pilih
                  Metode Pembayaran</label></b>
              <?php

                $QueryProduk = mysqli_query($koneksi, "SELECT * FROM metode_pembayaran");
                // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                while ($show = mysqli_fetch_array($QueryProduk)) {

                ?>
              <div class="col-sm-12">
                <div class="input-group p-1">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <input type="radio" name="metodeP" value="<?= $show['id_metode']; ?>" required>
                    </div>
                  </div>
                  <input type="text" class="form-control col-12" value="<?= $show['nama_metode']; ?>"
                    aria-label="Text input with radio button" disabled>
                  <!-- <input type="text" class="form-control col-6" value="<?= $show['nomor_metode']; ?>"
                    aria-label="Text input with radio button" disabled> -->
                  <!--show jumlah_voucher -->
                </div>

              </div>

              <?php } ?>




            </div>



          </div>


          <!-- <div class="card p-3 m-3 shadow mr-5 p-3 bg-white rounded">
            <div class="form-group row">

              <label for="gambar" class="col-sm-12 control-label"><b><label class="text-danger">(4)</label> Upload Bukti
                  Transfer</label></b>

              <div class="col-sm-10">

                <input type="file" name="gambar">
                <p class="text-muted col-sm-12"> <small class="mt-1 font-italic text-muted"><u>*Upload ScreenShot
                      Transfer</u> </small></p>
                <p class="text-red"><?php echo isset($error['namaGambar']) ? $error['namaGambar'] : ''; ?></p>

              </div>

            </div>




          </div> -->




          <div class="card p-3 m-3 shadow mr-5 mt-5 p-3 mb-5 bg-white rounded">
            <div class="form-group row">
              <label for="namaKategori" class="col-sm-7 col-form-label"><b><label class="text-danger">(4)</label>
                  Nota(E-Mail / WA) </label></b>


              <div class="col-sm-10">
                <input type="text" class="form-control w-70 wd m-1" id="dataNota" placeholder="Masukkan Data Nota"
                  name="nota">
              </div>
              <br><small class="col-sm-12 text-muted">*Optional: Jika anda ingin mendapatkan bukti pembayaran atas
                pembelian anda</small>
              <br><small class="col-sm-12 text-muted"> *Format WA: Gunakan kode negara(<b>62</b>).
                Cth:<b>62853xxxxxxxx</b></small>
            </div>
            <input type="submit" name="input" class="btn bg-dark text-warning" value="Order Now">

          </div>
        </div>

      </form>
    </div>
  </div>

</div>