<?php
include "lib/config.php";
include "lib/koneksi.php";
session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
   header('Location: index.php');
} else {
   include "template/header_login.php";
   include "pages/profile_edit.php";
   include "template/footer.php";
}
