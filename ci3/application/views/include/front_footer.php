
<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(<?= base_url('asset/images/bg_back.png') ?>);">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4 pt-5">
				<div class="ftco-footer-widget pt-md-5 mb-4">
					<h2 class="ftco-heading-2">About</h2>

					<p><?php echo $about['isi_about']?><a href="<?= base_url('frontend/about')?>"><small>Read More...</small></a></p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
						<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 pt-5 border-left">
				<div class="ftco-footer-widget pt-md-5 mb-4">
					<h2 class="ftco-heading-2">Quick Link</h2>
					<div class="row justify-content-between px-5">
						<ul class="list-unstyled">
							<li><a href="<?= base_url()?>" class="py-2 d-block">Home</a></li>
							<li><a href="<?= base_url('frontend/about')?>" class="py-2 d-block">About Us</a></li>
							<li><a href="<?= base_url('frontend/product')?>" class="py-2 d-block">Product</a></li>
							<li><a href="<?= base_url('frontend/galery')?>" class="py-2 d-block">Galery</a></li>
							<li><a href="<?= base_url('frontend/berita')?>" class="py-2 d-block">Berita</a></li>
							<li><a href="<?= base_url('frontend/contact')?>" class="py-2 d-block">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 pt-5 border-left">
				<div class="ftco-footer-widget pt-md-5 mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map-marker"></span><span
								class="text"><?php echo $contact['alamat']?></span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span
									class="text"><?php echo $contact['telepon']?></span></a></li>
									<li><a href="#"><span class="icon fa fa-paper-plane"></span><span
										class="text"><?php echo $contact['email']?></span></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">

							<p style="color: white;margin-bottom: 0px;">
								<strong>
									CanteeCoffeKerinci - <?= date('Y') ?> | All rights reserved by <a href="http://mediatamaweb.co.id/" target="_blank">Mediatamaweb.co.id</a>
								</strong>
							</p>
						</div>
					</div>
				</div>
			</footer>



			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
			</svg></div>

			<div id="myDiv"></div>

			<script src="<?= base_url('asset/js/jquery.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/jquery-migrate-3.0.1.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/popper.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/jquery.easing.1.3.js') ?>"></script>
			<script src="<?= base_url('asset/js/jquery.waypoints.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/jquery.stellar.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/owl.carousel.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/jquery.magnific-popup.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/jquery.animateNumber.min.js') ?>"></script>
			<script src="<?= base_url('asset/js/bootstrap-datepicker.js') ?>"></script>
			<script src="<?= base_url('asset/js/scrollax.min.js') ?>"></script>
			<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
			</script>
			<script src="<?= base_url('asset/js/google-map.js') ?>"></script> -->
			<script src="<?= base_url('asset/js/main.js') ?>"></script>
			<script src="<?= base_url('asset/js/floating-wpp.min.js') ?>"></script>

			<script type="text/javascript">
				$('#myDiv').floatingWhatsApp({
					phone: '<?php echo $contact['wa']?>',
					popupMessage: 'Hello, ada yang bisa kami bantu?',
					showPopup: true,
					size: '55px'
				});
			</script>


		</body>

		</html>