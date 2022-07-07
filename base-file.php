<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="facebook-domain-verification" content="k8d5h5amo47lh7i8rrtqyp7ymjaglc" />
  <meta name="google-site-verification" content="f67-7a5x078TxrWxE4cls5WSBLXB0LEa7IZJl96tzjA" />
  <!--<title>Affordable Medigap</title>-->
  
  
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <?php
    $uri = $_SERVER['REQUEST_URI'];
    ?>
    <link rel="canonical" href="<?php echo $uri; ?>">
    
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  

  
  <!-- Google Analytics-->
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LBP05S5FFK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LBP05S5FFK');
</script>
  
  <!-- End Google Analytics-->

    <!--Gtag-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LBP05S5FFK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LBP05S5FFK');
</script>
    <!--Gtag-->

  <style>
      /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 70px;
  z-index: 997;
  transition: all 0.5s ease-in-out;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}
#header .logo h1 {
  font-size: 28px;
  margin: 0;
  line-height: 0;
  font-weight: 600;
  letter-spacing: 1px;
}
#header .logo h1 a, #header .logo h1 a:hover {
  color: #3c4133;
  text-decoration: none;
}
#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}
.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}
.navbar li {
  position: relative;
}
.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Raleway", sans-serif;
  font-size: 15px;
  font-weight: 600;
  color: #94c045;
  white-space: nowrap;
  transition: 0.3s;
}
.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #94c045;
}
.navbar .getstarted, .navbar .getstarted:focus {
  background: #94c045;
  padding: 8px 25px;
  margin-left: 30px;
  border-radius: 50px;
  color: #fff;
}
.navbar .getstarted:hover, .navbar .getstarted:focus:hover {
  color: #fff;
  background: #9fc658;
}
.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 28px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}
.navbar .dropdown ul li {
  min-width: 200px;
}
.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 15px;
  text-transform: none;
}
.navbar .dropdown ul a i {
  font-size: 12px;
}
.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #94c045;
}
.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}
.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}
.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}
@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #3c4133;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}
.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}
.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(34, 36, 29, 0.9);
  transition: 0.3s;
  z-index: 999;
}
.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}
.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}
.navbar-mobile a, .navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #3c4133;
}
.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #94c045;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
  margin: 15px;
}
.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}
.navbar-mobile .dropdown ul li {
  min-width: 200px;
}
.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}
.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}
.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #94c045;
}
.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

.nav-main-links{
  text-decoration:none;
  
}
  </style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="img/LOGO.png" alt="Affordable Medigap Logo" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a style="font-weight:500;" class="active nav-main-links" href="index.php">Home</a></li>
          <li class="dropdown"><a class="nav-main-links" href="#"><span style="font-weight:500;">See All Plans</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a style="font-weight:500;" class="nav-main-links" href="medicare-advantage-plan-c.php">Plan C</a></li>
              <li><a style="font-weight:500;" class="nav-main-links" href="plan-d.php">Plan D</a></li>
              <li><a style="font-weight:500;" class="nav-main-links" href="plan-k.php">Plan K</a></li>
              <li><a style="font-weight:500;" class="nav-main-links" href="plan-L.php">Plan L</a></li>
              <li><a style="font-weight:500;" class="nav-main-links" href="plan-f.php">Plan F</a></li>
              <li><a style="font-weight:500;" class="nav-main-links" href="plan-g.php">Plan G</a></li>
              <li><a style="font-weight:500;" class="nav-main-links" href="plan-n.php">Plan N</a></li>
              
            </ul>
          </li>
          <li><a style="font-weight:500;" class="nav-main-links" href="new-to-medicare.php">New To Medicare</a></li>
          <li><a style="font-weight:500;" class="nav-main-links" href="medigap.php">Medigap</a></li>
          <li><a style="font-weight:500;" class="nav-main-links" href="medicare-advantage-plan-c.php">MedicareAdvantage</a></li>
          <li><a style="font-weight:500;" class="nav-main-links" href="part-d.php">Part D</a></li>
          <li><a style="font-weight:500;" class="nav-main-links" href="blog.php">Blog</a></li>

          <li><a class="getstarted nav-main-links" href="tel:+18889890079">Speak To License Agent</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/a38fde4003.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCNM3T2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>