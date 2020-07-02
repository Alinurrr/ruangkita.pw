 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2>Data Admin</h2>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 100px"> Id  Admin </th>
                          <th> Nama Pengguna </th>
                          <th> No HP </th>
                          <th> Email </th>
                          <th style="width: 100px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryAdmin = mysqli_query($koneksi, "SELECT * FROM tb_admin");
                                while ($pro = mysqli_fetch_array($QueryAdmin)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['id_admin']; ?></td>
                          <td><?php echo $pro['username']; ?></td>
                          <td><?php echo $pro['no_hp']; ?></td>
                          <td><?php echo $pro['email']; ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>adminweb.php?module=form_edit&id_admin=<?php echo $pro['id_admin']; ?>" class="btn btn-icons btn-inverse-primary">
                            <i class="mdi mdi-file-document"></i></button></a>
                            <a href="<?php echo $admin_url; ?>module/data_admin/aksi_hapus.php?id_admin=<?php echo $pro['id_admin']; ?>"  class="btn btn-icons btn-inverse-warning">
                            <i class="mdi mdi-alert-outline"></i></button></a>
                          </td>
                        </tr>

                        <?php } ?>
                        
                      </tbody>
                    </table>
                    <br>
                    <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_admin"  class="btn btn-info btn-fw">
                            <i class="mdi mdi-upload"></i>Tambah Admin</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>