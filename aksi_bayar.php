<?php


$idRuangan = $_POST['id_ruangan'];
$tgl_sewa = $_POST['tgl_sewa'];
$name = $_POST['name'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$bayar = $_POST['harga'];
$metode_pembayaran = $_POST['metode_pembayaran'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_pemesanan(nama_pemesan, email_pemesan, telp_pemesan, tanggal_sewa, id_ruangan, id_metode_pembayaran, bayar) VALUES  ('$name','$email','$telp','$tgl_sewa','$idRuangan','$metode_pembayaran','$bayar')");
if ($querySimpan) {
   echo "<script> alert('Data Berhasil Masuk'); </script>";
} else {
   echo "<script> alert('Data Gagal Dimasukkan'); </script>";
}
