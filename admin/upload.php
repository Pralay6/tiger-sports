<?php
session_start();
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

  <title>Upload | Admin Panel</title>

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
								
								
								<li class="nav__item"><a href="index.php" class="nav__link ">Home</a></li>
								
								<li class="nav__item"><a href="upload.php" class="nav__link active-link">Upload data</a></li>
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
</main>

 <!--========== FOOTER ==========-->
 <footer class="footer section bd-container">


 <h2 style="text-align: center;">Upload Product</h2>

          <form class="footer__copy" method="POST" action="insert.php" >
            
      
          <label style="text-align: left;">Title:</label>
          <input name="title" type="text" placeholder="Enter Product Title" required><br>
          <label>Description</label>
          <input name="desc" type="text" placeholder="Enter Product Description" required><br>
          <label>Price</label>
          <input name="price" type="text" placeholder="Enter Product Price" required><br>
          <label>List Price</label>
          <input name="listprice" type="text" placeholder="Enter Product List Price" required><br>
          <label>Image Url</label>
          <input name="img_url" type="text" placeholder="Enter Product Image Url" required><br>
          <label>Select GAME Type</label>
          <select name="letterType">
          <option value="letterA">CRICKET</option>
          <option value="letterB">CARROM BOARD</option>  
          <option value="letterC">SKATES</option>
          <option value="letterD">FOOTBALL</option>
          <option value="letterE">CHESS</option>
          <option value="letterF">GOLF</option>
          <option value="letterG">ATHLETICS</option>
          <option value="letterH">BADMINTON</option>
          <option value="letterI">BASE BALL</option>
          <option value="letterJ">BASKET BALL</option>
          <option value="letterK">BILLIARDS</option>
          <option value="letterL">DART BOARD</option>
          <option value="letterM">EXERCISE & FITNESS</option>
          <option value="letterN">FITNESS PRODUCTS</option>
          <option value="letterO">HOCKEY</option>
          <option value="letterP">INDOOR GAMES</option>
          <option value="letterQ">KARATE</option>
          <option value="letterR">LAWN TENNIS</option>
          <option value="letterS">NET BALL</option>
          <option value="letterT">RUGBY BALL</option>
          <option value="letterU">SHOOTING BALL</option>
          <option value="letterV">SKATES BOARDS</option>
          <option value="letterW">SNORKELING</option>
          <option value="letterX">SQUASH</option>
          <option value="letterY">SWIMMING</option>
          <option value="letterZ">TABLE TENNIS</option>
          <option value="letterAA">THROW BALL</option>
          <option value="letterBB">VOLLYBALL</option>  
          <option value="letterCC">WATER POLO</option>
        </select><br>

        <input type="submit" name="upload" value="Upload"><br><br>

        </form>


  <p class="footer__copy">&#169; 2021 DHANSHREE MANYAR. All right reserved</p>
</footer>

   <!--========== SCROLL REVEAL ==========-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--========== MAIN JS ==========-->
   <script src="assets/js/main.js"></script>
</body>
</html>






