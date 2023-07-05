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
                                    <button class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
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
                                                <th>Kirim Nota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_order o join tbl_produk p 
                                    on o.produk = p.id_kategori join metode_pembayaran m on m.id_metode = o.id_metode 
                                    join game_data gd on gd.playerID=o.playerID WHERE o.statusP = 'Done' order by o.id_order DESC");
                                    while ($row = mysqli_fetch_array($QueryKategori)) {
                                    ?>
                                            <tr>
                                                <td>INV-<?= $row['id_order'];?></td>
                                                <td><?= $row['tanggal']; ?></td>
                                                <td><?= $row['nama_kategori']; ?></td>
                                                <td><?= $row['playerID']; ?></td>
                                                <td><?= $row['nama_pengguna']; ?></td>
                                                <td><?= $row['nominal']; ?></td>
                                                <td><?= $row['harga']; ?></td>
                                                <td><?= $row['nama_metode']; ?></td>
                                                <td><img src="../../upload/<?= $row['bukti_tf']; ?>" height="200"
                                                        width="125"></td>
                                                <td><?= $row['dataNota']; ?></td>
                                                <td><?= $row['statusP']; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="https://wa.me/<?= $row['dataNota']; ?>">
                                                            <button class="btn btn-success"><i
                                                                    class="fa fa-whatsapp"></i></button>
                                                        </a>

                                                        <a href="mailto:<?= $row['dataNota']; ?>">
                                                            <button class="btn btn-danger"><i
                                                                    class="fa fa-envelope"></i></button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="box-footer clearfix">

                                    <a class="btn btn-primary text-white" data-toggle="modal"
                                        data-target="#laporan"><i class="fa fa-file-excel-o mr-3"></i>Laporan</a>

                                    <a class="btn btn-primary text-white pull-right" data-toggle="modal"
                                        data-target="#nota"><i class="fa fa-print mr-2"></i>Cetak Nota</a>


                                    <!-- <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View
                                            All
                                            Orders</a> -->

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<div class="modal fade" id="laporan">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Laporan Pemesanan</h4>

            </div>

            <form action="../module/order/aksi_laporan.php" method="post">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Tanggal Mulai</label>

                                <div class="input-group">

                                    <div class="input-group-addon">

                                        <i class="fa fa-calendar"></i>

                                    </div>

                                    <input type="date" name="mulai" class="form-control">

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Tanggal Selesai</label>

                                <div class="input-group">

                                    <div class="input-group-addon">

                                        <i class="fa fa-calendar"></i>

                                    </div>

                                    <input type="date" name="selesai" class="form-control">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </div>

</div>

<div class="modal fade" id="nota">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Cetak Nota</h4>

            </div>

            <form action="../module/order/nota.php" method="post">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <label><b>INVOICE</b></label>

                                <div class="input-group">

                                  

                                    <label class="col-md-2">INV   - </label>  <input type="text" name="invoice" class="form h-85 col-md-6">

                                </div>

                            </div>

                        </div>

                        

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>

                    <button type="submit" formtarget="_blank" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </div>

</div>