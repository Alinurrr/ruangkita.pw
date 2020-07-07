<?php

include "../lib/config.php";
include "../lib/koneksi.php";

$idRuangan = $_POST['id_ruangan'];
$tgl_sewa = $_POST['tgl_sewa'];
$name = $_POST['name'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$metode_pembayaran = $_POST['metode_pembayaran'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1><?= $idRuangan; ?></h1>
   <h1><?= $tgl_sewa; ?></h1>
   <h1><?= $name; ?></h1>
   <h1><?= $email; ?></h1>
   <h1><?= $telp; ?></h1>
   <h1><?= $metode_pembayaran; ?></h1>
   <h1></h1>
   <h1></h1>
   <h1></h1>
   <h1></h1>
   <h1></h1>
</body>

</html>