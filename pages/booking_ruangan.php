    <section class="hero-wrap hero-wrap-2" style="background-image: url('asset/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Booking Ruangan</h1>
          </div>
        </div>
      </div>
    </section>
   
   	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			 <?php
            
            	$q = mysqli_query ($koneksi, "SELECT * FROM tb_ruangan where jenis_ruangan = 'R01'");
              
            	while ($r=mysqli_fetch_array($q)){
          		?>

    			<div class="col-md-8">
    				<div><img src="admin/upload/<?php echo $r['gambar']?>" height="460" width="860"></div>
    			</div>
    			<div class="col-md-4 p-4 p-md-5 bg-white">
    				<h2 class="font-weight-bold mb-4">Detail Ruangan</h2><br>
    				<span><font color="#fa6e83"><b>  Nama Ruangan : </b></font></span><h6><?php echo ($r['nama_ruangan'])?></h6> <br>

                 	<p><span><font color="#fa6e83"><b>  Tipe: </b></font></span> 
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
                    <span><font color="#fa6e83"><b>  ukuran: </b></font></span>  <?php echo ($r['ukuran'])?> m2<br>
                    <span><font color="#fa6e83"><b>  kapasitas: </b></font></span> <?php echo ($r['kapasitas'])?> orang  <br>
                    <span><font color="#fa6e83"><b>  alamat: </b></font></span>  <?php echo ($r['alamat'])?><br>
                    <span><font color="#fa6e83"><b>  deskripsi: </b></font></span>  <?php echo ($r['deskripsi'])?>
                  </p>
    			</div>
    			<?php } ?>
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4" align="center"> Isi Form Berikut</h3>
										<div id="form-message-warning" class="mb-4"></div> 
					      		<div id="form-message-success" class="mb-4">
					            
					      		</div>
										<form method="POST" id="contactForm" name="contactForm" class="contactForm">
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
														<label class="label" for="subject">Telpon</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Alamat</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Booking" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3>Hubungi Kami Bila Terdapat Kendala</h3>
										<p class="mb-4">Jangan Risau,Ceritalah,Setiap Saat Pasti Kami Layani</p>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Alamat:</span> Jalan Jogja Magelang km 08</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Telfon:</span> <a href="tel://1234567920">+62 8587 8938 836</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:info@yoursite.com">ruangkita@gmail.com</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website</span> <a href="#">ruangkita.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>