
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--========== BOX ICONS ==========-->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  <!--========== CSS ==========-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Orders | Admin Panel</title>

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
                <li class="nav__item"><a href="order.php" class="nav__link active-link">View Order</a></li>

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


 <table class="footer__copy">
 <h2 style="text-align: center;">Orders</h2>

  <tr>
    <th>Order ID</th>
    <th>Customer Name</th>
    <th>Phone No</th>
    <th>Address</th>
    <th>Pay Mode</th>
    <th>Orders</th>
  </tr>

  <?php 
	$conn= mysqli_connect("localhost","root","","tiger_sports");
  $query="SELECT * FROM `order_manager`";
  $user_res=mysqli_query($conn,$query);
  while($user_fetch=mysqli_fetch_assoc($user_res)){

    echo"
        <tr>
          <td>$user_fetch[order_id]</td>
          <td>$user_fetch[fullname]</td>
          <td>$user_fetch[phone_no]</td>
          <td>$user_fetch[address]</td>
          <td>$user_fetch[pay_mode]</td>

          <td>
          <table>
          <h2 style='text-align: center;'></h2>
         
           <tr>
             <th>Product Name</th>
             <th>Price</th>
             <th>Quantity</th>
           </tr>
           ";

     $order_query="SELECT * FROM `user_order` WHERE `order_id`=$user_fetch[order_id]";   
     $order_result=mysqli_query($conn,$order_query);
     while($order_fetch=mysqli_fetch_assoc($order_result)){

      echo"
        <tr>
          <td>$order_fetch[item_name]</td>
          <td>$order_fetch[price]</td>
          <td>$order_fetch[quantity]</td>
        </tr>
      
      ";

     }
     echo"      
           </table>
          </td> 
        </tr>
    ";
  }
  ?>
   
</table>

  <p class="footer__copy" >&#169; 2021 dhanshree manyar. All right reserved</p>
</footer>

   <!--========== SCROLL REVEAL ==========-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--========== MAIN JS ==========-->
   <script src="assets/js/main.js"></script>
</body>
</html>