<?php

session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

  $idPembayaran = $_POST['id_pembayaran'];
  $metodePembayaran = $_POST['metode_pembayaran'];
  $kodePembayaran = $_POST['kode_pembayaran'];

  $queryEdit = mysqli_query($koneksi, "UPDATE tb_pembayaran SET metode_pembayaran='$metodePembayaran', kode_pembayaran='$kodePembayaran' WHERE id_pembayaran='$idPembayaran'");


  if ($queryEdit) {
    echo "<script>alert('Data pembayaran Berhasil Diubah');window.location='$admin_url'+'adminweb.php?module=list_pembayaran';</script>";
  } else {
    echo "<script>alert('Data pembayaran Gagal Diubah');</script>";
  }
}
