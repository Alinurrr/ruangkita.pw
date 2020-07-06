<section class="ftco-section bg-light">
   <div class="container">

      <div class="row no-gutters">
         <?php

         $q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan order by id_ruangan desc limit 6");

         while ($r = mysqli_fetch_array($q)) {
         ?>

            <div class="col-md-4 mb-3 d-flex services align-self-stretch px-4 ftco-animate">
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


                     <p style="float: right"><a href="<?php echo $base_url; ?>index_detail_ruangan.php?id_ruangan=<?php echo $r['id_ruangan']; ?>" class="btn btn-primary">Detail</a></p>
                  </div>

               </div>
            </div>
         <?php } ?>
      </div>



   </div>
   </div>
</section>