<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

// ambil data yang dikirim dari form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// data selain gambar
$id_founder = $_POST['id_founder'];
$nama_ruangan = $_POST['nama_ruangan'];
$jenis_ruangan = $_POST['jenis_ruangan'];
$ukuran = $_POST['ukuran'];
$kapasitas = $_POST['kapasitas'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
// set path folder tempat menyimpan gambar
$path = "../../upload/" . $nama_file;

if ($tipe_file == 'image/jpeg' || $tipe_file == 'image/png') {
    if ($ukuran_file <= 10000000) {
        if (move_uploaded_file($tmp_file, $path)) {
            $querySimpan = mysqli_query($koneksi, "INSERT INTO tb_ruangan(id_founder, 
                                                                        nama_ruangan, 
                                                                        jenis_ruangan, 
                                                                        ukuran,  
                                                                        kapasitas, 
                                                                        gambar, 
                                                                        alamat,
                                                                        deskripsi)
                                                            VALUES  ('$id_founder',
                                                                    '$nama_ruangan',
                                                                    '$jenis_ruangan',
                                                                    '$ukuran',
                                                                    '$kapasitas',
                                                                    '$nama_file',
                                                                    '$alamat',
                                                                    '$deskripsi')");
            if ($querySimpan) {
                echo "<script> alert('Data ruangan Berhasil Masuk'); window.location='$admin_url'+'adminfounder.php?module=list_ruangan';</script>";
            } else {
                // echo "<script> alert('Data ruangan Gagal Dimasukkan'); window.location='$admin_url'+'adminfounder.php?module=tambah_ruangan';</script>";
            }
        } else {
            // echo "<script> alert('Data Gambar ruangan Gagal Dimasukkan'); window.location='$admin_url'+'adminfounder.php?module=tambah_ruangan';</script>";
        }
    } else {
        // echo "<script> alert('Data Gambar Gagal Dimasukkan, Ukuran Gambar tidak bisa lebih dari 10mb'); window.location='$admin_url'+'adminfounder.php?module=tambah_ruangan';</script>";
    }
}
