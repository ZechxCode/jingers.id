    <!-- Content Wrapper. Contains page content -->
    <div class="content-body">

      <div class="container-fluid mt-3">
        <div class="content-wrapper">
          <section class="content-header">
            <h2>
              Manajemen Kategori
            </h2>
          </section>
          <section class="content">

            <form action="../module/kategori/aksi_simpan.php" method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">From Tambah Kategori</h3>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="namaKategori" class="col-sm-2 col-form-label">Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namaKategori" placeholder="Produk"
                        name="namaKategori">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jenisKategori" class="col-sm-2 col-form-label">Jenis Layanan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jenisKategori" placeholder="Jenis Layanan"
                        name="jenisKategori">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="metodeLayanan" class="col-sm-2 col-form-label">Metode Layanan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="metodeLayanan" placeholder="Metode Layanan"
                        name="metodeLayanan">
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="gambar" placeholder="gambar" name="gambar">
                </div>
              </div> -->


                  <div class="form-group row">

                    <label for="gambar" class="col-sm-2 control-label">Gambar</label>

                    <div class="col-sm-10">

                      <input type="file" name="gambar">

                      <p class="text-red"><?php echo isset($error['namaGambar']) ? $error['namaGambar'] : ''; ?></p>

                    </div>

                  </div>

                  <div class="form-group row">
                    <label for="namaKategori" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="deskripsiProduk" placeholder="Deskripsi Produk"
                        name="deskripsiProduk">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Slide</label>
                    <div class="col-sm-10">
                      <div class="radio">
                        <label for="">
                          <input type="radio" name="slide" id="slide" value="Y"> Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label for="">
                          <input type="radio" name="slide" id="slide" value="N"> Tidak
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Produk Rekomendasi</label>
                    <div class="col-sm-10">
                      <div class="radio">
                        <label for="">
                          <input type="radio" name="rekomendasi" id="rekomendasi" value="Y"> Ya
                        </label>
                      </div>
                      <div class="radio">
                        <label for="">
                          <input type="radio" name="rekomendasi" id="rekomendasi" value="N"> Tidak
                        </label>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                </div>
              </div>
            </form>