<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idRuangan = $_GET['id_ruangan'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tb_ruangan WHERE id_ruangan = '$idRuangan'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location='$admin_url'+'adminfounder.php?module=list_ruangan';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location='$admin_url'+'adminfounder.php?module=list_ruangan';
        </script>";
    }
}
