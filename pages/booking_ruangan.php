<?php

$id_ruangan = $_POST['id_ruangan'];
$tgl_sewa = $_POST['tgl_sewa'];
$q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user AND id_ruangan='$id_ruangan'");

while ($r = mysqli_fetch_array($q)) {
?>

	<section class="ftco-section bg-light">
		<div class="container">
			<?php

			if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) { ?>
				<div class="card">
					<h5 class="card-header">Pesanan Anda</h5>
					<div class="card-body">
						<p class="card-text">Lanjutkan sebagai tamu di bawah. Anda bisa masuk dengan akun RuangKita untuk kemudahan akses dan lainnya.</p>
						<a href="admin/" class="btn btn-primary">Masuk</a>
					</div>
				</div>

				<div class="row mt-3 no-gutters">
					<div class="col-md-6 mr-5 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url(admin/upload/<?php echo $r['gambar'] ?>);">
						</div>
					</div>
					<div class="col-md-5 wrap-about ftco-animate">

						<div class="row no-gutters">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4" align="center"> Data Kontak Pemesan</h3>
								<div id="form-message-warning" class="mb-4"></div>
								<div id="form-message-success" class="mb-4">

								</div>
								<form method="POST" action="index_pembayaran.php" id="contactForm" name="contactForm" class="contactForm">
									<input type="hidden" name="id_ruangan" value="<?php echo $r['id_ruangan']; ?>">
									<input type="hidden" name="tgl_sewa" value="<?php echo $tgl_sewa; ?>">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="name">Nama Lengkap</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="email">Email </label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="telp">Telpon</label>
												<input type="text" class="form-control" name="telp" id="telp" placeholder="Subject" required>
											</div>
										</div>
										<!-- <div class="col-md-12">
										<div class="form-group">
											<label class="label" for="#">Pesan</label>
											<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
										</div>
									</div> -->
										<div class="col-md-12">
											<div class="form-group">
												<div class="d-block my-3">
													<label class="label" for="#">Metode Pembayaran</label>
													<select class="custom-select" name="metode_pembayaran" id="inputGroupSelect01">
														<?php

														$QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
														while ($pro = mysqli_fetch_array($QueryFounder)) {
														?>

															<option value="<?php echo $pro['id_pembayaran']; ?>"><?php echo $pro['metode_pembayaran']; ?></option>

															<!-- <div class="custom-control custom-radio">
															<input id="credit" name="metode_pembayaran" value="<?php echo $pro['id_pembayaran']; ?>" type="radio" checked="checked" class="custom-control-input" required="">
															<label class="custom-control-label" for="credit"><?php echo $pro['metode_pembayaran']; ?></label>
														</div> -->

														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Lanjutkan Ke Pembayaran" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>


					</div>
				</div>

			<?php }  ?>

			<?php
			$email = $_SESSION['email'];
			$QueryUser = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
			while ($pro = mysqli_fetch_array($QueryUser)) {
			?>
				<div class="row mt-3 no-gutters">
					<div class="col-md-6 mr-5 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url(admin/upload/<?php echo $r['gambar'] ?>);">
						</div>
					</div>
					<div class="col-md-5 wrap-about ftco-animate">

						<div class="row no-gutters">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4" align="center"> Data Kontak Pemesan</h3>
								<div id="form-message-warning" class="mb-4"></div>
								<div id="form-message-success" class="mb-4">

								</div>
								<form method="POST" action="index_pembayaran.php" id="contactForm" name="contactForm" class="contactForm">
									<input type="hidden" name="id_ruangan" value="<?php echo $r['id_ruangan']; ?>">
									<input type="hidden" name="tgl_sewa" value="<?php echo $tgl_sewa; ?>">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="name">Nama Lengkap</label>
												<input type="text" class="form-control" name="name" id="name" value="<?php echo $pro['nama']; ?>" placeholder="Name">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="email">Email </label>
												<input type="email" class="form-control" name="email" id="email" value="<?php echo $pro['email']; ?>" placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="telp">Telpon</label>
												<input type="text" class="form-control" name="telp" id="telp" placeholder="Subject">
											</div>
										</div>
										<!-- <div class="col-md-12">
										<div class="form-group">
											<label class="label" for="#">Pesan</label>
											<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
										</div>
									</div> -->
										<div class="col-md-12">
											<div class="form-group">
												<div class="d-block my-3">
													<label class="label" for="#">Metode Pembayaran</label>
													<select class="custom-select" name="metode_pembayaran" id="inputGroupSelect01">
														<?php

														$QueryFounder = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran");
														while ($pro = mysqli_fetch_array($QueryFounder)) {
														?>

															<option value="<?php echo $pro['id_pembayaran']; ?>"><?php echo $pro['metode_pembayaran']; ?></option>

															<!-- <div class="custom-control custom-radio">
															<input id="credit" name="metode_pembayaran" value="<?php echo $pro['id_pembayaran']; ?>" type="radio" checked="checked" class="custom-control-input" required="">
															<label class="custom-control-label" for="credit"><?php echo $pro['metode_pembayaran']; ?></label>
														</div> -->

														<?php } ?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Lanjutkan Ke Pembayaran" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>


					</div>
				</div>
			<?php } ?>
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