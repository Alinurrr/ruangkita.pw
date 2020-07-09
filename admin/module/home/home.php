<?php
include "../lib/config.php";
include "../lib/koneksi.php";
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Dashboard</h4>
        </div>
      </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
      <div class="col-md-12 grid-margin">

        <div class="row">

          <?php
          $QueryUser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE status=3");
          // menghitung data  
          $pro = mysqli_num_rows($QueryUser) ?>

          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex align-items-center pb-2">
                      <div class="dot-indicator bg-primary mr-2"></div>
                      <p class="mb-0">Total User</p>
                    </div>
                    <h4 class="font-weight-semibold"><?= $pro  ?> User</h4>
                    <div class="progress progress-md">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
          $QueryUser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE status=2");
          // menghitung data  
          $pro = mysqli_num_rows($QueryUser) ?>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex align-items-center pb-2">
                      <div class="dot-indicator bg-success mr-2"></div>
                      <p class="mb-0">Total Founder</p>
                    </div>
                    <h4 class="font-weight-semibold"><?= $pro  ?> Fouder</h4>
                    <div class="progress progress-md">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
          $QueryRuangan = mysqli_query($koneksi, "SELECT * FROM tb_ruangan");
          // menghitung data  
          $pro = mysqli_num_rows($QueryRuangan) ?>
          <div class="col-md-4 grid-margin stretch-card average-price-card">
            <div class="card text-white">
              <div class="card-body">
                <div class="d-flex justify-content-between pb-2 align-items-center">
                  <h2 class="font-weight-semibold mb-0"><?= $pro  ?></h2>
                  <div class="icon-holder">
                    <i class="mdi mdi-home"></i>
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="font-weight-semibold mb-0">Jumlah Ruangan </h5>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2>Data Admin RuangKita</h2>
            <hr>
            <br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 100px"> No</th>
                  <th> Nama</th>
                  <th> Id</th>
                  <th> Email </th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "../lib/config.php";
                include "../lib/koneksi.php";
                $nomor = 1;
                $QueryUser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE status=1");
                while ($pro = mysqli_fetch_array($QueryUser)) {
                ?>
                  <tr>
                    <td><?php echo $nomor; ?></td>
                    <?php $nomor++ ?>
                    <td><?php echo $pro['nama']; ?></td>
                    <td><?php echo $pro['id_user']; ?></td>
                    <td><?php echo $pro['email']; ?></td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
            <br>
            <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_user" class="btn btn-info btn-fw">
              <i class="mdi mdi-upload"></i>Tambah Admin</button></a>
          </div>
        </div>
      </div>


      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Akun Pembayaran RuangKita</h4>
            <div class="table-responsive">
              <table class="table table-stretched">
                <thead>
                  <tr>
                    <th>Metode Pembayaran</th>
                    <th>Kode</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
                  while ($pro = mysqli_fetch_array($QueryFounder)) {
                  ?>
                    <tr>
                      <td>
                        <p class="mb-1 text-dark font-weight-medium"><?php echo $pro['metode_pembayaran']; ?></p>
                      </td>
                      <td class="font-weight-medium"><?php echo $pro['kode_pembayaran']; ?></td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="row">

          <?php
          $QueryPemesanan = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan");
          // menghitung data  
          $pro = mysqli_num_rows($QueryPemesanan) ?>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body pb-0">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-0">Total Aktivitas Pemesan Ruangan</h4>
                </div>
                <h3 class="font-weight-medium mb-4"><?= $pro;  ?> Pemesanan</h3>
              </div>
              <canvas class="mt-n4" height="90" id="total-revenue"></canva>
            </div>
          </div>




        </div>

      </div>

      <div class="col-md-4">

        <?php
        $QueryPemesanan = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan WHERE status_pembayaran='0'");
        // menghitung data  
        $pro = mysqli_num_rows($QueryPemesanan) ?>

        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Pending</h4>
              </div>
              <h3 class="font-weight-medium mb-4"><?= $pro;  ?> Menunggu</h3>
            </div>
          </div>
        </div>
        <?php
        $QueryPemesanan = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan WHERE status_pembayaran='2'");
        // menghitung data  
        $pro = mysqli_num_rows($QueryPemesanan) ?>

        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0">Cancel</h4>
              </div>
              <h3 class="font-weight-medium mb-4"><?= $pro;  ?> Gagal</h3>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">
        <div class="row">


          <?php
          $QueryPemesanan = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan WHERE status_pembayaran='1'");
          // menghitung data  
          $pro = mysqli_num_rows($QueryPemesanan) ?>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body pb-0">
                <div class="d-flex justify-content-between">
                  <h4 class="card-title mb-0">Pemesanan Terbayar</h4>
                </div>
                <h3 class="font-weight-medium"><?= $pro;  ?> Terbayar</h3>
              </div>
              <canvas class="mt-n3" height="90" id="total-transaction"></canva>
            </div>
          </div>


        </div>

      </div>


    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->