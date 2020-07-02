<?php 
include "../lib/config.php";
include "../lib/koneksi.php";
 
$idAdmin=$_GET['id_admin'];

$queryEdit=mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id_admin='$idAdmin'");
$hasilQuery=mysqli_fetch_array($queryEdit);

$id_admin  =$hasilQuery['id_admin'];  
$username =$hasilQuery['username'];
$password=$hasilQuery['password'];
$no_hp = $hasilQuery['no_hp'];
$email=$hasilQuery['email'];


?>



                  <div class="main-panel">
                  <div class="content-wrapper">
                  <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Form Edit Admin</h2>
                        
                        <form class="forms-sample" action="../admin/module/data_admin/aksi_edit.php" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="InputUsername" placeholder="Enter email" name="Username"  value="<?php echo $username; ?>" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="Password"  value="<?php echo $password; ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">No_Hp</label>
                            <input type="text" class="form-control" id="InputNo_hp" placeholder="Password" name="No_hp"  value="<?php echo $no_hp; ?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="Email" class="form-control" id="InputEmail" placeholder="Password" name="Email"  value="<?php echo $email; ?>">
                          </div>

                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div> 
                  </div>
                  </div> 