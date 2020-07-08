<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idPembayaran = $_GET['id_pembayaran'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tb_pembayaran WHERE id_pembayaran = '$idPembayaran'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_pembayaran';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_pembayaran';
        </script>";
    }
}
