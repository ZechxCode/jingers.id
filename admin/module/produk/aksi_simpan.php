<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
        include "../../../lib/config.php";
        include "../../../lib/koneksi.php";

        // $game = $_GET['game'];

    



        $idKategori = $_POST['idKategori'];

        $jenisKategori = $_POST['jenisKategori'];



    

        $jumlahVoucher = $_POST['jumlahVoucher'];

        $hargaProduk = $_POST['hargaProduk'];

        
        if(empty($idKategori)){
            echo "<script>
           alert('Data produk harus Di Masukan');
           window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';
           </script>";
       }elseif(empty($jenisKategori)){
           echo "<script>
           alert('Data jenis Voucher harus Di Masukan');
           window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';
           </script>";
       }elseif(empty($jumlahVoucher)){
           echo "<script>
           alert('Data Jumlah Voucher harus Di Masukan');
           window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';
           </script>";
       }
       elseif(!is_numeric($jumlahVoucher)){
        echo "<script>
        alert('Data Jumlah Voucher Harus Berupa Angka');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';
        </script>";
       }
       elseif(empty($hargaProduk)){
        echo "<script>
        alert('Data Harga Voucher harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';
        </script>";
       }elseif(!is_numeric($hargaProduk)){
        echo "<script>
        alert('Data Harga Voucher Harus Berupa Angka');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_produk';
        </script>";
       }else{

        
            
                        $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_pricelist (id_kategori, jenis_kategori, jumlah_voucher, harga) VALUES ('$idKategori','$jenisKategori','$jumlahVoucher','$hargaProduk')");

                        if ($QuerySimpan) {

                            echo "

                    <script>

                        alert('Data berhasil disimpan');

                        window.location = '$admin_url'+'assets/adminweb.php?module=produk&game='+'$idKategori';

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



