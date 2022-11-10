<?php
session_start();
if(!isset($_SESSION['admin_login'])){
	echo "<script>window.location='login.php'</script>";
	exit();
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--========== BOX ICONS ==========-->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <!--========== CSS ==========-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Admin Panel</title>
</head>
<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>


   <!--========== HEADER ==========-->
   <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="#" class="nav__logo">Admin Panel</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">

						<?php
							if(isset($_SESSION['admin_login'])){?>
								
								<li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
								
								<li class="nav__item"><a href="upload.php" class="nav__link ">Upload data</a></li>
                <li class="nav__item"><a href="order.php" class="nav__link ">View Order</a></li>
								<li class="nav__item"><a href="feedback.php" class="nav__link ">Feedback</a></li>
								<li class="nav__item"><a href="logout.php" class="nav__link">Logout   </a></li>
								<p>login as: </p><?php echo $_SESSION['admin_login'];?>
						<?php	
							}else{?>
								<li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
							
						<?php
							}
						?>  
                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
      </nav>
   </header>

   <main class="l-main">
     <!--========== HOME ==========-->
      <section class="home" id="home">
        <div class="home__container bd-container bd-grid">

            <div class="home__data">
								<h5 class="home__subtitle">Upload product data to database</h5>
                <a href="upload.php" class="button">Upload Product Data</a>
            </div>

						<div class="home__data">
						<h5 class="home__subtitle">View all feedback form users</h5> 
                <a href="feedback.php" class="button">View Feedback</a>
            </div>

            <div class="home__data">
						<h5 class="home__subtitle">View all Orders form users</h5> 
                <a href="order.php" class="button">View order</a>
            </div>

            <div class="home__data">
						<h5 class="home__subtitle">View all Messages form users</h5> 
                <a href="message.php" class="button">View Message</a>
            </div>
        </div>
    </section>

 


</main>

 <!--========== FOOTER ==========-->
 <footer class="footer section bd-container">

  <p class="footer__copy">&#169; 2021 DHANSHREE MANYAR. All right reserved</p>
</footer>

   <!--========== SCROLL REVEAL ==========-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--========== MAIN JS ==========-->
   <script src="assets/js/main.js"></script>
</body>
</html>


<?php

}

?>