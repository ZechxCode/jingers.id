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

        <form class="" action="../module/payment/aksi_simpan.php" method="post" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Produk</h3>
            </div>
            <div class="card-body">
             

              

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Payment</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="payment" name="payment" placeholder="Nama Metode">
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk">
                </div>
              </div> -->

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Payment</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jenisPayment" name="jenisPayment"
                    placeholder="Jenis Payment">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Payment</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nomorPayment" name="nomorPayment"
                    placeholder="Nomor Pembayaran">
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