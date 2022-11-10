<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

  if(isset($_POST['addtocart'])){

    if(isset($_SESSION['pro_cart']))
    {
      $myitem=array_column($_SESSION['pro_cart'],'Title');
      if(in_array($_POST['pro_title'],$myitem))
      {

        echo'
        <script>
        alert("Product already added to cart");
        window.location.href="mycart.php";
        </script>';
        
      }else{

          $count=count($_SESSION['pro_cart']);
          $_SESSION['pro_cart'][$count]=array('Title'=>$_POST['pro_title'],'Price'=>$_POST['pro_price'],'Quantity'=> $_POST['pro_quantity']);
          //print_r($_SESSION['pro_cart']);
          echo'
          <script>
          alert("Product added to cart");
          window.location.href="mycart.php";
          </script>';
        }
    }
    else
    {
      $_SESSION['pro_cart'][0]=array('Title'=>$_POST['pro_title'],'Price'=>$_POST['pro_price'],'Quantity'=>$_POST['pro_quantity']);
      //print_r($_SESSION['pro_cart']);
      echo'
        <script>
        alert("Product added to cart");
        window.location.href="mycart.php";
        </script>';
    }
  }

  if(isset($_POST['remove_pro'])){

    foreach($_SESSION['pro_cart'] as $key=>$value){
      if($value['Title'] == $_POST['name_pro']){
        unset($_SESSION['pro_cart'][$key]);
        $_SESSION['pro_cart']=array_values($_SESSION['pro_cart']);
        echo'
        <script>
        alert("Product removed from cart");
        window.location.href="mycart.php";
        </script>';
      }
    }

  }


  if(isset($_POST['mod_que'])){

    foreach($_SESSION['pro_cart'] as $key=>$value){
      if($value['Title'] == $_POST['name_pro']){

        $_SESSION['pro_cart'][$key]['Quantity']=$_POST['mod_que'];
        
        echo'
        <script>
        window.location.href="mycart.php";
        </script>';
        
      }
    }
  }

}

//header('location:cart.php');

?>

