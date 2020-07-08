<!-- <h1><?= $idRuangan; ?></h1>
<h1><?= $tgl_sewa; ?></h1>
<h1><?= $name; ?></h1>
<h1><?= $email; ?></h1>
<h1><?= $telp; ?></h1>
<h1><?= $bayar; ?></h1>
<h1><?= $metode_pembayaran; ?></h1> -->



<section class="ftco-section bg-light">
   <div class="container">


      <div class="row mt-3 no-gutters">
         <div class="col-md-6 mr-5 wrap-about">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
               <span class="text-muted">Cara Pembayaran</span>
            </h4>
            <form class="card p-2" action="index_konfirmasi.php" method="POST">
               <ul class="list-group mb-3">
                  <h5 class="ml-2">1. Lakukan Transfer Sebelum</h5>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                     <div>
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <h5 class="my-0"><?php echo date('l, d-m-Y ', strtotime("+1 day", strtotime(date("l, d-m-Y")))); ?> , <?php echo date('H:i a'); ?></h5>
                        <small class="text-muted">Selesaikan pembayaran anda sebelum waktu yang ditentukkan</small>
                     </div>
                  </li>
                  <?php


                  $q = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE id_pembayaran='$metode_pembayaran'");

                  while ($r = mysqli_fetch_array($q)) {
                  ?>

                     <h5 class="ml-2 mt-3">2. Kirim Pembayaran Ke Akun <?php echo $r['metode_pembayaran'] ?> RuangKita</h5>
                     <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                           <h5 class="my-0"><?php echo $r['metode_pembayaran'] ?></h5>
                           <p class="my-0">Kode : <?php echo $r['kode_pembayaran'] ?></p>
                        <?php } ?>
                        <p class="my-0">Nominal : Rp.<?php echo $bayar; ?></p>
                        </div>
                     </li>

                     <h5 class="ml-2 mt-3">3. Kirim Bukti Pembayaran</h5>
                     <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                           <p class="my-0">Setelah pembayaran selesai , kirim bukti permbayaran anda ke admin@ruangkita.pw untuk verifikasi pembayaran</p>
                        </div>
                     </li>
                     <h5 class="ml-2 mt-3">4. Pembayaran Selesai</h5>
                     <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                           <p class="my-0">Pembayaran selesai . Kami akan mengirimkan ID Pesanan melalui email anda. Tunjukan email konfirmasi RuangKita beserta ID Pesanan kepada petugas resepsionis saat tiba di lokasi untuk konfirmasi</p>
                        </div>
                     </li>
                     <br>
                     <a href="<?php echo $base_url; ?>" class="btn btn-primary btn-lg btn-block">Kembali Ke Beranda</a>


               </ul>


            </form>
         </div>
         <?php


         $q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user AND id_ruangan='$idRuangan'");

         while ($r = mysqli_fetch_array($q)) {
         ?>

            <div class="col-md-5 wrap-about ftco-animate">

               <div class="row no-gutters">
                  <h3 class="mb-4" align="center"> Data Pesanan</h3>
                  <div class="contact-wrap w-100 p-md-3 p-4">
                     <div id="form-message-warning" class="mb-4"></div>
                     <div id="form-message-success" class="mb-4">

                     </div>
                     <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                           <div class="col-md-6">
                              <img src="admin/upload/<?php echo $r['gambar'] ?>" class="card-img" alt="...">
                           </div>
                           <div class="col-md-6">
                              <div class="card-body">
                                 <h6 class="card-title"><?php echo $r['nama_ruangan'] ?></h6>
                                 <p class="card-text"><?php echo $r['alamat'] ?></p>
                              </div>
                           </div>
                        </div>
                        <ul class="list-group mb-3">
                           <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                 <p class="my-0">Tanggal Sewa</p>
                              </div>
                              <div class="row ">
                                 <p><?php echo $tgl_sewa; ?></p>

                              </div>
                           </li>
                           <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                 <p class="my-0">Waktu</p>
                              </div>
                              <div class="row ">
                                 <p>jam 09.00 - 16.00 WIB</p>

                              </div>
                           </li>
                           <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                 <p class="my-0">Nama Pemesan</p>
                              </div>
                              <div class="row ">
                                 <p><?php echo $name; ?></p>
                              </div>
                           </li>
                           <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                 <p class="my-0">Email Pemesan</p>
                              </div>
                              <div class="row ">
                                 <p><?php echo $email; ?></p>
                              </div>
                           </li>
                           <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                 <p class="my-0">Nomor Telephone Pemesan</p>
                              </div>
                              <div class="row ">
                                 <p><?php echo $telp; ?></p>
                              </div>
                           </li>
                           <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                 <p class="my-0">Tamu</p>
                              </div>
                              <div class="row ">
                                 <p>Max <?php echo $r['kapasitas']; ?> orang</p>
                              </div>
                           </li>

                        </ul>
                     </div>
                  </div>

               </div>


            </div>
      </div>

   </div>
   </div>
</section>
<?php } ?>


