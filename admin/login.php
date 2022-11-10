
<?php
session_start();
if(isset($_POST['signin'])){
	
	$emailid=$_POST['user_email'];
	$password=$_POST['pass'];

	$conn= mysqli_connect("localhost","root","","tiger_sports");
	
	$clk1 = "SELECT * FROM admintbl WHERE username='$emailid'";
	$clk2 = mysqli_query($conn,$clk1);
	$clk3 = mysqli_num_rows($clk2);
	
	if($clk3 !=0){
		$cp1 = "SELECT * FROM admintbl WHERE username='$emailid' AND PASSWORD='$password'";
		$cp2 = mysqli_query($conn,$cp1);
		$cp3 = mysqli_num_rows($cp2);
		if($cp3 !=0){
			//echo "Access Granted..!";
			
			
			$_SESSION['admin_login']= $emailid;
			echo "<script>window.location='index.php'</script>";
			
			
		}else{
			echo "Email or Password is Wrong";
		}
	}else{
		echo "User Do-not Exist";
	}
}

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

  <title>  Login | Admin Panel</title>

	<style >

input .text {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
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
								
								<li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
								
								<li class="nav__item"><a href="upload.php" class="nav__link ">Upload data</a></li>
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
   



 <!--========= FOOTER ==========-->
 <footer class="footer section bd-container">


 <h2 style="text-align: center;">Admin Login</h2>

          <form class="footer__copy" method="POST" action="" >
					<label>User Name:</label>
          <input name="user_email" type="text" placeholder="Enter UserName" required>
          <label>Password:</label>
          <input name="pass" type="password" placeholder="Enter Password" required>
					<input type="submit" name="signin" value="Login">


  <p class="footer__copy">&#169; 2021 DHANSHREE MANYAR. All right reserved</p>
</footer>

   <!--========== SCROLL REVEAL ==========-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--========== MAIN JS ==========-->
   <script src="assets/js/main.js"></script>
</body>
</html>