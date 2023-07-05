<?php
session_start();

if (empty($_SESSION['username']) and empty([$_SESSION['password']])) {
    echo '<script>
    alert("silahkan login terlebih dahulu");
    window.location="../../index.php"
    </script>';
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    if ($_POST) {

        $namaGambar = $_FILES['gambar']['name'];

        $ukuran_file = $_FILES['gambar']['size'];

        $tipe_file = $_FILES['gambar']['type'];

        $tmp_file = $_FILES['gambar']['tmp_name'];

        $path = "../../upload/" . $namaGambar;



    $namaKategori  = $_POST['namaKategori'];
    $jenisKategori = $_POST['jenisKategori'];
    $metodeLayanan = $_POST['metodeLayanan'];
    $deskripsi     = $_POST['deskripsiProduk'];
    $slide         = $_POST['slide'];
    $rekomendasi   = $_POST['rekomendasi'];
    
    if(empty($namaKategori)){
         echo "<script>
        alert('Data produk harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }elseif(empty($jenisKategori)){
        echo "<script>
        alert('Data jenis Layanan harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }elseif(empty($metodeLayanan)){
        echo "<script>
        alert('Data Metode Layanan  harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }elseif(empty($deskripsi)){
        echo "<script>
        alert('Data deskripsi  harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }elseif(empty($slide)){
        echo "<script>
        alert('Data slide harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }elseif(empty($rekomendasi)){
        echo "<script>
        alert('Data rekomendasi harus Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }
    

    if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {

        if ($ukuran_file <= 2000000) {

            if (move_uploaded_file($tmp_file, $path)) {
    $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_produk (nama_kategori,jenis_kategori,metode_layanan,gambar,deskripsi,slide,rekomendasi) VALUES ('$namaKategori','$jenisKategori','$metodeLayanan','$namaGambar','$deskripsi','$slide','$rekomendasi')");
    

    if ($querySimpan) {
        echo "<script>
        // alert('Data Kategori Berhasil Masuk');
        window.location = '$admin_url'+'assets/adminweb.php?module=kategori';
        </script>";
    } else {
        echo "<script>
        alert('Data Kategori Gagal Di Masukan');
        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';
        </script>";
    }
        }
        else {

                echo "

        <script>

            alert('Data gambar gagal');

            window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';

        </script>";

            }
        } else {

            echo "

    <script>

        alert('Data gambar terlalu besar');

        window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';

    </script>";

        }
    }else {

        echo "

    <script>

    alert('Type gambar salah');

    window.location = '$admin_url'+'assets/adminweb.php?module=tambah_kategori';

    </script>";

            }
        
    }
}
?>