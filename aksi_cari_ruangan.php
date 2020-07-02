<?php 
include "lib/config.php";
include "lib/koneksi.php";

$jenis_ruangan = $_POST['jenis_ruangan'];
$ukuran = $_POST['ukuran'];

//$tanggal = $_POST['waktu'];
//$waktu = $_POST['kapasitas'];
$kapasitas = $_POST['kapasitas'];


	//$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE tipe_ruangan='$jenis_ruangan'  AND tanggal='$tanggal' AND  waktu='$waktu' AND kapasitas='$kapasitas' ");

		//satu form diisi

	if (!empty($kapasitas)) {
		$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE kapasitas =$kapasitas ");

		if ($queryCari) {
			echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
		} else {
			echo "<script> alert('Ruangan dengan kapasitas $kapasitas Orang tidak Ditemukan');window.location = '$base_url'+'index.php'</script>";
		}
	} else if (!empty($jenis_ruangan)) {
		$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE jenis_ruangan =$jenis_ruangan ");

		if ($queryCari) {
			echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
		} else {
			echo "<script> alert('Ruangan jenis tidak Ditemukan');window.location = '$base_url'+'index.php'</script>";
		} 
	} else if (!empty($ukuran)) {
		$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE ukuran =$ukuran ");

		if ($queryCari) {
			echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
		} else {
			echo "<script> alert('Ruangan Gagal Ditemukan');window.location = '$base_url'+'index.php'</script>";
		}
	

		//dua form diisi

	} else if (!empty($kapasitas && $ukuran)) {
		$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE kapasitas =$kapasitas AND ukuran = $ukuran");

		if ($queryCari) {
			echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
		} else {
			echo "<script> alert('Ruangan Gagal Ditemukan');window.location = '$base_url'+'index.php'</script>";
		}
	} else if (!empty($ukuran && $jenis_ruangan)) {
		$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE ukuran =$ukuran AND jenis_ruangan = $jenis_ruangan");

		if ($queryCari) {
			echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
		} else {
			echo "<script> alert('Ruangan Gagal Ditemukan');window.location = '$base_url'+'index.php'</script>";
		}
	} else if (!empty($jenis_ruangan && $kapasitas)) {
		$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE jenis_ruangan =$jenis_ruangan AND kapasitas = $kapasitas");

		if ($queryCari) {
			echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
		} else {
			echo "<script> alert('Ruangan Gagal Ditemukan');window.location = '$base_url'+'index.php'</script>";
		}

		//semua form diisi
	} else {
			$queryCari = mysqli_query($koneksi,"SELECT *  FROM tb_ruangan WHERE jenis_ruangan =$jenis_ruangan ");

			if ($queryCari) {
				echo "<script>alert('Ruangan Ditemukan');window.location = '$base_url'+'index_cari_ruangan.php'</script>";
			} else {
				echo "<script> alert('Ruangan Gagal Ditemukan karena anda tidak mengisi data apapun pada form pencarian');window.location = '$base_url'+'index.php'</script>";
			}
	}
	
	

?>