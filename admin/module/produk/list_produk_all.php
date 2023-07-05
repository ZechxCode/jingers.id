<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";



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
                                        <th>Produk</th>
                                        <th>Jenis Layanan</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <!-- <th>Gambar</th> -->
                                     
                                        <th style="width: 110px;">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori  order by jumlah_voucher ASC");
                                while ($kat = mysqli_fetch_array($kueriKategori)) {
                                ?>
                                    <tr>
                                        <!-- <td><?= $kat['nama_produk']; ?></td>
                                        <td><?= $kat['deskripsi']; ?></td> -->
                                        <td><?= $kat['nama_kategori']; ?></td>
                                        <td><?= $kat['jenis_kategori']; ?></td>
                                        <td><?= $kat['jumlah_voucher']; ?></td>
                                        <td><?= $kat['harga']; ?></td>
                                        <!-- <td><img src="../../upload/<?= $kat['gambar']; ?>" height="80" width="120"></td> -->
                                        

                                        
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= $admin_url; ?>assets/adminweb.php?module=edit_produk&id_produk=<?= $kat['id_produk']; ?>">
                                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="<?= $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?= $kat['id_produk']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
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
                        <a href="adminweb.php?module=tambah_produk" class="btn btn-primary ml-1 btn-flat pull-left">Tambah Produk</a>
                        <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>