<!-- content -->

<!-- head -->

<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url(). 'asset/img/' . $slider['gambar']?>');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
			<div class="col-md-12 ftco-animate">
				<span class="subheading" style="font-weight: bold; font-size: 59px;"><?php echo $slider['nama_web']?></span>
				<br>

				<p class="caps"><?php echo $slider['desc']?></p>

				<br>
				<p class="caps"><a href="https://api.whatsapp.com/send?phone=6281380825399&text=Hello I'm Interested on your Product!" class="btn" style="background-color:#F96D00; color:white;"><i class="fa fa-whatsapp"></i> Hubungi Kami</a></p>
			</div>
		</div>
	</div>
</div>

<!-- tentang kami -->
<section class="ftco-section ftco-about ftco-no-pt img" style="background-image: url(<?= base_url('asset/images/banner/kanan.png')?>);">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-12 about-intro">
				<div class="row">
					<div class="col-md-6 d-flex align-items-stretch">
						<div class="img d-flex w-100 align-items-center justify-content-center"
						style="background-image:url(<?= base_url('asset/images/jenis_kopi.jpg')?>);">
					</div>
				</div>
				<div class="col-md-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<span class="subheading">About Us</span>

							<p><?php echo $about['isi_about']?></p>
							
							<p><a href="<?= base_url('frontend/about')?>" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i> More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<!-- mengapa kami -->
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate mb-4">
				<h2 class="mb-4">Why Should We</h2>
			</div>
		</div>
	</div>
	<div class="container mt-2">
		<div class="row  justify-content-center align-items-center">
			<div class="col-md-3 blog-entry ftco-animate justify-content-end">
				<div class="text mb-4"
				style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px; padding: 10px; min-height: 17em;">
				<div class="text-center">
					<span>
						<i class="fa fa-credit-card" style="font-size:70px; color: #153374;"></i>
					</span>
				</div>
				<h4 class="heading  text-center">Affordable prices</h4>
				<span style="color: black !important;"></span>
				<p>Coffee beans can be obtained at very affordable prices at Cantee Coffe Kerinci.</p>
			</div>
		</div>
		<div class="col-md-3 blog-entry ftco-animate justify-content-end">
			<div class="text mb-4"
			style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px; padding: 10px; min-height: 17em;">
			<div class="text-center">
				<span>
					<i class="fa fa-clock-o" style="font-size:70px; color: #153374;"></i>
				</span>
			</div>
			<h4 class="heading  text-center">Saving time</h4>
			<span style="color: black !important;"></span>
			<p>Ordering coffee beans at Cantee Coffe Kerinci can directly negotiate the price via WhatsApp, with the link provided.</p>
		</div>
	</div>
	<div class="col-md-3 blog-entry ftco-animate justify-content-end">
		<div class="text mb-4"
		style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px; padding: 10px; min-height: 17em;">
		<div class="text-center">
			<span>
				<i class="fa fa-percent" style="font-size:70px; color: #153374;"></i>
			</span>
		</div>
		<h4 class="heading  text-center">Discount</h4>
		<span style="color: black !important;"></span>
		<p>every order at Cantee Coffe Kerinci has some interesting discounts</p>
	</div>
</div>

</div>
</div>
</section>

