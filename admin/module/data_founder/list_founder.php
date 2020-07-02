 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3>Data Founder</h3>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 110px"> Id pengguna </th>
                          <th> Nama Founder </th>
                          <th> Username </th>
                          <th> No HP </th>
                          <th> Email </th>
                          <th style="width: 80px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_founder");
                                while ($pro = mysqli_fetch_array($QueryFounder)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['id_founder']; ?></td>
                          <td><?php echo $pro['nama_founder']; ?></td>
                          <td><?php echo $pro['username']; ?></td>
                          <td><?php echo $pro['no_hp']; ?></td>
                          <td><?php echo $pro['email']; ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>module/data_founder/aksi_hapus.php?id_founder=<?php echo $pro['id_founder']; ?>"  class="btn btn-danger btn-fw">
                            <i class="mdi mdi-alert-outline"></i>Delete</button></a>
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