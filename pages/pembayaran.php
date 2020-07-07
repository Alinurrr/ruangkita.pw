<?php

$id_ruangan = $_POST['id_ruangan'];
$tgl_sewa = $_POST['tgl_sewa'];
$name = $_POST['name'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$q = mysqli_query($koneksi, "SELECT * FROM tb_ruangan r, tb_user u WHERE r.id_founder = u.id_user AND id_ruangan='$id_ruangan'");

while ($r = mysqli_fetch_array($q)) {
?>

	<section class="ftco-section bg-light">
		<div class="container">


			<div class="row mt-3 no-gutters">
				<div class="col-md-6 mr-5 wrap-about">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted">Rincian Harga</span>
					</h4>
					<form class="card p-2" action="aksi_bayar.php" method="POST">
						<input type="hidden" name="id_ruangan" value="<?php echo $r['id_ruangan']; ?>">
						<input type="hidden" name="tgl_sewa" value="<?php echo $tgl_sewa; ?>">
						<input type="hidden" name="name" value="<?php echo $name; ?>">
						<input type="hidden" name="email" value="<?php echo $email; ?>">
						<input type="hidden" name="telp" value="<?php echo $telp; ?>">
						<input type="hidden" name="metode_pembayaran" value="<?php echo $metode_pembayaran; ?>">
						<ul class="list-group mb-3">
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Harga Sewa</h6>
									<small class="text-muted">jam 09.00 - 16.00 WIB</small>
								</div>
								<div class="row mt-3">
									<h6>Rp. <?php echo ($r['harga']) ?></h6>
								</div>

							</li>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Biaya Oprasional</h6>
								</div>
								<div class="row mt-3">
									<h6>Rp. 0,00</h6>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
							</li>
							<input type="hidden" name="id_ruangan" value="<?php echo $r['id_ruangan']; ?>">
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<h6 class="my-0">Total</h6>
								<div class="form-group row">
									<h6>Rp. <?php echo ($r['harga']) ?></h6>
								</div>
							</li>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="input-group-append">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Bayar</button>
								</div>

							</li>
						</ul>


					</form>
				</div>
				<div class="col-md-5 wrap-about ftco-animate">

					<div class="row no-gutters">
						<h3 class="mb-4" align="center"> Data Pesanan</h3>
						<div class="contact-wrap w-100 p-md-3 p-4">
							<div id="form-message-warning" class="mb-4"></div>
							<div id="form-message-success" class="mb-4">

							</div>
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row no-gutters">
									<div class="col-md-6">
										<img src="admin/upload/<?php echo $r['gambar'] ?>" class="card-img" alt="...">
									</div>
									<div class="col-md-6">
										<div class="card-body">
											<h6 class="card-title"><?php echo $r['nama_ruangan'] ?></h6>
											<p class="card-text"><?php echo $r['alamat'] ?></p>
										</div>
									</div>
								</div>
								<ul class="list-group mb-3">
									<li class="list-group-item d-flex justify-content-between lh-condensed">
										<div>
											<p class="my-0">Tanggal Sewa</p>
										</div>
										<div class="row ">
											<p><?php echo $tgl_sewa; ?></p>

										</div>
									</li>
									<li class="list-group-item d-flex justify-content-between lh-condensed">
										<div>
											<p class="my-0">Waktu</p>
										</div>
										<div class="row ">
											<p>jam 09.00 - 16.00 WIB</p>

										</div>
									</li>
									<li class="list-group-item d-flex justify-content-between lh-condensed">
										<div>
											<p class="my-0">Nama Pemesan</p>
										</div>
										<div class="row ">
											<p><?php echo $name; ?></p>
										</div>
									</li>
									<li class="list-group-item d-flex justify-content-between lh-condensed">
										<div>
											<p class="my-0">Tamu</p>
										</div>
										<div class="row ">
											<p>Max <?php echo $r['kapasitas']; ?> orang</p>
										</div>
									</li>

								</ul>
							</div>
						</div>

					</div>


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