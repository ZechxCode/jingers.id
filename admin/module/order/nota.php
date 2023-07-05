<?php

    session_start();

    include "../../../lib/koneksi.php";

    include "../../../lib/config.php";

    $inv = $_POST['invoice'];

    $QueryID = mysqli_query($koneksi, "SELECT * FROM tbl_order WHERE id_order='$inv'");
    $show = mysqli_fetch_array($QueryID);
    $idKat = $show['produk'];
    $metodeP = $show['id_metode'];
    $status = $show['statusP'];
    $ident = $show['dataNota'];
        
    

       
     
    

    


?>

<script>
    var iteration = true;
    var time = new Date();
    var delay = 2000; 

    while (iteration) {
        if (time.getTime() + 5000 < new Date().getTime()) {
            iteration = false;
        }
    }

    window.onload = function () {
        $("#cetakBtn").click();
    }
</script>


<!-- <script>
window.onload=function(){
$("#cetakBtn").click();
}
</script> -->


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Voucher Shop | Jingers.id</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/css/flaticon.css">
    <link rel="stylesheet" href="../../../assets/css/slicknav.css">
    <link rel="stylesheet" href="../../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/css/slick.css">
    <link rel="stylesheet" href="../../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
</head>



<div class="card col-sm-5  shadow  bg-white rounded checkout">
    <form>



        <table class="table">
            <thead class="thead-dark rounded">
                <tr>
                    <th colspan="3" class="text-center" scope="col">NOTA || <label class="text-warning">
                            Jingers.id</label></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="ur" scope="row">Tanggal Transaksi</th>
                    <td> : </td>
                    <td><?= $show['tanggal']; ?></td>

                </tr>





                <tr>
                    <th class="ur" scope="row">User ID</th>
                    <td> : </td>
                    <td><?= $show['playerID']; ?></td>

                </tr>







                <?php

                $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist pl join tbl_produk pr on pr.id_kategori = pl.id_kategori where pl.id_kategori = '$idKat'");
                // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                if ($side = mysqli_fetch_array($QueryProduk)) {

                ?>

                <tr>
                    <th scope="row">Jumlah</th>
                    <td> : </td>
                    <td><?= $show['nominal']; ?> <?= $side['jenis_kategori']; ?> ||
                        <b><?= $side['nama_kategori']; ?></b></td>

                </tr>

                <?php } ?>




                <tr>
                    <th scope="row">Harga</th>
                    <td> : </td>
                    <td>Rp.<?= $show['harga']; ?></td>

                </tr>




                <?php

                            $QueryProduk = mysqli_query($koneksi, "SELECT * FROM metode_pembayaran where id_metode = '$metodeP'");
                            // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                            if ($show = mysqli_fetch_array($QueryProduk)) {

                            ?>
                <tr>
                    <th scope="row">Metode Pembayaran</th>
                    <td> : </td>
                    <td><?= $show['nama_metode']; ?> - <b><?= $show['nomor_metode']; ?></b>
                    </td>

                </tr>

                <?php } ?>





                <tr>
                    <th scope="row">Email / WA </th>
                    <td> : </td>
                    <td><?php echo $ident ?></td>

                </tr>


                <tr>
                    <th scope="row">STATUS PESANAN</th>
                    <td> : </td>
                    <td><?php echo $status ?> || Terimakasih :)</td>

                </tr>



                <tr>
                    <th class="text-center" colspan="3" scope="row">
                        <input type="submit" id="cetakBtn" class="btn bg-dark text-warning btnC"
                            value="IG : @Jingers.id" onclick="window.print()"></th>


                </tr>
            </tbody>
        </table>



    </form>

</div>

<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->

<script src="../../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="../../../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../../../assets/js/popper.min.js"></script>
<script src="../../../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../../../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../../../assets/js/owl.carousel.min.js"></script>
<script src="../../../assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="../../../assets/js/wow.min.js"></script>
<script src="../../../assets/js/animated.headline.js"></script>
<script src="../../../assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="../../../assets/js/jquery.scrollUp.min.js"></script>
<script src="../../../assets/js/jquery.nice-select.min.js"></script>
<script src="../../../assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="../../../assets/js/contact.js"></script>
<script src="../../../assets/js/jquery.form.js"></script>
<script src="../../../assets/js/jquery.validate.min.js"></script>
<script src="../../../assets/js/mail-script.js"></script>
<script src="../../../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="../../../assets/js/plugins.js"></script>
<script src="../../../assets/js/main.js"></script>

</body>

</html>