<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_user(nama, password, email, status) VALUES  ('$name','$password','$email',1)");
if ($querySimpan) {
    echo "<script> alert('Data member Berhasil Masuk'); window.location='$admin_url'+'adminweb.php?module=home';</script>";
} else {
    echo "<script> alert('Data Member Gagal Dimasukkan'); window.location='$admin_url'+'adminweb.php?module=tambah_admin'; </script>";
}
