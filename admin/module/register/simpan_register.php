<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$nama_pengguna = $_POST['Nama'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$status = $_POST['Status'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_user (nama, email, password, status) VALUES 
                                                  ('$nama_pengguna','$email','$password','$status')");

if ($querySimpan) {
    echo "<script> alert('Data member Berhasil disimpan silahkan login untuk masuk '); window.location='$admin_url'+'index.php';</script>";
} else {
    echo "<script> alert('Data Member Gagal Dimasukkan'); window.location='$admin_url'+'register.php'; </script>";
}
