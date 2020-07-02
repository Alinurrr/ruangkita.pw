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
          <h4 class="page-title">User</h4>
          <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
            <ul class="quick-links">
              <li><a href="<?php echo $admin_url; ?>adminweb.php?module=list_user">| All</a></li>
              <li><a href="<?php echo $admin_url; ?>adminweb.php?module=list_user_admin">Admin</a></li>
              <li><a href="<?php echo $admin_url; ?>adminweb.php?module=list_user_founder">Founder</a></li>
              <li><a href="<?php echo $admin_url; ?>adminweb.php?module=list_user_customer">Customer</a></li>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-12 grid-margin stretch-card">
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
                  <th> Password </th>
                  <th> Status </th>
                  <th style="width: 100px"> Aksi </th>
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
                    <td><?php echo $pro['password']; ?></td>
                    <td>
                      <?php
                      $status = $pro['status'];
                      if ($status == "1") { ?>
                        <label class="badge badge-info">Admin</label>
                      <?php } else if ($status == "2") { ?>
                        <label class="badge badge-warning">Founder</label>
                      <?php } else if ($status == "3") { ?>
                        <label class="badge badge-success">Cust</label>
                      <?php } ?>
                    </td>
                    <td>
                      <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_user&id_user=<?php echo $pro['id_user']; ?>" class="btn btn-icons btn-inverse-primary">
                        <i class="mdi mdi-file-document"></i></button></a>
                      <a href="<?php echo $admin_url; ?>module/data_user/aksi_hapus.php?id_user=<?php echo $pro['id_user']; ?>" class="btn btn-icons btn-inverse-danger">
                        <i class="mdi mdi-alert-outline"></i></button></a>
                    </td>
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

    </div>
  </div>