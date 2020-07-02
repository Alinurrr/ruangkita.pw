 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3>Data Aktivitas</h3>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Pengguna </th>
                          <th> Tanggal </th>
                          <th> Waktu Masuk</th>
                          <th> Waktu Keluar </th>
                          <th> Id Ruangan </th>
                          <th> Pemilik </th>
                          <th> Pembayaran </th>
                          <th style="width: 80px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryPesan = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan");
                                while ($pro = mysqli_fetch_array($QueryPesan)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['id_pengguna']; ?></td>
                          <td><?php echo $pro['tanggal_pemesanan']; ?></td>
                          <td><?php echo $pro['waktu_masuk']; ?></td>
                          <td><?php echo $pro['waktu_keluar']; ?></td>
                          <td><?php echo $pro['id_ruangan']; ?></td>
                          <td><?php echo $pro['id_founder']; ?></td>
                          <td><?php echo $pro['id_bank']; ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>module/pemesanan_admin/aksi_hapus.php?id_pesanan=<?php echo $pro['id_pesanan']; ?>"  class="btn btn-icons btn-inverse-warning">
                            <i class="mdi mdi-alert-outline"></i></button></a>
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