<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    $_POST = $_SESSION['post'];
    unset($_SESSION['error']);
    unset($_SESSION['post']);
}

$idPayment = $_GET['id_metode'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM `metode_pembayaran` WHERE id_metode = $idPayment");
$row = mysqli_fetch_array($QueryEdit);

$payment = $row['nama_metode'];

$jenisPayment = $row['jenis_metode'];
$nomorPayment = $row['nomor_metode'];
        

        
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
                    <form class="form-horizontal" action="../module/payment/aksi_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_metode" value="<?= $idPayment; ?>">
                        <div class="box-body">
                            
                            <div class="form-group">
                                <label for="jenis_kategori" class="col-sm-2 control-label">Payment</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="payment" value="<?= $payment; ?>">
                                    <p class="text-red"><?php echo isset($error['je']) ? $error['nama_metode'] : ''; ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kategori" class="col-sm-2 control-label">Jenis Payment</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenisPayment" value="<?= $jenisPayment; ?>">
                                    <p class="text-red"><?php echo isset($error['je']) ? $error['jenis_metode'] : ''; ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kategori" class="col-sm-2 control-label">Nomor Payment</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomorPayment" value="<?= $nomorPayment; ?>">
                                    <p class="text-red"><?php echo isset($error['je']) ? $error['nomor_metode'] : ''; ?></p>
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