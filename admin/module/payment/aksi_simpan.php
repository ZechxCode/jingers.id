<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
        include "../../../lib/config.php";
        include "../../../lib/koneksi.php";

     

    

        

        $payment = $_POST['payment'];

        $jenisPayment = $_POST['jenisPayment'];
        $nomorPayment = $_POST['nomorPayment'];



    

       

        



        if (empty($payment)) {

            $error['payment'] = 'Payment kosong!';

        }

        

        if (empty($nomorPayment)) {

            $error['nomorPayment'] = 'nomor payment kosong!';

        } else {

            if (!is_numeric($nomorPayment)) {

                $error['nomorPayment'] = 'nomor payemnt harus angka !';

            }

        }

        if (empty($jenisPayment)) {

            $error['jenisPayment'] = 'Jenis Payment kosong';

        }else{

        
            
                        $QuerySimpan = mysqli_query($koneksi, "INSERT INTO metode_pembayaran (nama_metode, jenis_metode, nomor_metode) VALUES ('$payment','$jenisPayment','$nomorPayment')");

                        if ($QuerySimpan) {

                            echo "

                    <script>

                        alert('Data berhasil disimpan');

                        window.location = '$admin_url'+'assets/adminweb.php?module=payment';

                    </script>";

                        } else {

                            echo "

                    <script>

                        alert('Data gagal disimpan');

                        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';

                    </script>";

                        }

                    

                } 
       

    }



