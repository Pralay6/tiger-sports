<?php
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">TIGER SPORTS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <!--Header-->
  
  <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          </ul>
      </nav>


    <nav class="nav-menu d-none d-lg-block">
        <ul>  
        
          

             <?php    
      
      if(isset($_SESSION["logindata"])){?>
            <li class="book-a-table text-center"><a href="logout.php">LOGOUT</a></li>
            <?php	
      }else{
        ?>
            <li class="book-a-table text-center"><a href="login.php">LOGIN / SIGN UP </a></li>
            <li class="book-a-table text-center"><a href="admin/index.php">ADMIN LOGIN </a></li>
            <?php
	}

  $count=0;
  if(isset($_SESSION['pro_cart'])){
    $count=count($_SESSION['pro_cart']);
  }
?>

<!--
<a href="mycart.php" class="book-a-table text-center">
       <span class="d-none d-md-inline">My Cart </span>
       <span class="badge badge-secondary badge-pill"><?php echo $count;?></span>
      </a>-->


      <li class="book-a-table text-center"><a href="mycart.php">CART <?php echo $count;?></a></li>		  
		   <li class="book-a-table text-center"><a href="feedback.php">FEEDBACK</a></li>

           </ul>
      </nav>
     
    </div>
  </header><!-- End Header -->

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  
  



  <title>ABOUT US</title></br> </br> </br>
  <meta content="" name="description">
  <meta content="" name="keywords">
 

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
   
  
      

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


      
</head>

<body>

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="" height="400" weight="400">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ABOUT   US</h3>
            <h3>TIGER SPORTS</h3>
            <p class="font-italic">
              <Obj>Online sports accessories</Obj>
            </p>
            
            <p>
            TIGER SPORTS is a sporting goods company which manufactures products including Cricket leather ball, Carrom board, Dart board, Swimming goggles, Karate stick, Fitness equipments, Football and so on. The company's technically advanced sports equipment, apparel and accessories improve performance and increase the enjoyment of sports and outdoor activities. TIGER SPORTS is balanced through its broad portfolio of sports and products and a presence in all major markets.

            TIGER SPORTS sells its products directly to consumers through e-commerce platform. The TIGER SPORTS strategy emphasizes excellence in consumer-centric product creation. Through continuous research and development, TIGER SPORTS seeks to develop new and better sporting goods that appeal to consumers and trade customers. Products are designed to improve the performance athletes, help them achieve their goals, and provide them with more enjoyment from their activity of choice.

Our world-class production facility and the fact that we have total control over every manufacturing process make TIGER SPORTS the industry benchmark for design, quality and performance.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>TIGER SPORTS</h3>
              <p>
              1st Floor, sai chhatra apartment near padgha bus stand, <br>
              padgha, tal. Bhiwandi, Dist. Thane<br><br>
                <strong>Phone:</strong> +91 7083139111<br>
                <strong>Email:</strong> trishulthakare9@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/trishul.thakare" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/trishul_thakare_tiger?utm_medium=copy_link" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">HOME</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">LOGIN/SIGN UP</a></li>
			   <li><i class="bx bx-chevron-right"></i> <a href="">ABOUT US</a></li>
			   <li><i class="bx bx-chevron-right"></i> <a href="contactus.php">CONTACT US</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="feedback.php">FEEDBACK</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TIGER SPORTS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        TIGER SPORTS</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  
  
    
 
    
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>