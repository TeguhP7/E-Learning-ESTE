<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ESTE - Fun & Learn</title>
    <meta name="description" content="ESTE - Fun & Learn">
    <meta name="keywords" content="este, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <base href="<?= base_url('assets/css'); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>

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
                    <div class="col-lg-10">
                        <a href="<?php echo base_url('course'); ?>" class="site-btn header-btn">Kembali</a>
                    </div>
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

    <section id="containerrr">
        <div id="videobody" class="mid-video">
            <p>Select a video file to upload</p>
            <?php
            if (isset($success) && strlen($success)) {
                echo '<div class="success">';
                echo '<p>' . $success . '</p>';
                echo '</div>';

                //traditional video play - less than HTML5
                // echo '<object width="720" height="480">
                // 		  <param name="src" value="' . $video_path . '/' . $video_name . '">
                // 		  <param name="autoplay" value="false">
                // 		  <param name="controller" value="true">
                // 		  <param name="bgcolor" value="#333333">
                // 		  <embed type="' . $video_type . '" src="' . $video_path . '/' . $video_name . '" autostart="false" loop="false" width="720" height="480" controller="true" bgcolor="#333333"></embed>
                // 		  </object>';

                //HTML5 video play
                echo '<video width="720" height="480" controls>
                		  <source src="videos/' . $video_name . '" type="' . $video_type . '">
                		  Your browser does not support the video tag.
                		  </video>';
            }
            if (isset($errors) && strlen($errors)) {
                echo '<div class="error">';
                echo '<p>' . $errors . '</p>';
                echo '</div>';
            }
            if (validation_errors()) {
                echo validation_errors('<div class="error">', '</div>');
            }
            ?>
            <?php
            $attributes = array('name' => 'course_index', 'id' => 'course_index');
            echo form_open_multipart($this->uri->uri_string(), $attributes);
            ?>
            <p><input name="video_name" id="video_name" readonly="readonly" type="file" /></p>
            <p><input name="course_index" value="Upload Video" type="submit" /></p>
            <?php
            echo form_close();
            ?>
        </div>
    </section>

    <div class="kotak">
        <form action="<?= site_url('Materi/upload'); ?>" method="post">
            <h2>Upload Materi</h2><br />
            <table>
                <td>Nama Kelas</td>
                <td><input type="text" name="nama_materi" /></td>
            </table>
            <textarea class="ckeditor" id="ckeditor" name="materi"></textarea>
            <br />
            <button class="tombol" type="submit">Simpan</button>
        </form>
    </div>

    <div class="mid-video">
        <video width="720" height="480" controls>
            <source src="videos/<?= $video_name; ?>" type="<?= $video_type; ?>">
        </video>
    </div>

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