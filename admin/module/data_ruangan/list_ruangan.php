 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3>Data Ruangan</h3>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Nama Ruangan </th>
                          <th> Gambar </th>
                          <th> Jenis Ruangan</th>
                          <th> Ukuran </th>
                          <th> Kapasitas </th>
                          <th> Alamat </th>
                          <th> Deskripsi </th>
                          <th style="width: 80px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_ruangan");
                                while ($pro = mysqli_fetch_array($QueryFounder)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['nama_ruangan']; ?></td>
                          <td>
                                <img src="upload/<?= $pro['gambar'];?>" class="img" height="100">
                          </td>
                          <td><?php echo $pro['jenis_ruangan']; ?></td>
                          <td><?php echo $pro['ukuran']; ?></td>
                          <td><?php echo $pro['kapasitas']; ?></td>
                          <td><?php echo $pro['alamat']; ?></td>
                          <td><?php echo $pro['deskripsi']; ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>adminfounder.php?module=form_edit&id_ruangan=<?php echo $pro['id_ruangan']; ?>" class="btn btn-icons btn-inverse-primary">
                            <i class="mdi mdi-file-document"></i></button></a>
                            <a href="<?php echo $admin_url; ?>module/data_ruangan/aksi_hapus.php?id_ruangan=<?php echo $pro['id_ruangan']; ?>"  class="btn btn-icons btn-inverse-warning">
                            <i class="mdi mdi-alert-outline"></i></button></a>
                          </td>
                        </tr>

                        <?php } ?>
                        
                      </tbody>
                    </table>
                    <br>
                    <a href="<?php echo $base_url; ?>admin/adminfounder.php?module=tambah_ruangan"  class="btn btn-info btn-fw">
                            <i class="mdi mdi-upload"></i>Tambah Ruangan</button></a>

                  </div>
                </div>
              </div>
            </div>
          </div>