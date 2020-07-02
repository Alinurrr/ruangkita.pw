<?php
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "dbruangkita";

// konekasi dan memilih database di server
$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_errno();
    exit();
}
