 <!-- partial -->
 <div class="main-panel">
   <div class="content-wrapper">
     <div class="row">


       <div class="col-lg-12 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
             <h3>Data Pemesanan</h3>
             <hr>
             <br>
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th> Pemesan </th>
                   <th> Email Pemesan</th>
                   <th> Telp Pemesan</th>
                   <th> Tanggal Sewa</th>
                   <th> Ruangan </th>
                   <th> Status </th>
                   <th style="width: 80px"> Aksi </th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  include "../lib/config.php";
                  include "../lib/koneksi.php";
                  $QueryPesan = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan p, tb_ruangan r, tb_user u 
                                                                 WHERE p.id_ruangan = r.id_ruangan 
                                                                 AND r.id_founder = u.id_user
                                                                 AND r.id_founder = $id_user");
                  while ($pro = mysqli_fetch_array($QueryPesan)) {
                  ?>
                   <tr>
                     <td><?php echo $pro['nama_pemesan']; ?></td>
                     <td><?php echo $pro['email_pemesan']; ?></td>
                     <td><?php echo $pro['telp_pemesan']; ?></td>
                     <td><?php echo $pro['tanggal_sewa']; ?></td>
                     <td><?php echo $pro['nama_ruangan']; ?></td>
                     <td>
                       <?php
                        $status = $pro['status_pembayaran'];
                        if ($status == "0") { ?>
                         <label class="badge badge-warning">Pending</label>
                       <?php } else if ($status == "1") { ?>
                         <label class="badge badge-primary">Pay</label>
                       <?php } else if ($status == "2") { ?>
                         <label class="badge badge-danger">Cancel</label>
                       <?php } ?>
                     </td>
                     <td>
                       <a href="<?php echo $admin_url; ?>module/pemesanan_founder/aksi_hapus.php?id_pesanan=<?php echo $pro['id_pesanan']; ?>" class="btn btn-icons btn-inverse-warning">
                         <i class="mdi mdi-alert-outline"></i></button></a>
                     </td>
                   </tr>

                 <?php } ?>

               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>