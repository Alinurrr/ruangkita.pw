<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$nama_pengguna = $_POST['Nama'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$status = $_POST['Status'];

if (empty($nama_pengguna)) {
    echo "<center><script> alert('nama kosong!'); window.location='$admin_url'+'register.php';</script>";

} else if ($nama_pengguna ==" ") {
    echo "<center><script> alert('nama dengan karakter spasi tidak diperbolehkan!'); window.location='$admin_url'+'register.php';</script>";

}  else if ($nama_pengguna ==" ") {
    echo "<center><script> alert('nama dengan karakter spasi tidak diperbolehkan!'); window.location='$admin_url'+'register.php';</script>";

} else if (empty($email)) {
    echo "<center><script> alert('email kosong!'); window.location='$admin_url'+'register.php';</script>";

} else if (empty($password)){
    echo "<center><script> alert('password kosong!'); window.location='$admin_url'+'register.php';</script>";

} else if ($password == " "){
    echo "<center><script> alert('password dengan karakter spasi tidak diperbolehkan!'); window.location='$admin_url'+'register.php';</script>";

} else if ($password == "  "){
    echo "<center><script> alert('password dengan karakter spasi tidak diperbolehkan!'); window.location='$admin_url'+'register.php';</script>";

} else if (empty($status)){
    echo "<center><script> alert('status kosong!'); window.location='$admin_url'+'register.php';</script>";

}else{

		$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_user (nama, email, password, status) VALUES 
                                                  ('$nama_pengguna','$email','$password','$status')");

		if ($querySimpan) {
		    echo "<script> alert('Data member Berhasil disimpan silahkan login untuk masuk '); window.location='$admin_url'+'index.php';</script>";
		} else {
    		echo "<script> alert('Data Member Gagal Dimasukkan'); window.location='$admin_url'+'register.php'; </script>";
		}


}
