<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$idPesanan = $_GET['id_pesanan'];

$queryEdit = mysqli_query($koneksi, "SELECT * FROM tb_pemesanan WHERE id_pesanan='$idPesanan'");
$pro = mysqli_fetch_array($queryEdit);

$id_pesanan  = $pro['id_pesanan'];

?>



<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-12">

            <div class="card">
               <div class="card-header">
                  Form Edit Status Pembayaran
               </div>
               <div class="card-body">
                  <h5 class="card-title"><?= $pro['nama_pemesan'];  ?></h5>
                  <h5 class="card-text"><?= $pro['email_pemesan'];  ?></h5>
                  <p class="card-text">Rp.<?= $pro['bayar'];  ?></p>
                  <div class="dropdown">
                     <form class="forms-sample" action="../admin/module/pesanan_admin/aksi_edit.php" method="post">
                        <input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>">
                        <div class="form-group">
                           <label for="status_pembayaran">Status Pembayaran</label>
                           <select class="form-control" id="status_pembayaran" name="status_pembayaran">
                              <option value="0">Pending</option>
                              <option value="1">Pay</option>
                              <option value="2">Cancel</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                     </form>

                  </div>
               </div>
            </div>


         </div>
      </div>
   </div>