<!-- jadwal berangkat -->
<section class="ftco-section img ftco-select-destination" style="background-image: url(<?= base_url('asset/images/banner/banner_bawahans.png')?>);">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Product</h2>
			</div>
		</div>
		<div class="row">
			<?php 
			foreach ($produk as $data) {
				?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('<?php echo base_url(). 'asset/produk/' . $data->foto_produk?>');">
						</a>
						<div class="text" style="min-height: 18em;">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one mr-3">
									<span class="day" style="font-size: 15px;">Order Now</span>
								</div>
							</div>
							<h3 class="heading text-center" style="min-height: 3em;">
								<i class="fa fa-coffee" style="font-size:20px; color: #153374;"></i>
								<p style="font-size: 15px; color: black" ><?= $data->nama_produk?></p> 
							</h3>
							
							<span style="color: black !important;"><hr></span>
							<div class="div">
								<p><?= $data->desc?></p>
							</div>
							<div class="mx-auto" class="text-align: center;">
								<a href="https://api.whatsapp.com/send?phone=6281380825399&text=Hello I'm Interested on your Product!" class="text-center btn btn-primary btn-block" target="_blank"> <i class="fa fa-whatsapp"></i> Order Now</a>

								<!-- <a href="" class="text-center btn btn-primary btn-block" target="_blank"> <i class="fa fa-phone"></i> Telpon Sekarang</a> -->
							</div>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
		<p class="text-center mt-2"><a href="<?= base_url('frontend/product')?>" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i> More</a></p>
	</div>
</section>


<!-- cara pesan -->
<section class="ftco-intro-tes" style="background-image: url(<?= base_url('asset/images/banner/banner_bawah.jpg')?>);">
	<div class="overlay-tes"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="heading" style="color: white;font-family: 'arizona', cursive;">"When words don't speak much anymore, a cup of coffee can be an intermediary and lighten the mood".</h2>
			</div>
		</div>
	</div>
</section>




<!-- Armada  -->
<section class="ftco-section img ftco-select-destination" style="background-image: url(asset/images/banner/banner_bawahansk.png);">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Galery</h2>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($galerys as $data) {
				?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry" style="width: 100%;">
						<a href="" class="block-20"
						style="background-image: url('<?php echo base_url(). 'asset/galery/' . $data->foto_galery?>');">
					</a>
					<div class="text" style="min-height: 5em;">

						<h3 class="heading" style="min-height: 3em;"><a
							href=""><?= $data->nama_galery?></a></h3>  
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<p class="text-center mt-2"><a href="<?= base_url('frontend/galery')?>" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i> More</a></p>
	</div>
</section>




<!-- berita  -->
<section class="ftco-section img ftco-select-destination" style="background-image: url(<?= base_url('asset/images/banner/abu_abupng.png')?>);">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">News</h2>
			</div>
		</div>
		<div class="row">
			
			<?php 
			foreach ($beritas as $data) {
				?>

				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="" class="block-20"
						style="background-image: url('<?php echo base_url(). 'asset/berita/' . $data->gambar?>');">
					</a>
					<div class="text" style="min-height: 18em;">
						<!--<div class="d-flex align-items-center mb-4 topp">-->
						<!--	<div class="one mr-3">-->
						<!--		<span class="day"><?= date('d', strtotime($data->tgl_upload))?></span>-->
						<!--	</div>-->
						<!--	<div class="two">-->
						<!--		<span class="yr"><?= date('Y', strtotime($data->tgl_upload))?></span>-->
						<!--		<span class="mon" style="color: white;"><?= date('M', strtotime($data->tgl_upload))?></span>-->
						<!--	</div>-->
						<!--</div>-->
						<h3 class="heading" style="min-height: 3em;"><a href=""><?= $data->judul ?></a></h3>
						<span style="color: black !important;"><?= $data->desc?></span>
						<p><a href="<?= base_url('frontend/detail_berita/'). $data->id?>" class="btn btn-primary btn-block">Read more</a></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<p class="text-center mt-2"><a href="<?= base_url('frontend/berita')?>" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i> More</a></p>
</div>
</section>



<!-- kontak -->
<section class="ftco-section ftco-no-pb contact-section mb-4 ">
	<div class="container">
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Contact</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row d-flex contact-info">
			<div class="col-md-4 d-flex">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-map-marker"></span>
					</div>
					<h3 class="mb-2">Address</h3>
					<p><?php echo $contact['alamat']?></p>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-phone"></span>
					</div>
					<h3 class="mb-2">Phone Number</h3>
					<p><a href=""><?php echo $contact['telepon']?></a></p>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-paper-plane"></span>
					</div>
					<h3 class="mb-2">E-mail</h3>
					<p><a href=""><?php echo $contact['email']?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section contact-section ftco-no-pt">
	<div class="container">
		<div class="row block-9">
			<div class="col-md-6 order-md-last d-flex">
				
				<form action="<?= base_url('frontend/aksiInsertMessage')?>" method="POST" class="bg-light p-5 contact-form">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4">Message</h2>
					</div>
					<!-- Alert -->
					<?php if ($this->session->flashdata('flash')) : ?>
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-success" role="alert">
									Data Message<strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>

						</div>
					<?php endif; ?>
					<div class="form-group">
						<input type="text" class="form-control" name="nama" placeholder="Your Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Your Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="kepala" placeholder="Subject" required>
					</div>
					<div class="form-group">
						<textarea name="isi_pesan" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit"  class="btn btn-primary py-3 px-5">Send Text</button>
					</div>
				</form>

			</div>

			<div class="col-md-6 d-flex">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.229198976948!2d100.39547101427327!3d-0.9846203356480341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4ba3580518f7b%3A0xd30b7ea7896c7d8d!2sJl.%20Bakti%20Abri%20No.27%2C%20Pagambiran%20Ampalu%20Nan%20XX%2C%20Kec.%20Lubuk%20Begalung%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025225!5e0!3m2!1sid!2sid!4v1637634826584!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			</div>
		</div>
	</div>
</section>


<!-- content -->


