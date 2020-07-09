<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="row my-5 flex-lg-nowrap">



      <?php
      include "lib/config.php";
      include "lib/koneksi.php";
      $nomor = 1;
      $email = $_SESSION['email'];

      $QueryUser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
      while ($pro = mysqli_fetch_array($QueryUser)) {
      ?>
         <div class="col-12 col-lg-auto mb-3 mt-5" style="width: 200px;">

         </div>

         <div class="col">
            <div class="row">
               <div class="col mb-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="e-profile">
                           <div class="row">
                              <div class="col-12 col-sm-auto mb-3">
                                 <div class="mx-auto" style="width: 140px;">
                                    <img src="admin/assets/images/faces/face00.jpg" class="rounded mx-auto d-block" alt="admin/assets/images/faces/face00.jpg">
                                 </div>
                              </div>
                              <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                 <div class="text-center text-sm-left mb-2 mb-sm-0">
                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $pro['nama']; ?></h4>
                                    <p class="mb-0"><?php echo $pro['email']; ?></p>

                                    <?php
                                    if ($pro['status'] == 1) { ?>
                                       <div class="mt-3">
                                          <a href="<?= $admin_url; ?>adminweb.php?module=home" class="btn btn-primary">Dashboard Admin </a>

                                       </div>
                                    <?php } elseif ($pro['status'] == 2) { ?>
                                       <div class="mt-3">
                                          <a href="<?= $admin_url; ?>adminfounder.php?module=home" class="btn btn-primary">RuangKu </a>
                                       </div>
                                    <?php } ?>



                                 </div>
                                 <div class="text-center text-sm-right">
                                    <?php
                                    $status = $pro['status'];
                                    if ($status == "1") { ?>
                                       <label class="badge badge-info">Admin</label>
                                    <?php } else if ($status == "2") { ?>
                                       <label class="badge badge-warning">Founder</label>
                                    <?php } else if ($status == "3") { ?>
                                       <label class="badge badge-success">Customer</label>
                                    <?php } ?>
                                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col d-flex justify-content-end">
                                 <a href="<?= $base_url; ?>index_profile_edit.php?id_user=<?php echo $pro['id_user']; ?>" class="btn btn-primary">Edit Data </a>
                              </div>
                           </div>
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 col-md-3 mb-3">

         </div>


   </div>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>