<?php
 include "../../lib/config.php";
 include "../../lib/koneksi.php";

 $usr = $_GET['usr'];

?>
<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen User
</h2>
</section>

    <section class="content">
        <div class="card">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">List User</h3>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telp</th>
                                        <th>Status</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_user where level='$usr'");
                                    while ($row = mysqli_fetch_array($QueryKategori)) {
                                    ?>
                                        <tr>
                                            <td><?= $row['nama_user'];?></td>
                                            <td><?= $row['email_user']; ?></td>
                                            <td><?= $row['noHp_user']; ?></td>
                                            <td><?= $row['level']; ?></td>
                                            <!-- <td>
                                                <div class="btn-group">
                                                    <a href="<?= $admin_url; ?>adminweb.php?module=edit_user&id_user=<?= $row['id_user']; ?>">
                                                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                    </a>
                                                    <a href="<?= $admin_url; ?>module/user/aksi_hapus.php?id_user=<?= $kat['id_user']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                    <button class="btn btn-danger"><i class="fa fa-power-off"></i></button>
                                                </a>
                                                </div>
                                            </td> -->
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