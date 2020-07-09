<?php

session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
  include "../../../lib/koneksi.php";

  $idPesanan = $_POST['id_pesanan'];
  $status_pembayaran = $_POST['status_pembayaran'];

  $queryEdit = mysqli_query($koneksi, "UPDATE tb_pemesanan SET status_pembayaran='$status_pembayaran'WHERE id_pesanan='$idPesanan'");


  if ($queryEdit) {
    echo "<script>alert('Data Status Pemesanan Berhasil Diubah');window.location='$admin_url'+'adminweb.php?module=list_pesanan';</script>";
  } else {
    echo "<script>alert('Data Status Pemesanan Gagal Diubah');</script>";
  }
}
