<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";

// $idPayment = $_GET['pay'];
?>
<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Price Management
</h2>
</section>

    <section class="content">
        <div class="card">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pricelist</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <!-- <th>Produk</th>
                                        <th>Deskripsi</th> -->
                                        <th>Payment</th>
                                        <th>Jenis Payment</th>
                                        <th>Nomor Payment</th>
                                        <!-- <th>Gambar</th> -->
                                     
                                        <th style="width: 110px;">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $kueriKategori = mysqli_query($koneksi, "SELECT * FROM metode_pembayaran");
                                while ($kat = mysqli_fetch_array($kueriKategori)) {
                                ?>
                                    <tr>
                                   
                                        <td><?= $kat['nama_metode']; ?></td>
                                        <td><?= $kat['jenis_metode']; ?></td>
                                        <td><?= $kat['nomor_metode']; ?></td>
                                     
                                        

                                        
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= $admin_url; ?>assets/adminweb.php?module=edit_payment&id_metode=<?= $kat['id_metode']; ?>">
                                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="<?= $admin_url; ?>module/payment/aksi_hapus.php?id_metode=<?= $kat['id_metode']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                    <button class="btn btn-danger"><i class="fa fa-power-off"></i></button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <a href="adminweb.php?module=tambah_payment" class="btn btn-primary ml-1 btn-flat pull-left">Tambah Produk</a>
                        <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>