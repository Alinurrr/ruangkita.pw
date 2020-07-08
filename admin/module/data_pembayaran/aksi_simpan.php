<?php

session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

  $metodePembayaran = $_POST['metode_pembayaran'];
  $kodePembayaran = $_POST['kode_pembayaran'];

  $querySimpan = mysqli_query($koneksi, "INSERT INTO tb_pembayaran (metode_pembayaran,kode_pembayaran) VALUES ('$metodePembayaran','$kodePembayaran')");


  if ($querySimpan) {
    echo "<script>alert('Data pembayaran Berhasil Disimpan');window.location='$admin_url'+'adminweb.php?module=list_pembayaran';</script>";
  } else {
    echo "<script>alert('Data pembayaran Gagal Disimpan');</script>";
  }
}
