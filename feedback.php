
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedback | TIGER SPORTS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
input .email {
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

input[type=text],input[type=email] select {
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


.bd-container {
    max-width: 960px;
    width: calc(100% - 2rem);
    margin-left: var(--mb-2);
    margin-right: var(--mb-2);
}
.section {
    padding: 9rem 0 0 2rem;
}

.footer__copy{
  text-align: center;
  font-size: var(--small-font-size);
  color: var(--text-color-light);
  margin-top: 3.5rem;
}

.main_letter{
    padding-top: 9rem!important;
}   
  </style>


</head>

<body>
<body>

<?php include('header.php');?>

<!-- ======= Hero Section ======= -->


<div class="main_letter">
<div class="container">
    <div class="row">
      
     <div class="col-lg-12 text-center border rounded bg-light my-5">
     <h1 style="color:blue;">SEND FEEDBACK</h1>
      </div>

      

      <div class="col-lg-12">

        <form class="text-center" method="POST" action="" >
          <label style="text-align: left;">Full Name:</label>
          <input name="fullname" type="text" placeholder="Enter Full Name" required><br>
          <label>Email:</label>
          <input name="email" type="text" placeholder="Enter Email ID" required><br>
          <label>Message:</label>
          <input name="message" type="text" placeholder="Enter Message" required><br>

          <input type="submit" name="sendfeedvack" value="Send Feedback"><br><br>

        </form>
      </div>
    </div>
  </div>
</div>



<?php include('footer.php');?>
</body>
</html>

<?php



if(isset($_POST['sendfeedvack'])){
      $name=$_POST['fullname'];
      $email=$_POST['email'];
      $message=$_POST['message'];
      $conn= mysqli_connect("localhost","root","","tiger_sports");
      $insert="INSERT INTO `feedback_data` (`name`,`email`,`message`)
      VALUES('$name','$email','$message')";


      $exe= mysqli_query($conn,$insert); 
      if($exe)
          {
            echo '<script>alert("Data Inserted Successfully..!")</script>';
          //echo '<script>alert("Registation Successfully..!")</script>';
          

		}
		else{
			echo "Error Occurred.!";
		}

}

?>