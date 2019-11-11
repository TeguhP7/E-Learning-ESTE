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
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <base href="<?= base_url('assets/css'); ?>">
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
                    <a class="rounded-pill site-btn header-btn" href="<?= base_url('login'); ?>">Login</a>
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
    <section class="hero-section set-bg" data-setbg="img/bg1.png">
        <div class="container">
            <div class="hero-text text-white">
                <h2>Fun, Learn, & Happy Together</h2>
                <p class="text-white">ESTE merupakan sebuah platform yang berperan sebagai E-Learning atau <br>media belajar secara online bagi
                    siswa SD, SMP, dan SMA
                </p>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- signup section -->
    <section class="footer-section signup-section spad">
        <div class="signup-bg set-bg" data-setbg="img/guru.jpg"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="signup-warp">
                        <div class="section-title text-white text-left">
                            <h2>Ingin bergabung menjadi seorang guru?</h2>
                            <p>Bergabunglah bersama kami dan jadilah guru terbaik !!! <br>Ketulusan dan kesabaran menjadi kunci kesuksesan <br> seorang guru dalam kegiatan belajar mengajar</p>
                        </div>
                        <!-- signup form -->
                        <form class="signup-form" action="<?= site_url('Login/insert_guru'); ?>" method="post">
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <input type="text" name="nama" placeholder="Nama">
                            <input type="text" name="instansi" placeholder="Instansi">
                            <!-- <label for="v-upload" class="file-up-btn">Upload Course</label>
                            <input type="file" id="v-upload"> -->
                            <input type="submit" value="Daftar" class="site-btn" href="<?= base_url('login'); ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup section end -->

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
    <script src="js/login.js"></script>
</body>

</html>