<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Form Tambah Metode Pembayaran</h2>

            <form class="forms-sample" action="../admin/module/data_pembayaran/aksi_simpan.php" method="post">
              <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Metode Pembayaran</label>
                <input type="text" class="form-control" id="InputMetodePembayaran" name="metode_pembayaran" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kode Pembayaran</label>
                <input type="text" class="form-control" id="InputKodePembayaran" name="kode_pembayaran" required>
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>