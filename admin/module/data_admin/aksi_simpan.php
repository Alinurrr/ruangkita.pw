<?php 
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$username = $_POST['Username'];
$password = $_POST['Password'];
$no_hp = $_POST['No_hp'];
$email = $_POST['Email'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_admin(username, password, no_hp, email) VALUES  ('$username','$password','$no_hp','$email')");
            if ($querySimpan) {
                echo "<script> alert('Data member Berhasil Masuk'); window.location='$admin_url'+'adminweb.php?module=home';</script>";
            } else {
                echo "<script> alert('Data Member Gagal Dimasukkan'); window.location='$admin_url'+'adminweb.php?module=tambah_admin'; </script>";
            }
?>