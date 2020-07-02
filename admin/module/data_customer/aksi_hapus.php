<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idPengguna = $_GET['id_pengguna'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tb_customer WHERE id_pengguna = '$idPengguna'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_customer';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_customer';
        </script>";
    }
}
