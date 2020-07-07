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
                  <p>Rp. 999999 /hari</p>
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
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Harga Sewa</h6>
                <small class="text-muted">jam 09.00 - 16.00 WIB</small>
              </div>
              <div class="row mt-3">
                <h6>Rp.999.999</h6>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <h6 class="my-0">Tanggal Sewa</h6>
              <div class="form-group row">
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
            </li>
          </ul>

          <form class="card p-2">

            <div class="input-group-append">
              <a href="<?php echo $base_url; ?>index_booking.php?id_ruangan=<?php echo $r['id_ruangan']; ?>" class="btn btn-primary btn-lg btn-block">Booking Ruangan</a>
            </div>

          </form>

        </div>
      <?php } ?>
      <div class="col-md-6">
        <div class="wrapper">
          <div class="row no-gutters">
            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
              <div class="contact-wrap w-100 p-md-5 p-4">
                <h3 class="mb-4" align="center"> Isi Form Berikut</h3>
                <div id="form-message-warning" class="mb-4"></div>
                <div id="form-message-success" class="mb-4">

                </div>
                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="email">Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="subject">Telpon</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="label" for="#">Alamat</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="Booking" class="btn btn-primary">
                        <div class="submitting"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
              <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                <h3>Hubungi Kami Bila Terdapat Kendala</h3>
                <p class="mb-4">Jangan Risau,Ceritalah,Setiap Saat Pasti Kami Layani</p>
                <div class="dbox w-100 d-flex align-items-start">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Alamat:</span> Jalan Jogja Magelang km 08</p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Telfon:</span> <a href="tel://1234567920">+62 8587 8938 836</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">ruangkita@gmail.com</a></p>
                  </div>
                </div>
                <div class="dbox w-100 d-flex align-items-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                  </div>
                  <div class="text pl-3">
                    <p><span>Website</span> <a href="#">ruangkita.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>