<section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Comment &amp; Feedbacks </h2>
         </div>
      </div>
      <div class="row ftco-animate">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img" style="background-image: url(images/person_1.jpg)">
                     </div>
                     <div class="text pl-4">
                        <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                        </span>
                        <p>Tempat Meeting Ternyaman</p>
                        <p class="name">Racky Henderson</p>
                        <span class="position">Gedung</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img" style="background-image: url(images/person_2.jpg)">
                     </div>
                     <div class="text pl-4">
                        <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                        </span>
                        <p>Tempat Meeting Ternyaman</p>
                        <p class="name">Henry Dee</p>
                        <span class="position">Pesisir Pantai</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img" style="background-image: url(images/person_3.jpg)">
                     </div>
                     <div class="text pl-4">
                        <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                        </span>
                        <p>Tempat Meeting Ternyaman</p>
                        <p class="name">Mark Huff</p>
                        <span class="position">Pegunungan</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap d-flex">
                     <div class="user-img" style="background-image: url(images/person_4.jpg)">
                     </div>
                     <div class="text pl-4">
                        <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                        </span>
                        <p>Tempat Meeting Ternyaman</p>
                        <p class="name">Rodel Golez</p>
                        <span class="position">Kafe</span>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>

<br>

<!-- ___________ Bagian Rekomendasi  -->

<section class="ftco-section ftco-services">
   <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Rekomendasi Ruangan</h2>
         </div>
      </div>
      <div class="row">
         <?php

         $q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan order by id_ruangan desc limit 3");

         while ($r = mysqli_fetch_array($q)) {
         ?>

            <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
               <div class="d-block services-wrap text-center">



                  <div class="img" style="background-image: url(admin/upload/<?php echo $r['gambar'] ?>);"></div>
                  <div class="media-body py-4 px-3">
                     <h3 class="heading"><?php echo ($r['nama_ruangan']) ?></h3>

                     <p><span>
                           <font color="#fa6e83"><b> Tipe: </b></font>
                        </span>
                        <?php

                        if ($r['jenis_ruangan'] == 'R01') {
                           echo "Gedung";
                        } elseif ($r['jenis_ruangan'] == 'R02') {
                           echo "Kafe";
                        } elseif ($r['jenis_ruangan'] == 'R03') {
                           echo "Pegunungan";
                        } elseif ($r['jenis_ruangan'] == 'R04') {
                           echo "Pedesaan";
                        } elseif ($r['jenis_ruangan'] == 'R05') {
                           echo "Pesisir Pantai";
                        }

                        ?><br>
                        <span>
                           <font color="#fa6e83"><b> ukuran: </b></font>
                        </span> <?php echo ($r['ukuran']) ?> m2<br>
                        <span>
                           <font color="#fa6e83"><b> kapasitas: </b></font>
                        </span> <?php echo ($r['kapasitas']) ?> orang <br>
                        <span>
                           <font color="#fa6e83"><b> alamat: </b></font>
                        </span> <?php echo ($r['alamat']) ?>
                     </p>

                     <p> <?php echo ($r['deskripsi']) ?></p>
                     <p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
                  </div>

               </div>
            </div>
         <?php } ?>
      </div>
   </div>
</section>