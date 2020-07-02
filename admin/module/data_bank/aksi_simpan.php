<?php 
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$nama_bank = $_POST['Nama_bank'];
$no_rekening = $_POST['No_rekening'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_bank (nama_bank, no_rekening) VALUES  ('$nama_bank','$no_rekening')");
            if ($querySimpan) {
                echo "<script> alert('Data rekening Berhasil Masuk'); window.location='$admin_url'+'adminfounder.php?module=home';</script>";
            } else {
                echo "<script> alert('Data rekening Gagal Dimasukkan'); window.location='$admin_url'+'adminfounder.php?module=tambah_bank'; </script>";
            }
?>