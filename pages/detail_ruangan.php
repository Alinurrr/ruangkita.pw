<section class="ftco-section bg-light">
  <div class="container">
    <div class="row no-gutters">
      <?php
      $id_ruangan = $_GET['id_ruangan'];
      $q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user AND id_ruangan='$id_ruangan'");


      while ($r = mysqli_fetch_array($q)) {
      ?>

        <div class="col-md-8">
          <div><img src="admin/upload/<?php echo $r['gambar'] ?>" height="460" width="860"></div>




          <h2 class="font-weight-bold mt-3">Detail Ruangan</h2>
          <span>
            <font color="#fa6e83"><b> Nama Ruangan : </b></font>
          </span>
          <h3><?php echo ($r['nama_ruangan']) ?></h3> <br>

          <div class="heading-section">
            <div class="pl-md-5">
              <h4 class="heading">Alamat</h4>
              <p><?php echo ($r['alamat']) ?></p>
            </div>
          </div>
          <div class="pl-md-5">
            <div class="row">
              <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-diet"></span>
                </div>
                <div class="media-body pl-3">
                  <h3 class="heading">Tipe</h3>
                  <p> <?php

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

                      ?></p>
                </div>
              </div>
              <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-workout"></span>
                </div>
                <div class="media-body pl-3">
                  <h3 class="heading">Ukuran</h3>
                  <p><?php echo ($r['ukuran']) ?> M2</p>
                </div>
              </div>
              <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-diet-1"></span>
                </div>
                <div class="media-body pl-3">
                  <h3 class="heading">Kapasitas</h3>
                  <p><?php echo ($r['kapasitas']) ?> Orang</p>
                </div>
              </div>
              <div class="services-2 col-lg-6 d-flex w-100">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-first"></span>
                </div>
                <div class="media-body pl-3">
                  <h3 class="heading">Harga</h3>
                  <p>Rp. <?php echo ($r['harga']) ?> /hari</p>
                </div>
              </div>

            </div>
          </div>
          <div class="heading-section">
            <div class="pl-md-5">
              <h4 class="heading">Deskripsi</h4>
              <p><?php echo ($r['deskripsi']) ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 p-2 p-md-4 bg-white">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Full Day</span>
          </h4>
          <form class="card p-2" action="index_booking.php" method="POST">
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Harga Sewa</h6>
                  <small class="text-muted">jam 09.00 - 16.00 WIB</small>
                </div>
                <div class="row mt-3">
                  <h6>Rp. <?php echo ($r['harga']) ?></h6>
                </div>
              </li>
              <input type="hidden" name="id_ruangan" value="<?php echo $r['id_ruangan']; ?>">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <h6 class="my-0">Tanggal Sewa</h6>
                <div class="form-group row">
                  <input class="form-control" name="tgl_sewa" type="date" value="<?php echo date('y/ m/ d'); ?>" id="example-date-input">
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Booking Ruangan</button>
                </div>

              </li>
            </ul>


          </form>

        </div>
      <?php } ?>

    </div>
  </div>
</section>