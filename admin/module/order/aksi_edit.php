<?php

if (session_start()) {
    
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    

    $idOrder = $_POST['id_order'];

    $status = $_POST['status'];
   

   

    
    if (empty($status)) {

        $error['status'] = 'Status kosong';

    }else{

      
                $QueryEdit = mysqli_query($koneksi, "UPDATE tbl_order SET statusP = '$status' WHERE id_order='$idOrder'");
                    if ($QueryEdit) {
                        echo "
                    <script>
                        alert('Transaksi Selesai');
                        window.location = '$admin_url'+'assets/adminweb.php?module=order';
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
