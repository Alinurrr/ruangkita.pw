<?php
include "lib/config.php";
include "lib/koneksi.php";
session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
   include "template/header.php";
} else {
   include "template/header_login.php";
}
include "pages/pembayaran.php";
include "template/footer.php";
