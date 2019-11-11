<!DOCTYPE html>
<html lang="en">

<head>
	<title>ESTE - Fun & Learn</title>
	<meta charset="UTF-8">
	<meta name="description" content="ESTE - Fun & Learn">
	<meta name="keywords" content="este, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon" />
	<base href="<?= base_url('assets/css'); ?> ">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/style.css" />


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="" class="site-btn header-btn">Login</a>
					<nav class="main-menu">
						<ul>
							<li><a href="<?= base_url(); ?>">Home</a></li>
							<li><a href="<?= base_url('about'); ?>">About us</a></li>
							<li><a href="<?= base_url('course'); ?>">Courses</a></li>
							<li><a href="<?= base_url('contact'); ?>">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/4.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="#">Home</a>
				<span>Contact</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="section-title text-white">
							<h2>ESTE - Fun & Learn</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Page -->
	<section class="contact-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>Beri Kami Saran</h2>
							<p>Saran anda sangatlah penting untuk menjadikan kami lebih baik lagi dimasa selanjutnya...</p>
						</div>
						<form class="contact-form">
							<input type="text" placeholder="Nama">
							<input type="text" placeholder="E-mail">
							<input type="text" placeholder="Subjek">
							<textarea placeholder="Pesan"></textarea>
							<button class="site-btn">Kirim</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-area">
						<div class="section-title text-left p-0">
							<h2>Kontak Kami</h2>
							<p>Silahkan hubungi kami untuk mendapatkan informasi lebih lanjut dan melakukan <i>maintenance.</i></p>
						</div>
						<div class="phone-number">
							<span>
								<h3>TELEPON</h3>
							</span>
							<h2>+6289-34243-2727</h2>
						</div>
						<ul class="contact-list">
							<li>Fakultas Ilmu Komputer Unnes<br>Sekaran, Kec. Gunung Pati,<br>Semarang,
								Jawa Tengah<br>50229</li>
							<li>+6289-999-999</li>
							<li>yourmail@gmail.com</li>

						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->


	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Bergabunglah dengan Kami!!!</h2>
				<p>Anda akan merasakan sensasi belajar mengajar yang seru & menyenangkan di ESTE.</p>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">Daftar Sekarang!</a>
			</div>
		</div>
	</section>
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="container">
			<div class="footer-top">
				<div class="footer-warp">
					<div class="row">
						<div align="center" class="widget-item col-lg-4 footer-warp">
							<h4>SD</h4>
							<ul>
								<li><a href="">Matematika</a></li>
								<li><a href="">Bahasa Indonesia</a></li>
								<li><a href="">Ilmu Pengetahuan Alam</a></li>
								<li><a href="">Ilmu Pengetahuan Sosial</a></li>
							</ul>
						</div>
						<div align="center" class="widget-item col-lg-4">
							<h4>SMP</h4>
							<ul>
								<li><a href="">Matematika</a></li>
								<li><a href="">Bahasa Indonesia</a></li>
								<li><a href="">Bahasa Inggris</a></li>
								<li><a href="">Ilmu Pengetahuan Alam</a></li>
								<li><a href="">Ilmu Pengetahuan Sosial</a></li>
							</ul>
						</div>
						<div align="center" class="widget-item col-lg-4">
							<h4>SMA</h4>
							<ul>
								<li><a href="">Matematika</a></li>
								<li><a href="">Bahasa Indonesia</a></li>
								<li><a href="">Bahasa Inggris</a></li>
								<li><a href="">Kimia</a></li>
								<li><a href="">Biologi</a></li>
								<li><a href="">Sejarah</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
				<div class="copyright">
					Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved ESTE - Fun &
					Learn <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://localhost/este/" target="_blank">ESTE</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>
</body>

</html>