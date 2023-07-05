<?php

session_start();

include "../../../lib/config.php";

include "../../../lib/koneksi.php";



$mulai = date('Y-m-d', strtotime($_POST['mulai']));

$selesai = date('Y-m-d', strtotime($_POST['selesai']));

?>



<?php

header("Content-type: application/octet-stream");

header("Pragma: no-cache");

header("Expires: 0");

header("Content-Disposition: attachment; filename=Laporan Pemesanan.xls");

?>







<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="content-wrapper">
            <section class="content-header">
                <h2>
                    Laporan Orderan
                </h2>
            </section>

            <section class="content">
                <div class="card">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">List Order</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table border = 1 class="table mx-auto p-5">
                                        <thead>
                                            <tr>
                                                <!-- <th>ID User</th> -->
                                                <th>Invoice</th>
                                                <th>Tanggal</th>
                                                <th>Produk</th>
                                                <th>Player ID</th>
                                                <th>Nominal</th>
                                                <th>Metode Pembayaran</th>

                                                <th>E-Mail / WA</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_order o join tbl_produk p on o.produk = p.id_kategori join metode_pembayaran m on m.id_metode = o.id_metode WHERE O.tanggal BETWEEN '$mulai' AND '$selesai' AND statusP = 'Done' ");
                                    while ($row = mysqli_fetch_array($QueryKategori)) {
                                    ?>
                                            <tr>
                                                <td>INV-<?= $row['id_order'];?></td>
                                                <td><?= $row['tanggal']; ?></td>
                                                <td><?= $row['nama_kategori']; ?></td>
                                                <td><?= $row['playerID']; ?></td>
                                                <td><?= $row['nominal']; ?></td>
                                                <td><?= $row['nama_metode']; ?></td>

                                                <td><?= $row['dataNota']; ?></td>
                                                <td><?= $row['statusP']; ?></td>

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