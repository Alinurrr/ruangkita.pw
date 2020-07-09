<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="row my-5 flex-lg-nowrap">
      <div class="col-12 col-lg-auto mb-3 mt-5" style="width: 200px;">

      </div>

      <?php
      include "lib/config.php";
      include "lib/koneksi.php";
      $QueryUser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
      while ($pro = mysqli_fetch_array($QueryUser)) {
         $id_user  = $pro['id_user'];
         $nama = $pro['nama'];
         $email = $pro['email'];
         $password = $pro['password'];
      ?>

         <div class="col">
            <div class="row">
               <div class="col mb-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="e-profile">
                           <div class="row">
                              <div class="col-12 col-sm-auto mb-3">
                                 <div class="mx-auto" style="width: 140px;">
                                    <div class="mx-auto" style="width: 140px;">
                                       <img src="admin/assets/images/faces/face00.jpg" class="rounded mx-auto d-block" alt="admin/assets/images/faces/face00.jpg">
                                    </div>
                                 </div>
                              </div>
                              <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                 <div class="text-center text-sm-left mb-2 mb-sm-0">

                                    <tr>


                                       <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $pro['nama']; ?></h4>
                                       <p class="mb-0"><?php echo $pro['email']; ?></p>



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


                           <ul class="nav nav-tabs">
                              <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
                           </ul>
                           <div class="tab-content pt-3">
                              <div class="tab-pane active">
                                 <form class="form" novalidate="" action="<?= $admin_url; ?>/module/data_user/aksi_edit.php" method="post">
                                    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                                    <div class="row">
                                       <div class="col">
                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                   <b><label>Nama</label></b>
                                                   <input class="form-control" type="text" name="Nama" placeholder="<?php echo $pro['nama']; ?>" value="<?php echo $pro['nama']; ?>">
                                                </div>
                                             </div>

                                          </div>
                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                   <label>Email</label>
                                                   <input class="form-control" type="text" name="Email" placeholder="<?php echo $pro['email']; ?>" value="<?php echo $pro['email']; ?>">
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-12 col-sm-6 mb-3">
                                          <div class="mb-2"><b>Change Password</b></div>

                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                   <label>Password</label>
                                                   <input class="form-control" type="password" value="<?php echo $pro['password']; ?>" name="Password" placeholder="••••••">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col">
                                                <div class="form-group">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12 col-sm-5 offset-sm-1 mb-3">

                                          <div class="custom-controls-stacked px-2">

                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col d-flex justify-content-end">
                                 <button class="btn btn-primary" type="submit">Save Changes</button>
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
            <div class="card mb-3">
               <div class="card-body">
                  <div class="px-xl-3">

                     <a class="btn btn-primary" href="admin/logout.php"><span>Logout</span> <i class="fa fa-sign-out"></i></a>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-body">
                  <h6 class="card-title font-weight-bold">Support</h6>
                  <p class="card-text">Hubungi Kami jika terdapat kendala</p>
                  <button type="button" class="btn btn-primary">Contact Us</button>
               </div>
            </div>
         </div>
   </div>
<?php } ?>
</div>
</div>
</div>