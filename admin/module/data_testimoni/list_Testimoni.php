 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3>Data Testimoni</h3>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 110px"> Id Testi </th>
                          <th style="width: 110px"> Id Penguna </th>
                          <th> Nama Pengguna </th>
                          <th> Komentar</th>
                          <th> Rating </th>
                          <th style="width: 80px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_customer k, 
                                    tb_testimoni j WHERE k.id_pengguna=j.id_pengguna ");
                                while ($pro = mysqli_fetch_array($QueryFounder)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['id_testi']; ?></td>
                          <td><?php echo $pro['id_pengguna']; ?></td>
                          <td><?php echo $pro['nama_pengguna']; ?></td>
                          <td><?php echo $pro['komentar']; ?></td>
                          <td><?php echo $pro['rating']; ?></td>

                          <td>
                            <a href="<?php echo $admin_url; ?>module/data_testimoni/aksi_hapus.php?id_testi=<?php echo $pro['id_testi']; ?>"  class="btn btn-danger btn-fw">
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