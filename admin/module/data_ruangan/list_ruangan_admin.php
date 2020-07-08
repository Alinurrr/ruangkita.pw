<?php

include "../lib/config.php";
include "../lib/koneksi.php";


?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Data_Ruangan</h4>
          <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
            <ul class="quick-links">
              <li><a href="<?php echo $admin_url; ?>adminweb.php?module=list_ruangan_admin">List Ruangan</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3>Data Ruangan</h3>
            <hr>
            <br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> Nomor </th>
                  <th> Nama Ruangan </th>
                  <th> Id </th>
                  <th> Gambar </th>
                  <th> Pemilik </th>
                  <th style="width: 80px"> Aksi </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $nomor = 1;
                include "../lib/config.php";
                include "../lib/koneksi.php";
                $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user");
                while ($pro = mysqli_fetch_array($QueryFounder)) {
                ?>
                  <tr>
                    <td><?php echo $nomor; ?></td>
                    <?php $nomor++ ?>
                    <td><?php echo $pro['nama_ruangan']; ?></td>
                    <td><?php echo $pro['id_ruangan']; ?></td>
                    <td>
                      <img src="upload/<?= $pro['gambar']; ?>" class="img" height="100" width="100">
                    </td>
                    <td><?php echo $pro['nama']; ?></td>
                    <td>
                      <a href="<?php echo $admin_url; ?>adminweb.php?module=detail_ruangan_admin&id_ruangan=<?php echo $pro['id_ruangan']; ?>" class="btn btn-outline-primary">
                        Detail</a>
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