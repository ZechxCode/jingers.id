<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";
    
    // $idKategori = $_GET['idKategori'];
    $idProduk = $_GET['id_produk'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_pricelist WHERE id_produk = '$idProduk'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '$admin_url'+'assets/adminweb.php?module=produkall';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'assets/adminweb.php?module=produkall';
        </script>";
    }
}
