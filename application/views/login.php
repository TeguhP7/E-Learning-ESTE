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

    <div class="login-reg-panel">
        <div class="login-info-box">
            <h3>Sudah punya akun?</h3>
            <p>Silahkan masuk lewat sini...!!!</p>
            <label id="label-register" for="log-reg-show">Masuk</label>
            <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
        </div>

        <div class="register-info-box">
            <h3>Belum punya akun?</h3>
            <p>Buat akun sebagai siswa sekarang untuk kegiatan belajar yang seru & menyenangkan...!!!</p>
            <label id="label-login" for="log-login-show">Daftar</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>

        <div class="white-panel">
            <form action="<?= site_url('Login/process'); ?>" method="post">
                <div class="login-show">
                    <h2>MASUK</h2>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input class="site-btn" name="masuk" type="submit" value="Masuk">
                    <a href="">Lupa kata sandi kah?</a>
                </div>
            </form>
            <form action="<?= site_url('Login/insert_siswa'); ?>" method="post">
                <div class="register-show">
                    <h2>DAFTAR</h2>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="text" name="nama" placeholder="Nama Lengkap">
                    <input type="text" name="instansi" placeholder="Instansi">
                    <input class="site-btn" name="daftar" type="submit" value="Daftar">
                    <a href="<?= site_url('home'); ?>">Ingin mendaftar sebagai Guru?</a>
                </div>
            </form>
        </div>
    </div>

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