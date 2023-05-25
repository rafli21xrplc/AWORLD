<?php

session_start();

include 'coneksi.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;1,300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <title>PANTAI MALANG</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="./css/bootstrap.min.css" rel="stylesheet" />
  <link href="./css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <link href="./css/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="icon" type="image/x-icon" href="images/placeholder.png" />
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen" />
</head>

<body>
  <div class="header_section">
    <div class="header_main">
      <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile">
            <a href="index.html"><img src="images/logo.png" /></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
      <div class="container-fluid">
        <div class="logo">
          <a href="index.html"><img src="images/logo.png" /></a>
        </div>
        <div class="menu_main">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about_section">About</a></li>
            <li><a href="#services_section">Reference</a></li>
            <li><a href="#bloging_section">Blog</a></li>
            <li><a href="#vidio_section">Vidio Clip</a></li>
            <?php if (isset($_SESSION['login'])) : ?>
              <li><a href="logout.php"><?= $_SESSION['login']; ?><i class="fa-solid fa-arrow-right-from-bracket" style="margin-left: 10px;"></i></a></li>
            <?php else :  ?>
              <li><a href="login.php">login</a></li>
            <?php endif;  ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <h1 class="banner_taital">WISATA ALAM</h1>
              <p class="banner_text font-weight-bold">
                Malang tidak hanya terkenal akan cuaca dinginnya tetapi juga
                kaya akan wisata alam termasuk pantai dan pemandangan yang
                sangat indah.
              </p>
              <div class="read_bt"><a href="#">Malang Beautiful</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </div>