<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$idPembayaran = $_GET['id_pembayaran'];

$queryEdit = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran WHERE id_pembayaran='$idPembayaran'");
$hasilQuery = mysqli_fetch_array($queryEdit);

$id_pembayaran  = $hasilQuery['id_pembayaran'];
$metode_pembayaran = $hasilQuery['metode_pembayaran'];
$kode_pembayaran = $hasilQuery['kode_pembayaran'];

?>



<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Form Edit Pembayaran</h2>

            <form class="forms-sample" action="../admin/module/data_pembayaran/aksi_edit.php" method="post">
              <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Metode Pembayaran</label>
                <input type="text" class="form-control" id="InputMetodePembayaran" name="metode_pembayaran" value="<?php echo $metode_pembayaran; ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kode Pembayaran</label>
                <input type="text" class="form-control" id="InputKodePembayaran" name="kode_pembayaran" value="<?php echo $kode_pembayaran; ?>" required>
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>