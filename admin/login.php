<?php
include "../lib/koneksi.php";
$email = $_POST['Email'];
$password = $_POST['Password'];

$login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email' AND password = '$password'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

// apabila Email dan password ditemukan 
if ($ketemu > 0) {
    session_start();
    $_SESSION['email'] = $r['email'];
    $_SESSION['password'] = $r['password'];

    $email = $_SESSION['email'];
    $queryAdmin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
    $hasilQuery = mysqli_fetch_array($queryAdmin);
    $status = $hasilQuery['status'];

    if ($status == 1) {
        header('location:adminweb.php?module=home');
    } else if ($status == 2) {
        header('location:adminfounder.php?module=home');
    } else {
        header('Location: ../index.php');
    }
} else {
    echo "<center>LOGIN GAGAL! <br>
        Email atau password anda tidak benar. <br>
        atau akun anda sedang di blokir <br>";
    echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
