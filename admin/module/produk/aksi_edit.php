<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    // $idKategori = $_GET['idKategori'];

    // $game = $_GET['game'];

    // $namaGambar = $_FILES['gambar']['name'];
    // $ukuran_file = $_FILES['gambar']['size'];
    // $tipe_file = $_FILES['gambar']['type'];
    // $tmp_file = $_FILES['gambar']['tmp_name'];
    // $path = "../../upload/" . $namaGambar;

    $idProduk = $_POST['idProduk'];
    $idKategori = $_POST['idKategori'];

    $jenisKategori = $_POST['jenisKategori'];



   

    $jumlahVoucher = $_POST['jumlahVoucher'];

    $hargaProduk = $_POST['hargaProduk'];

   

    
    if(empty($idKategori)){
        echo "<script>
       alert('Data produk harus Di Masukan');
       window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk=$idProduk';
       </script>";
   }elseif(empty($jenisKategori)){
       echo "<script>
       alert('Data jenis Voucher harus Di Masukan');
       window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk=$idProduk';
       </script>";
   }elseif(empty($jumlahVoucher)){
       echo "<script>
       alert('Data Jumlah Voucher harus Di Masukan');
       window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk=$idProduk';
       </script>";
   }
   elseif(!is_numeric($jumlahVoucher)){
    echo "<script>
    alert('Data Jumlah Voucher Harus Berupa Angka');
    window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk=$idProduk';
    </script>";
   }
   elseif(empty($hargaProduk)){
    echo "<script>
    alert('Data Harga Voucher harus Di Masukan');
    window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk=$idProduk';
    </script>";
   }elseif(!is_numeric($hargaProduk)){
    echo "<script>
    alert('Data Harga Voucher Harus Berupa Angka');
    window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk=$idProduk';
    </script>";
   }else{

      
                $QueryEdit = mysqli_query($koneksi, "UPDATE tbl_pricelist SET id_kategori = '$idKategori', jenis_kategori = '$jenisKategori',jumlah_voucher = '$jumlahVoucher', harga = '$hargaProduk' WHERE id_produk='$idProduk'");
                    if ($QueryEdit) {
                        echo "
                    <script>
                        alert('Data berhasil dirubah');
                        window.location = '$admin_url'+'assets/adminweb.php?module=produk&game='+'$idKategori';
                    </script>";
                    } else {
                        echo "
                    <script>
                        alert('Data gagal dirubah $slide, $idKategori,  $idProduk');
                        window.location = '$admin_url'+'assets/adminweb.php?module=edit_produk&id_produk='+'$idProduk';
                    </script>";
                    }
            }
}
