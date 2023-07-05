<?php

if(isset($_POST['input'])){
    $idKat = $_POST['id_kategori'];
    $playerID = $_POST['playerid'];
    $nominal = $_POST['jumlahVOC'];
    $metodeP = $_POST['metodeP'];
    $nota = $_POST['nota'];

    $QueryID = mysqli_query($koneksi, "SELECT * FROM game_data WHERE id_kategori = '$idKat' AND playerID = '$playerID'");
    $lop = mysqli_num_rows($QueryID);
    $show = mysqli_fetch_array($QueryID);
    if ($playerID == $show['playerID']) {
        
    

?>

<div class="card col-sm-5  shadow  bg-white rounded checkout">
    <form action="aksi/order.php" method="POST" enctype="multipart/form-data">

        <input type="text" class="form-control w-55 wd border-0" id="id_kategori" name="id_kategori"
            value="<?php echo $idKat ?> " hidden>

        <table class="table">
            <thead class="thead-dark rounded">
                <tr>
                    <th colspan="3" class="text-center" scope="col">Checkout || <label class="text-warning">
                            Jingers.id</label></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="ur" scope="row">User ID</th>
                    <td> : </td>
                    <td><?php echo $playerID ?><input type="text" class="form-control w-55 wd border-0" id="PlayerID"
                            placeholder="Player ID" name="PlayerID" value="<?php echo $playerID ?> " hidden></td>

                </tr>

                <?php

            $QueryProduk = mysqli_query($koneksi, "SELECT * FROM game_data where playerID = '$playerID'");
            // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

            if ($show = mysqli_fetch_array($QueryProduk)) {

            ?>

                <tr>
                    <th class="ur" scope="row">Nama Pengguna</th>
                    <td> : </td>
                    <td><?= $show['nama_pengguna']; ?><input type="text" class="form-control w-55 wd border-0"
                            id="namaPengguna" placeholder="namaPengguna" name="namaPengguna"
                            value="<?= $show['nama_pengguna']; ?>" hidden></td>

                </tr>


                <?php } ?>


                <?php

                $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist pl join tbl_produk pr on pr.id_kategori = pl.id_kategori where pl.id_kategori = '$idKat'");
                // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                if ($show = mysqli_fetch_array($QueryProduk)) {

                ?>

                <tr>
                    <th scope="row">Jumlah</th>
                    <td> : </td>
                    <td><?php echo $nominal ?> <?= $show['jenis_kategori']; ?> || <b><?= $show['nama_kategori']; ?></b>
                        <input type="text" class="form-control w-55 wd border-0" id="jumlahVOC" placeholder="jumlahVOC"
                            name="jumlahVOC" value="<?php echo $nominal ?> " hidden></td>

                </tr>

                <?php } ?>

                <?php

                $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist pl INNER JOIN tbl_produk p on pl.id_kategori = p.id_kategori where pl.jumlah_voucher = '$nominal'");
                // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                if ($show = mysqli_fetch_array($QueryProduk)) {

                ?>


                <tr>
                    <th scope="row">Harga</th>
                    <td> : </td>
                    <td>Rp.<?= $show['harga']; ?><input type="text" class="form-control w-55 wd border-0" id="harga"
                            placeholder="harga" name="harga" value="<?= $show['harga']; ?>" hidden></td>

                </tr>

                <?php } ?>


                <?php

                            $QueryProduk = mysqli_query($koneksi, "SELECT * FROM metode_pembayaran where id_metode = '$metodeP'");
                            // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                            if ($show = mysqli_fetch_array($QueryProduk)) {

                            ?>
                <tr>
                    <th scope="row">Metode Pembayaran</th>
                    <td> : </td>
                    <td><?= $show['nama_metode']; ?> - <b><?= $show['nomor_metode']; ?></b> <input type="text"
                            class="form-control w-55 wd border-0" id="metodeP" placeholder="metodeP" name="metodeP"
                            value="<?php echo $metodeP ?> " hidden>
                    </td>

                </tr>

                <?php } ?>

                <tr>
                    <th scope="row">Bukti Transfer</th>
                    <td> : </td>
                    <td>
                        <div class="col-sm-8">

                            <input type="file" name="gambar">
                            <p class="text-muted col-sm-12"> <small class="mt-1 font-italic text-muted"><u>*Upload
                                        Bukti
                                        Transfer</u> </small></p>
                            <p class="text-red"><?php echo isset($error['namaGambar']) ? $error['namaGambar'] : ''; ?>
                            </p>

                        </div>
                    </td>

                </tr>

                <tr>
                    <th scope="row">Email / WA </th>
                    <td> : </td>
                    <td><?php echo $nota ?><input type="text" class="form-control w-55 wd border-0" id="nota"
                            placeholder="nota" name="nota" value="<?php echo $nota ?> " hidden></td>

                </tr>






                <tr>
                    <th class="text-center" colspan="3" scope="row"><input type="submit"
                            class="btn bg-dark text-warning btnC" value="Done It !"></th>


                </tr>
            </tbody>
        </table>



    </form>

</div>
<?php }else{
            echo "

            <script>

                alert('Player ID Tidak Ditemukan');

                window.location = 'detailProduk.php?id_kategori=$idKat';

            </script>";
    }
} ?>