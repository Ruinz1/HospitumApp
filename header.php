<?php session_start(); ?>
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Penilaian Instansi Kesehatan Kota Palu</title>
 

  <!-- Favicons -->
  <link href="bs/eNno/assets/img/favicon.png" rel="icon">
  <link href="bs/eNno/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bs/eNno/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bs/eNno/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="bs/eNno/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="bs/eNno/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="bs/eNno/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="bs/eNno/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.7.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Hospitium</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <?php if(!isset($_SESSION['class'])) {?>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
          <?php } ?>
          <?php if(isset($_SESSION['class'])) {?>
            <li class="dropdown"><a href="#"><span>Profile</span> <i class=""></i></a>
                <ul>
                  <li><a href="#">Hi : <?php echo $_SESSION['nama_user']; ?> </a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->