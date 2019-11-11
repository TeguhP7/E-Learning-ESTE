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
					<a href="<?php echo base_url('login/logout'); ?>" class="site-btn header-btn">Logout</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<span></span>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<section class="search-section ss-other-page">
		<div class="container">
			<div class="block1">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 ">
						<div class="section-title-1 text-white">
							<h2>ESTE - COURSES </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- course section -->
	<section class="course-section pb-0 margin">
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".SD">SD</li>
				<li class="control" data-filter=".SMP">SMP</li>
				<li class="control" data-filter=".SMA">SMA</li>
			</ul>
			<div class="row course-items-area">
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SD">
					<div class="course-item">
						<a href="<?= base_url('courseindex'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/sd_mtk.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('courseindex'); ?>">
									<h5>SD : Matematika</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMP">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/smp_mtk.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMP : Matematika</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMA">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/sma_mtk.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMA : Matematika</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SD">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/sd_ind.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SD : Bahasa Indonesia</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMP">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/smp_ind.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMP : Bahasa Indonesia</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMA">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/sma_ind.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMA : Bahasa Indonesia</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMP">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/2.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMP : Bahasa Inggris</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMA">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/2.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMA : Bahasa Inggris</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SD">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SD : Ilmu Pengetahuan Alam</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMP">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMP : Ilmu Pengetahuan Alam</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMA">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMA : Kimia</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMA">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMA : Biologi</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SD">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/4.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SD : Ilmu Pengetahuan Sosial</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMP">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/4.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMP : Ilmu Pengetahuan Sosial</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 SMA">
					<div class="course-item">
						<a href="<?= base_url('course'); ?>">
							<div class="course-thumb set-bg" data-setbg="img/courses/4.jpg">
							</div>
						</a>
						<div class="course-info">
							<div class="course-text">
								<a href="<?= base_url('course'); ?>">
									<h5>SMA : Sejarah</h5>
								</a>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- course section end -->


	<!-- footer section -->
	<footer class="footer-section pb-0">
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
</body>

</html>