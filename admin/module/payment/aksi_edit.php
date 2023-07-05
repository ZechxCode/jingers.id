<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idPayment = $_POST['id_metode'];

    // $game = $_GET['game'];

    // $namaGambar = $_FILES['gambar']['name'];
    // $ukuran_file = $_FILES['gambar']['size'];
    // $tipe_file = $_FILES['gambar']['type'];
    // $tmp_file = $_FILES['gambar']['tmp_name'];
    // $path = "../../upload/" . $namaGambar;

         $payment = $_POST['payment'];

        $jenisPayment = $_POST['jenisPayment'];
        $nomorPayment = $_POST['nomorPayment'];

   

    
    if (empty($payment)) {

        $error['payment'] = 'Payment kosong';

    }

    
    else {

        if (!is_numeric($nomorPayment)) {

            $error['nomorPayment'] = 'Nomor Payment harus berupa angka';

        }

    }

    
    if (empty($jenisPayment)) {

        $error['jenisPayment'] = 'Jenis Payment kosong';

    } else{

      
                $QueryEdit = mysqli_query($koneksi, "UPDATE metode_pembayaran SET nama_metode = '$payment', jenis_metode = '$jenisPayment',nomor_metode = '$nomorPayment' WHERE id_metode='$idPayment'");
                    if ($QueryEdit) {
                        echo "
                    <script>
                        alert('Data berhasil dirubah');
                        window.location = '$admin_url'+'assets/adminweb.php?module=payment';
                    </script>";
                    } else {
                        echo "
                    <script>
                        alert('Data gagal dirubah $payment, $jenisPayment,  $nomorPayment');
                        window.location = '$admin_url'+'assets/adminweb.php?module=edit_payment';
                    </script>";
                    }
            }
}
