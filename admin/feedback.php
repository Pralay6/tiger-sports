<?php
session_start();

$conn=mysqli_connect("localhost","root","","tiger_sports");
$query="SELECT * FROM `feedback_data`";

$exe=mysqli_query($conn,$query);

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

  <title>Feedback | Admin Panel</title>

  <style >
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
  </style>


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
								
								
								<li class="nav__item"><a href="index.php" class="nav__link ">Home</a></li>
								
								<li class="nav__item"><a href="upload.php" class="nav__link ">Upload data</a></li>
								<li class="nav__item"><a href="feedback.php" class="nav__link active-link">Feedback</a></li>
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

     
     
      


</main>

 <!--========== FOOTER ==========-->
 <footer class="footer section bd-container">


 <table class="footer__copy">
 <h2 style="text-align: center;">Feedback</h2>

  <tr>
    <th>Name</th>
    <th>Email ID</th>
    <th>Message</th>
  </tr>

  <?php
  if($exe){ 
    while ( $res= mysqli_fetch_assoc($exe))
  {
  ?>
  <tr>
    <td><?php echo $res['name'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['message'];?></td>
  </tr>
    
<?php }
  }
  else{
    ?>
  <tr>
      <td>NO Data To Display</td>
      <td></td>
      <td></td>
    </tr>

  <?php
  }
  
  ?>
</table>

  <p class="footer__copy" >&#169; 2021 DHANSHREE MANAYR. All right reserved</p>
</footer>

   <!--========== SCROLL REVEAL ==========-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--========== MAIN JS ==========-->
   <script src="assets/js/main.js"></script>
</body>
</html>






