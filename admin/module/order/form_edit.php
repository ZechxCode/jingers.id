<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    $_POST = $_SESSION['post'];
    unset($_SESSION['error']);
    unset($_SESSION['post']);
}

$idOrder = $_GET['id_order'];


        

        
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
                    <form class="form-horizontal" action="../module/order/aksi_edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_order" value="<?php echo $idOrder; ?>">
                        <input type="hidden" class="form-control" name="idProduk" value="<?= $idProduk; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="kategori" class="col-sm-2 control-label">Layanan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                        
                                        <?php
                                        include "../../lib/koneksi.php";
                                        $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_order");
                                        if ($kategori = mysqli_fetch_array($kueriKategori)) {
                                        ?>
                                            <option value="<?= $kategori['statusP']; ?>" <?= $kategori['id_order'] == $idOrder ? 'selected="selected"' : ''?>><?= $kategori['statusP']; ?></option>
                                        <?php } ?>
                                        <option value="Proses">Proses</option>
                                        <option value="Done">Done</option>
                                        <option value="Batal">Batal</option>
                                    </select>
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