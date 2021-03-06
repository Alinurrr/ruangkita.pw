<!-- partial -->
<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">

         <?php

         include "../lib/config.php";
         include "../lib/koneksi.php";

         $id_ruangan = $_GET['id_ruangan'];

         $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user AND id_ruangan='$id_ruangan'");
         $pro = mysqli_fetch_array($QueryFounder);

         ?>
         <div class="col-12">
            <div class="page-header">
               <h4 class="page-title">Data_Ruangan</h4>
               <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                  <ul class="quick-links">
                     <li><a href="<?php echo $admin_url; ?>adminweb.php?module=list_ruangan_admin">List Ruangan</a></li>
                     <li><a href="#">Detail Ruangan</a></li>
                  </ul>
               </div>
            </div>

         </div>

         <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <h3><?php echo $pro['nama_ruangan']; ?></h3>
                  <hr>
                  <br>


                  <div class="card" ">
                      <img src=" upload/<?= $pro['gambar']; ?>" class="card-img-top" alt="<?php echo $pro['nama_ruangan']; ?>">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $pro['nama_ruangan']; ?></h5>

                        <p class="card-text"><?php echo $pro['deskripsi']; ?></p>
                        <div class="card-body mt-0">


                           <!-- <p class="card-description"> Use <code>&lt;address&gt;</code> tag </p> -->



                           <div class="row">
                              <div class="col-md-6">
                                 <address>
                                    <p>
                                       <b>Founder Ruangan</b> <br>
                                       <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-primary">
                                          <i class="mdi mdi-account"></i>
                                       </button> <?php echo $pro['nama']; ?>
                                    </p>


                                 </address>
                              </div>

                              <div class="col-md-6">
                                 <address>
                                    <p class="font-weight-bold">Detail</p>
                                    <p> Ukuran ruangan : <?php echo $pro['ukuran']; ?> meter<sup>2</sup></p>
                                    <p> Kapasitas maksimal : <?php echo $pro['kapasitas']; ?> orang</p>

                                 </address>
                              </div>


                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <address>
                                    <p class="font-weight-bold">Lokasi</p>
                                    <p>
                                       <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-primary">
                                          <i class="mdi mdi-map-marker"></i>
                                       </button> <?php echo $pro['alamat']; ?>
                                    </p>


                                 </address>
                              </div>


                              <div class="col-md-6">
                                 <address class="text-primary">
                                    <p class="font-weight-bold"> Kategori </p>
                                    <p class="mb-2">
                                       <?php

                                       if ($pro['jenis_ruangan'] == 'R01') {
                                          echo "Gedung";
                                       } elseif ($pro['jenis_ruangan'] == 'R02') {
                                          echo "Kafe";
                                       } elseif ($pro['jenis_ruangan'] == 'R03') {
                                          echo "Pegunungan";
                                       } elseif ($pro['jenis_ruangan'] == 'R04') {
                                          echo "Pedesaan";
                                       } elseif ($pro['jenis_ruangan'] == 'R05') {
                                          echo "Pesisir Pantai";
                                       }

                                       ?>
                                    </p>

                                 </address>
                                 <address>
                                    <p class="font-weight-bold">Harga</p>
                                    <p>Rp.<?php echo $pro['harga']; ?></p>
                                 </address>
                              </div>
                           </div>
                        </div>
                        <a href="<?php echo $admin_url; ?>module/data_ruangan/aksi_hapus.php?id_ruangan=<?php echo $pro['id_ruangan']; ?>" class="btn btn-danger btn-fw">
                           <i class="mdi mdi-alert-outline"></i>Hapus Ruangan</button></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>