<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";



?>
<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="content-wrapper">
            <section class="content-header">
                <h2>
                    Manajemen Order
                </h2>
            </section>

            <section class="content">
                <div class="card">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">List Order</h3>
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
                                                <!-- <th>ID User</th> -->
                                                <th>Invoice</th>
                                                <th>Tanggal</th>
                                                <th>Produk</th>
                                                <th>Player ID</th>
                                                <th>Nama Pengguna</th>
                                                <th>Nominal</th>
                                                <th>Harga</th>
                                                <th>Metode Pembayaran</th>
                                                <th>Bukti Transfer</th>
                                                <th>E-Mail / WA</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_order o join tbl_produk p 
                                    on o.produk = p.id_kategori join metode_pembayaran m on m.id_metode = o.id_metode 
                                    join game_data gd on gd.playerID=o.playerID WHERE o.statusP = 'Proses'");
                                            while ($row = mysqli_fetch_array($QueryKategori)) {
                                            ?>
                                                <tr>
                                                    <td>INV-<?= $row['id_order']; ?></td>
                                                    <td><?= $row['tanggal']; ?></td>
                                                    <td><?= $row['nama_kategori']; ?></td>
                                                    <td><?= $row['playerID']; ?></td>
                                                    <td><?= $row['nama_pengguna']; ?></td>
                                                    <td><?= $row['nominal']; ?></td>
                                                    <td><?= $row['harga']; ?></td>
                                                    <td><?= $row['nama_metode']; ?></td>
                                                    <td><img src="../../upload/<?= $row['bukti_tf']; ?>" height="200" width="125"></td>
                                                    <td><?= $row['dataNota']; ?></td>
                                                    <td><?= $row['statusP']; ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="<?= $admin_url; ?>assets/adminweb.php?module=edit_order&id_order=<?= $row['id_order']; ?>">
                                                                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                            </a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>