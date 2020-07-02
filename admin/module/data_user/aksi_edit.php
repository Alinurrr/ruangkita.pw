<?php

session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

  $idUser = $_POST['id_user'];
  $nama = $_POST['Nama'];
  $email = $_POST['Email'];
  $password = $_POST['Password'];

  $queryEdit = mysqli_query($koneksi, "UPDATE tb_user SET nama='$nama' , email='$email', password='$password' WHERE id_user='$idUser'");


  if ($queryEdit) {
    echo "<script>alert('Data user Berhasil Diubah');window.location='$admin_url'+'adminweb.php?module=list_user';</script>";
  } else {
    echo "<script>alert('Data user Gagal Diubah');</script>";
  }
}
