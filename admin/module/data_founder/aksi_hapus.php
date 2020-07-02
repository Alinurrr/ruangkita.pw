<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idFounder = $_GET['id_founder'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tb_founder WHERE id_founder = '$idFounder'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_founder';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_founder';
        </script>";
    }
}
