<?php
include "../lib/koneksi.php";
$email = $_POST['Email'];
$password = $_POST['Password'];



// apabila Email dan password ditemukan 
if (empty($email)) {
    echo "<center><script> alert('email kosong!')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>email anda kosong!</b><br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else if (empty($password)){
    echo "<center><script> alert('password kosong!')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>password anda kosong!</b><br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else if ($password == " "){
    echo "<center><script> alert('Karakter spasi tidak diperbolehkan')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>password anda kosong!</b><br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else if ($password == "  "){
    echo "<center><script> alert('Karakter spasi tidak diperbolehkan')</script>";
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<b>password anda kosong!</b><br>";
            echo "silahkan klik dibawah ini untuk login kembali<br>";
            echo "<br>";echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}   else{

            $login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email' AND password = '$password'");
            $ketemu = mysqli_num_rows($login);
            $r = mysqli_fetch_array($login);

    // apabila username dan password ditemukan 
            if ($ketemu > 0) {
                session_start();
                $_SESSION['email'] = $r['email'];
                $_SESSION['password'] = $r['password'];

                $email = $_SESSION['email'];
                $queryAdmin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
                $hasilQuery = mysqli_fetch_array($queryAdmin);
                $status = $hasilQuery['status'];


                    header('Location: ../index.php');

            } else {
                echo "<center>LOGIN GAGAL! <br>
                Email atau password anda tidak benar. <br>
                atau akun anda sedang di blokir <br>";
                echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
            }

}
