 <!-- partial -->
 <div class="main-panel">
   <div class="content-wrapper">
     <div class="row">

       <div class="page-header">
         <h4 class="page-title">Data_Ruangan</h4>
         <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
           <ul class="quick-links">
             <li><a href="<?php echo $admin_url; ?>adminfounder.php?module=list_ruangan">List Ruangan</a></li>
           </ul>
         </div>
       </div>



       <div class="col-lg-12 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
             <h3>Data Ruangan</h3>
             <hr>
             <br>
             <table class="table table-hover" width="40 px">
               <thead>
                 <tr>
                   <th> Nama Ruangan </th>
                   <th> Gambar </th>
                   <th> Alamat </th>
                   <th style="width: 80px"> Aksi </th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  include "../lib/config.php";
                  include "../lib/koneksi.php";
                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_ruangan WHERE id_founder='$id_user'");
                  while ($pro = mysqli_fetch_array($QueryFounder)) {
                  ?>
                   <tr>
                     <td><?php echo $pro['nama_ruangan']; ?></td>
                     <td>
                       <img src="upload/<?= $pro['gambar']; ?>" class="thumb-image" height="100" width="100">
                     </td>
                     <td><?php echo $pro['alamat']; ?></td>
                     <td>

                       <a href="<?php echo $admin_url; ?>adminfounder.php?module=detail_ruangan&id_ruangan=<?php echo $pro['id_ruangan']; ?>" class="btn btn-outline-primary">
                         Detail</a>

                     </td>
                   </tr>

                 <?php } ?>

               </tbody>
             </table>
             <br>
             <a href="<?php echo $base_url; ?>admin/adminfounder.php?module=tambah_ruangan" class="btn btn-info btn-fw">
               <i class="mdi mdi-upload"></i>Tambah Ruangan</button></a>

           </div>
         </div>
       </div>
     </div>
   </div>