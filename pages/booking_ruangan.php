<?php

$id_ruangan = $_GET['id_ruangan'];
$q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user AND id_ruangan='$id_ruangan'");

while ($r = mysqli_fetch_array($q)) {
?>


	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 wrap-about">
					<div class="img img-2 mb-4" style="background-image: url(admin/upload/<?php echo $r['gambar'] ?>);">
					</div>
				</div>
				<div class="col-md-6 wrap-about ftco-animate">

					<div class="heading-section">
						<div class="pl-md-5">
							<h2 align="center" class="mb-2"><?php echo ($r['nama_ruangan']) ?></h2>
							<h4 align="center">
								<font color="#fa6e83"><b>Founder : <?php echo ($r['nama']) ?></b></font>
							</h4>
							<h6 align="center"><i><?php echo ($r['deskripsi']) ?></i></h6>
						</div>
					</div>
					<div class="heading-section">
						<div class="pl-md-5">
							<h2 align="center" class="mb-2">Detail Ruangan</h2><br>
							<h4 class="heading">Alamat</h4>
							<p><?php echo ($r['alamat']) ?></p>
						</div>
					</div>
					<div class="pl-md-5">
						<div class="row">
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-diet"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Tipe</h3>
									<p> <?php

											if ($r['jenis_ruangan'] == 'R01') {
												echo "Gedung";
											} elseif ($r['jenis_ruangan'] == 'R02') {
												echo "Kafe";
											} elseif ($r['jenis_ruangan'] == 'R03') {
												echo "Pegunungan";
											} elseif ($r['jenis_ruangan'] == 'R04') {
												echo "Pedesaan";
											} elseif ($r['jenis_ruangan'] == 'R05') {
												echo "Pesisir Pantai";
											}

											?></p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-workout"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Ukuran</h3>
									<p><?php echo ($r['ukuran']) ?> M2</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-diet-1"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Kapasitas</h3>
									<p><?php echo ($r['kapasitas']) ?> Orang</p>
								</div>
							</div>
							<div class="services-2 col-lg-6 d-flex w-100">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="flaticon-first"></span>
								</div>
								<div class="media-body pl-3">
									<h3 class="heading">Harga</h3>
									<p>Rp. 999999 /hari</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>


			<div class="row no-gutters">
				<div class="col-md-12 wrap-about">
					<a href="<?php echo $base_url; ?>index_booking.php?id_ruangan=<?php echo $r['id_ruangan']; ?>" class="btn btn-primary btn-lg btn-block">Booking Ruangan</a>
				</div>
			</div>
		</div>
		</div>
	</section>
<?php } ?>
<section class="ftco-section testimony-section bg-light">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>Comment &amp; Feedbacks </h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img" style="background-image: url(images/person_1.jpg)">
							</div>
							<div class="text pl-4">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="fa fa-quote-left"></i>
								</span>
								<p>Tempat Meeting Ternyaman</p>
								<p class="name">Racky Henderson</p>
								<span class="position">Gedung</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img" style="background-image: url(images/person_2.jpg)">
							</div>
							<div class="text pl-4">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="fa fa-quote-left"></i>
								</span>
								<p>Tempat Meeting Ternyaman</p>
								<p class="name">Henry Dee</p>
								<span class="position">Pesisir Pantai</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img" style="background-image: url(images/person_3.jpg)">
							</div>
							<div class="text pl-4">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="fa fa-quote-left"></i>
								</span>
								<p>Tempat Meeting Ternyaman</p>
								<p class="name">Mark Huff</p>
								<span class="position">Pegunungan</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img" style="background-image: url(images/person_4.jpg)">
							</div>
							<div class="text pl-4">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="fa fa-quote-left"></i>
								</span>
								<p>Tempat Meeting Ternyaman</p>
								<p class="name">Rodel Golez</p>
								<span class="position">Kafe</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<br>

<!-- ___________ Bagian Rekomendasi  -->

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>Rekomendasi Ruangan</h2>
			</div>
		</div>
		<div class="row">
			<?php

			$q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan order by id_ruangan desc limit 3");

			while ($r = mysqli_fetch_array($q)) {
			?>

				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">



						<div class="img" style="background-image: url(admin/upload/<?php echo $r['gambar'] ?>);"></div>
						<div class="media-body py-4 px-3">
							<h3 class="heading"><?php echo ($r['nama_ruangan']) ?></h3>

							<p><span>
									<font color="#fa6e83"><b> Tipe: </b></font>
								</span>
								<?php

								if ($r['jenis_ruangan'] == 'R01') {
									echo "Gedung";
								} elseif ($r['jenis_ruangan'] == 'R02') {
									echo "Kafe";
								} elseif ($r['jenis_ruangan'] == 'R03') {
									echo "Pegunungan";
								} elseif ($r['jenis_ruangan'] == 'R04') {
									echo "Pedesaan";
								} elseif ($r['jenis_ruangan'] == 'R05') {
									echo "Pesisir Pantai";
								}

								?><br>
								<span>
									<font color="#fa6e83"><b> ukuran: </b></font>
								</span> <?php echo ($r['ukuran']) ?> m2<br>
								<span>
									<font color="#fa6e83"><b> kapasitas: </b></font>
								</span> <?php echo ($r['kapasitas']) ?> orang <br>
								<span>
									<font color="#fa6e83"><b> alamat: </b></font>
								</span> <?php echo ($r['alamat']) ?>
							</p>

							<p> <?php echo ($r['deskripsi']) ?></p>
							<p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
						</div>

					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>