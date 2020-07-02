 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3>Data Bank</h3>
                    <hr>
                    <br>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 400px"> Nama Bank </th>
                          <th> No Rekening </th>
                          <th style="width: 100px"> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                                  $QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_bank");
                                while ($pro = mysqli_fetch_array($QueryFounder)) {
                                ?>
                        <tr>
                          <td><?php echo $pro['nama_bank']; ?></td>
                          <td><?php echo $pro['no_rekening']; ?></td>
                         <td>
                            <a href="<?php echo $admin_url; ?>adminfounder.php?module=form_edit&id_bank=<?php echo $pro['id_bank']; ?>" class="btn btn-icons btn-inverse-primary">
                            <i class="mdi mdi-file-document"></i></button></a>
                            <a href="<?php echo $admin_url; ?>module/data_bank/aksi_hapus.php?id_bank=<?php echo $pro['id_bank']; ?>"  class="btn btn-icons btn-inverse-warning">
                            <i class="mdi mdi-alert-outline"></i></button></a>
                          </td>
                        </tr>

                        <?php } ?>
                        
                      </tbody>
                    </table>
                    <br>
                        <a href="<?php echo $base_url; ?>admin/adminfounder.php?module=tambah_bank"  class="btn btn-info btn-fw">
                        <i class="mdi mdi-upload"></i>Tambah Bank</button></a>

                  </div>
                </div>
              </div>
            </div>
          </div>