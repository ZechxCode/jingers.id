 <!-- Content Wrapper. Contains page content -->
 
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content-body">
    
            <div class="container-fluid mt-3">
            <div class="content-wrapper">
    <section class="content-header">
        <h2>
            Manajemen Produk
        </h2>
    </section>
     <div class="card">
       <div class="card-header">
         <h3 class="card-title">List Produk</h3>
         <form class="form-inline float-right" method="post" action="">
           <div class="input-group input-group-sm">
             <!-- <input class="form-control" type="search" placeholder="Cari Game" aria-label=""
               name="cariKategori"> -->
             <div class="input-group-append">
               <!-- <button class="btn btn-primary" type="submit">
                 <i class="fa fa-search"></i>
               </button> -->
             </div>
           </div>
         </form>
       </div>
       <div class="card-body">
         <table class="table table-hover">
           <tr>
             <thead class="thead-light">
               <th>Product</th>
               <th>Jenis Layanan</th>
               <th>Metode Layanan</th>
               <th>Gambar</th>
               <th>Deskripsi</th>
               <th>slide</th>
               <th>rekomendasi</th>
               <th style="width: 150px">Aksi</th>
             </thead>

           </tr>

           <?php
      include "../../lib/config.php";
      include "../../lib/koneksi.php";

      $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
// searching kategori
      if (isset($_POST['cariKategori'])) {
          $cariKategori = $_POST['cariKategori'];
          $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE nama_kategori LIKE '%$cariKategori%'");
      }
      
      while ($kat = mysqli_fetch_array($kueriKategori)) {
          ?>
           <tr>
             <td>
               <?php echo $kat['nama_kategori']; ?>
             </td>
             <td>
               <?php echo $kat['jenis_kategori']; ?>
             </td>
             <td>
               <?php echo $kat['metode_layanan']; ?>
             </td>
             
             <td><img src="../upload/<?= $kat['gambar']; ?>" height="80" width="120"></td>

             <td>
               <?php echo $kat['deskripsi']; ?>
             </td>
             <td>
               <?php echo $kat['slide']; ?>
             </td>
             <td>
               <?php echo $kat['rekomendasi']; ?>
             </td>
             <td>
               <div class="btn-group">
                 <a href="<?php echo $admin_url; ?>assets/adminweb.php?module=edit_kategori&id_kategori=<?php echo $kat['id_kategori']; ?>"
                   class="btn btn-warning">
                   <i class="fa fa-pencil"></i>
                 </a>
                 <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kategori=<?php echo $kat['id_kategori']; ?>"
                   onCLick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
                   <i class="fa fa-power-off"></i>
                 </a>
               </div>
             </td>
           </tr>
           <?php
      } ?>
         </table>
       </div>
       <div class="card-footer">
         <a href="adminweb.php?module=tambah_kategori" class="btn btn-primary ml-1">Tambah Product</a>
       </div>
     </div>