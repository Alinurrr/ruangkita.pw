<?php
include "lib/config.php";
include "lib/koneksi.php";
session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
	header('Location: index.php');
} else {
	$email = $_SESSION['email'];
	$queryAdmin = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
	$user = mysqli_fetch_array($queryAdmin);


?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>RungKita - Tempat Cari Ruang Meeting Terasik</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="asset/css/animate.css">

		<link rel="stylesheet" href="asset/css/owl.carousel.min.css">
		<link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="asset/css/magnific-popup.css">

		<link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="asset/css/jquery.timepicker.css">

		<link rel="stylesheet" href="asset/css/flaticon.css">
		<link rel="stylesheet" href="asset/css/style.css">

		<link rel="shortcut icon" href="admin/assets/images/favicon01.png" />
	</head>

	<body>
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col d-flex align-items-center">
						<p class="mb-0 phone"><span class="mailus"><i class="fa fa-whatsapp" aria-hidden="true"></i> </span> <a href="#">&nbsp; +62 8587 8938 836</a>
							<font color="black"> &nbsp;&nbsp; Atau &nbsp;&nbsp; </font> <span class="mailus"><i class="fa fa-envelope-o" aria-hidden="true"></i></span> <a href="#">&nbsp; ruangkita@gmail.com</a>
						</p>
					</div>
					<div class="col d-flex justify-content-end">
						<div class="social-media">
							<p class="mb-0 d-flex">
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="login_index.php"><i class="fa fa-home" aria-hidden="true"></i> Ruang<span>Kita</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="login_index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="index_booking.php" class="nav-link">Daftar Ruangan</a></li>

						<li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
							<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

								<?= $user['nama'];  ?>
								<img class="img-xs rounded-circle" height="30" src="admin/assets/images/faces/face00.jpg" alt="Profile image"> </a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
								<div class="dropdown-header text-center">
									<img class="img-md rounded-circle" src="admin/assets/images/faces/face00.jpg" alt="Profile image">
									<p class="mb-1 mt-3 font-weight-semibold"><?= $user['nama'];  ?></p>
									<p class="font-weight-light text-muted mb-0"><?= $user['email'];  ?></p>
								</div>
								<a class="dropdown-item">My Profile <i class="dropdown-item-icon ti-dashboard"></i></a>
								<a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
								<a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
								<a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
								<a class="dropdown-item" href="admin/logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
							</div>
						</li>
						<!-- <li class="nav-item"><a href="asset/services.html" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="asset/rooms.html" class="nav-link">Ruang Meeting</a></li>
					<li class="nav-item"><a href="asset/contact.html" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="asset/contact.html" class="nav-link">Register</a></li> -->

					</ul>
				</div>
				</ul>
			</div>
			</div>
		</nav>
	<?php } ?>
	<!-- END nav -->