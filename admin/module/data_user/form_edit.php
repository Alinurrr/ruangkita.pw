<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$idUser = $_GET['id_user'];

$queryEdit = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$idUser'");
$hasilQuery = mysqli_fetch_array($queryEdit);

$id_user  = $hasilQuery['id_user'];
$nama = $hasilQuery['nama'];
$email = $hasilQuery['email'];
$password = $hasilQuery['password'];


?>



<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Form Edit User</h2>

            <form class="forms-sample" action="../admin/module/data_user/aksi_edit.php" method="post">
              <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="InputUsername" placeholder="Enter email" name="Nama" value="<?php echo $nama; ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="Email" class="form-control" id="InputEmail" placeholder="Password" name="Email" value="<?php echo $email; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="Password" value="<?php echo $password; ?>">
              </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>