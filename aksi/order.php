    <?php
    session_start();

    // if (empty($_SESSION['username']) and empty([$_SESSION['password']])) {
    //     echo '<script>
    //     alert("silahkan login terlebih dahulu");
    //     window.location="../../index.php"
    //     </script>';
    // } else {
        include "../lib/config.php";
        include "../lib/koneksi.php";

        date_default_timezone_set('Asia/Jakarta');
        

        if ($_POST) {

            $namaGambar = $_FILES['gambar']['name'];

            $ukuran_file = $_FILES['gambar']['size'];

            $tipe_file = $_FILES['gambar']['type'];

            $tmp_file = $_FILES['gambar']['tmp_name'];

            $path = "../upload/" . $namaGambar;



                $idKat = $_POST['id_kategori'];
                $playerID = $_POST['PlayerID'];
                $nominal = $_POST['jumlahVOC'];
                $harga = $_POST['harga'];
                $metodeP = $_POST['metodeP'];
                $nota = $_POST['nota'];
                $tanggal = date('Y-m-d', time());


                
              
        

            if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {

                if ($ukuran_file <= 2000000) {

                    if (move_uploaded_file($tmp_file, $path)) {
            $querySimpan = "INSERT INTO tbl_order (tanggal,produk,playerID,nominal,harga,id_metode,bukti_tf,dataNota,statusP) VALUES ('$tanggal','$idKat','$playerID','$nominal','$harga','$metodeP','$namaGambar','$nota','Proses');";
            

            

            if (mysqli_multi_query($koneksi, $querySimpan)) {
                echo "<script>
                 alert('Pesanan Berhasil dan akan Kami Proses Mohon tunggu 2-20mnt max 24 jam apabila Server Down');
                window.location = '../index.php';
                </script>";
            } else {
                echo "<script>
                alert('Data Order Gagal Di Masukan');
                window.location = '../';
                </script>";
            }
                }
                else {

                        echo "

                        <script>

                            alert('Wajib Melampirkan Bukti Transfer');

                            window.location = '../detailProduk.php?id_kategori=$idKat';

                        </script>";

                    }
                } else {

                    echo "

                    <script>

                        alert('Data gambar terlalu besar');

                        window.location = '../detailProduk.php?id_kategori=$idKat';

                    </script>";

                }
            }else {

                echo "

                <script>

                alert('Type gambar salah');

                window.location = '../detailProduk.php?id_kategori=$idKat';

                </script>";

                    }
            
        }

    ?>