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
  
  
  <title>CONTACT US</title></br> </br> </br> 
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

  <style>

.main_letter{
    padding-top: 9rem!important;
}
  </style>
 
</head>

<body>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p>Contact Us</p>
        </div>
      </div>

      

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>1st Floor, sai chhatra apartment near padgha bus stand, padgha, tal. Bhiwandi, Dist. Thane</p>
              </div>

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 10.00 PM
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>trishulthakare9@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 7083139111</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="sendMSG.php" method="post" role="form" class="border bg-light rounded p-4">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div></n>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>


              
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="sendMsg">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>



      
    </section><!-- End Contact Section -->

  </main><!-- End #main -->










  

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
			   <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php">ABOUT US</a></li>
			   <li><i class="bx bx-chevron-right"></i> <a href="contactus.php">CONTACT US</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="">FEEDBACK</a></li>
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