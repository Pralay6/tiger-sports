<?php session_start();?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MY CART | TIGER SPORTS CLUB</title>


  
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






<div class="main_letter">

  <div class="container mb-5">
    <div class="row">
      
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>My Cart</h1>
      </div>

      <div class="col-lg-9">
      <table class="table">
        <thead class="text-center">
          <tr>
            <th scope="col">Sr. no</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center">

        <?php 
        
        if(isset($_SESSION['pro_cart'])){

          foreach($_SESSION['pro_cart'] as $key=>$value)
          {
            $sr=$key+1;
             echo" <tr>
                    <td >$sr</td>
                    <td>$value[Title]</td>
                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                    <td>
                    <form method='POST' action='insertCart.php'>
                      <input class='text-center ique' name='mod_que' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                      <input type='hidden' name='name_pro' value='$value[Title]'>

                    </form>
                    </td>
                    <td class='itotal'></td>
                    <td>
                    <form method='POST' action='insertCart.php'>
                        <button name='remove_pro' class='btn btn-sm btn-outline-danger'>Remove</button>
                        <input type='hidden' name='name_pro' value='$value[Title]'>
                    </form>
                    </td>
                  </tr>";
          }
              }else{
                echo "
                <tr>
                  <th>No product in cart</th>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>";
              }
                  ?>
                
              </tbody>
          </table>

      </div>

      <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
          <h4>Grand Total:</h4>
          <h5 class="text-right" id="gtotal"></h5>
          <br>
          
          <?php
          if((isset($_SESSION['pro_cart'])) && (($_SESSION['pro_cart'])>0) ){
          ?>
          <form method="POST" action="purchase.php">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" required name="fullname" class="form-control">
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" required name="phoneNo" class="form-control">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" required name="address" class="form-control">
            </div>
            
            <input type="hidden" value="COD" name="cod">

            <button name="purchase" class="btn btn-primary btn-block">Order Now</button>
          </form>

          <?php }?>
        </div>
      </div>

    </div>
  </div>

</div>




<script>

var gt=0;
var price=document.getElementsByClassName('iprice');
var que=document.getElementsByClassName('ique');
var total=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');


function subTotal(){
  gt=0;
  for(i=0;i<price.length;i++){
    total[i].innerText=(price[i].value)*(que[i].value);
    gt=gt+(price[i].value)*(que[i].value);
  }
  gtotal.innerText=gt;
}

subTotal();

</script>



</body>
</html>
