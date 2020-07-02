 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2>Konfirmasi Pembayaran</h2>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 100px"> Nama Pengirim </th>
                          <th> Dari Bank </th>
                          <th> Jumlah </th>
                          <th> Gambar </th>
                          <th> Id Pesanan </th>
                          <th style="width: 100px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryAdmin = mysqli_query($koneksi, "SELECT * FROM tb_konfirmasi");
                                while ($pro = mysqli_fetch_array($QueryAdmin)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['nama_pengirim']; ?></td>
                          <td><?php echo $pro['bank_pengirim']; ?></td>
                          <td><?php echo $pro['jumlah_pengiriman']; ?></td>
                          <td>
                                <img src="upload/<?= $pro['gambar'];?>" class="img" height="100">
                          </td>
                          <td><?php echo $pro['id_pesanan']; ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>module/data_konfirmasi/aksi_hapus.php?id_konfirmasi=<?php echo $pro['id_konfirmasi']; ?>"  class="btn btn-icons btn-inverse-warning">
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