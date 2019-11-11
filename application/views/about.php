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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
  <base href="<?= base_url('assets/css'); ?> ">
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
          <a href="#" class="site-btn header-btn">Login</a>
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

  <!-- Hero section -->
  <section class="hero-section set-bg" data-setbg="img/bg-about.jpg">
    <div class="container">
      <div class="hero-text text-red">
        <h2>Temukan Pengalaman Belajarmu Di Sini!</h2>
        <p class="text-white">ESTE merupakan sebuah platform yang berperan sebagai E-Learning atau media belajar secara online bagi
          teman-teman
        </p>
      </div>
    </div>
  </section>
  <!-- Hero section end -->
  <!-- Element -->
  <section class="container">
    <div class="block"></div>
    <div class="element">
      <h4 class="e-title">MEMBER YANG TELAH BERGABUNG</h4>
      <div class="row">
        <div class="col-lg-3 col-sm-6 cp-item">
          <div class="circle-progress" data-cpid="id-1" data-cpvalue="75" data-cpcolor="#e82154" data-cptitle="New Students"></div>
        </div>
        <div class="col-lg-3 col-sm-6 cp-item">
          <div class="circle-progress" data-cpid="id-2" data-cpvalue="83" data-cpcolor="#e82154" data-cptitle="New Teachers"></div>
        </div>
        <div class="col-lg-3 col-sm-6 cp-item">
          <div class="circle-progress" data-cpid="id-3" data-cpvalue="25" data-cpcolor="#e82154" data-cptitle="Creativity"></div>
        </div>
        <div class="col-lg-3 col-sm-6 cp-item">
          <div class="circle-progress" data-cpid="id-4" data-cpvalue="95" data-cpcolor="#e82154" data-cptitle="Prestige"></div>
        </div>
      </div>
    </div>
    <!-- Element -->
    <div class="element">
      <h4 class="e-title">JUMLAH GURU & SISWA</h4>
      <div class="row">
        <div class="col-lg-3 col-sm-6 fact-item">
          <h2>1200</h2>
          <p>New Students</p>
        </div>
        <div class="col-lg-3 col-sm-6 fact-item">
          <h2>15k</h2>
          <p>Grad Students</p>
        </div>
        <div class="col-lg-3 col-sm-6 fact-item">
          <h2>234</h2>
          <p>Qualified Teachers</p>
        </div>
        <div class="col-lg-3 col-sm-6 fact-item">
          <h2>3792</h2>
          <p>Amazing Courses</p>
        </div>
      </div>
    </div>
    <!-- Element -->
    <div class="element">
      <h4 class="e-title">KEUNTUNGAN BERGABUNG DENGAN KAMI</h4>
      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box">
          <h5><span>01.</span>Amazing Teachers</h5>
          <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem.</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box">
          <h5><span>02.</span>Training Center</h5>
          <p>Molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box">
          <h5><span>03.</span>Training Center</h5>
          <p>Itincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Page end -->

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

  <!-- footer section -->
  <footer class="footer-section spad pb-0">
    <div class="container">
      <div class="footer-top">
        <div class="footer-warp">
          <div class="row">
            <div class="widget-item col-lg-3">
              <h4>Kontak Kami</h4>
              <ul>
                <li>Fakultas Ilmu Komputer Unnes<br>Sekaran, Kec. Gunung Pati,<br>Semarang,
                  Jawa Tengah<br>50229
                </li>
                <li>+6289-999-999</li>
                <li>yourmail@gmail.com</li>
              </ul>
            </div>
            <div align="center" class="widget-item col-lg-3 footer-warp">
              <h4>SD</h4>
              <ul>
                <li><a href="">Matematika</a></li>
                <li><a href="">Bahasa Indonesia</a></li>
                <li><a href="">Ilmu Pengetahuan Alam</a></li>
                <li><a href="">Ilmu Pengetahuan Sosial</a></li>
              </ul>
            </div>
            <div align="center" class="widget-item col-lg-3">
              <h4>SMP</h4>
              <ul>
                <li><a href="">Matematika</a></li>
                <li><a href="">Bahasa Indonesia</a></li>
                <li><a href="">Bahasa Inggris</a></li>
                <li><a href="">Ilmu Pengetahuan Alam</a></li>
                <li><a href="">Ilmu Pengetahuan Sosial</a></li>
              </ul>
            </div>
            <div align="center" class="widget-item col-lg-3">
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
</body>

</html>