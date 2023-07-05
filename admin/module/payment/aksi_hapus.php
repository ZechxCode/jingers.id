<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";
    
    $idPayment = $_GET['id_metode'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM metode_pembayaran WHERE id_metode = '$idPayment'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '$admin_url'+'assets/adminweb.php?module=payment';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'assets/adminweb.php?module=produkall';
        </script>";
    }
}
