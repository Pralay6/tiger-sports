<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">








<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TIGER SPORTS CLUB</title>


  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

.main_letter{
    padding-top: 9rem!important;
}

</style>
 
</head>

<body>



	 <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://images.unsplash.com/photo-1612611741189-a9b9eb01d515?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA2fHxnYW1lJTIwc3BvcnRiJTIwJTIwd2FsbHBhZXIlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60s'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>TIGER SPORTS</strong>
              </h1>

              <p>
                <strong>ALL TYPE OF SPORT MATERIAL AVAILABLE HERE!</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Success usually comes to those who are too busy to be looking for it.</strong>
              </p>

             
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://images.unsplash.com/photo-1590980020815-1313a86c0566?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTM4fHxnYW1lJTIwc3BvcnRiJTIwJTIwd2FsbHBhZXIlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>TIGER SPORTS</strong>
              </h1>

              <p>
                <strong>ALL TYPE OF SPORT MATERIAL AVAILABLE HERE! </strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion.</strong>
              </p>

            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://images.unsplash.com/photo-1534595461757-4974c5072dff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzM3fHxnYW1lJTIwc3BvcnRiJTIwJTIwd2FsbHBhZXIlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>TIGER SPORTS</strong>
              </h1>

              <p>
                <strong>ALL TYPE OF SPORT MATERIAL AVAILABLE HERE!</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Action is the foundational key to all success.</strong>
              </p>
              
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

   




  <!--Main layout-->
  <main>
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

       

        <!-- Collapse button -->
        

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

         
        

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn"> 




<?php
$id=$_GET['id'];


$conn= mysqli_connect("localhost","root","","tiger_sports");

$query= "SELECT * FROM product_data WHERE '$id'=l_type";

$exe=mysqli_query($conn,$query);



while ( $res= mysqli_fetch_assoc($exe))

{
?>

<!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="<?php echo $res['img_url']; ?>" class="card-img-top"
                  alt="" WIDTH="300" HEIGHT="300">
                <a>
                  <div class="mask rgba-white-slightt"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
				 
                 <h5>
                  
                    <a href="detail-view.php?id=<?php echo $res['id']; ?>" class="dark-grey-text"><?php echo $res['title'];?></a>
                  
                </h5>
				<p class="mb-0 text-left text-danger">MRP : <del class="text-dark mr-2">
				<i class="fa fa-rupee-sign"></i> <?php echo $res['price'];?>/-</del>&nbsp;
        <p class="mb-0 text-left text-danger">MRP : 
				<i class="fa fa-rupee-sign"></i> <?php echo $res['list_price'];?>/-</p>
				
              </div>
              <!--Card content-->

            </div>
            <!--Card-->
            </div>
          <!--Grid column-->		
  <?php 
  }
  ?>          

           
		  
	 </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

         

    </div>
  </main>
  <!--Main layout-->

  </div>

  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
