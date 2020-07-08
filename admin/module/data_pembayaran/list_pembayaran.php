 <!-- partial -->
 <div class="main-panel">
   <div class="content-wrapper">
     <div class="row">


       <div class="col-lg-12 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
             <h3>Data Metode Pembayaran</h3>
             <hr>
             <br>
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th style="width: 110px"> Id Pembayaran </th>
                   <th> Metode Pembayaran </th>
                   <th> Kode Pembayaran </th>
                   <th style="width: 80px"> Aksi </th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  include "../lib/config.php";
                  include "../lib/koneksi.php";
                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
                  while ($pro = mysqli_fetch_array($QueryFounder)) {
                  ?>
                   <tr>
                     <td><?php echo $pro['id_pembayaran']; ?></td>
                     <td><?php echo $pro['metode_pembayaran']; ?></td>
                     <td><?php echo $pro['kode_pembayaran']; ?></td>

                     <td>
                       <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_pembayaran&id_pembayaran=<?php echo $pro['id_pembayaran']; ?>" class="btn btn-icons btn-inverse-primary">
                         <i class="mdi mdi-file-document"></i></button></a>
                       <a href="<?php echo $admin_url; ?>module/data_pembayaran/aksi_hapus.php?id_pembayaran=<?php echo $pro['id_pembayaran']; ?>" class="btn btn-icons btn-inverse-danger">
                         <i class="mdi mdi-alert-outline"></i></button></a>

                     </td>

                   </tr>

                 <?php } ?>

               </tbody>
             </table>
           </div>
           <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_pembayaran" class="btn btn-sm btn-info btn-flat pull-left">Tambah Metode Pembayaran</a>
         </div>
       </div>
     </div>
   </div>