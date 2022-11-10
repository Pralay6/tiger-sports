<?php
session_start();

$conn= mysqli_connect("localhost","root","","tiger_sports");

if($_SERVER["REQUEST_METHOD"]=="POST"){



  if(isset($_POST['purchase'])){

     $name=$_POST['fullname'];
     $phone=$_POST['phoneNo'];
     $address=$_POST['address'];
     $payType=$_POST['cod'];

    $query="INSERT INTO `order_manager`( `fullname`, `phone_no`, `address`, `pay_mode`) 
              VALUES ('$name','$phone','$address','$payType')";

    $exe=mysqli_query($conn,$query);
    if($exe){

      $order_id=mysqli_insert_id($conn);
      $query2="INSERT INTO `user_order`(`order_id`, `item_name`, `price`, `quantity`) VALUES (?,?,?,?)";

      $stmt=mysqli_prepare($conn,$query2);

      if($stmt){

        mysqli_stmt_bind_param($stmt,"isdi",$order_id,$itemname,$price,$quantity);
        foreach($_SESSION['pro_cart'] as $key=> $values){
          $itemname=$values['Title'];
          $price=$values['Price'];
          $quantity=$values['Quantity'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['pro_cart']);
        echo'
        <script>
        
        alert("order Placed!");
        window.location.href="mycart.php";
       
        </script>';

      }else{
        echo'
        <script>
        alert("SQL query preprare error");
        window.location.href="mycart.php";
        </script>';

      }

      //echo '<script>alert("Data Inserted Successfully..!")</script>';
      //echo '<script>alert("Registation Successfully..!")</script>';
      
    }else{
       echo'
          <script>
          alert("SQL Error");
          window.location.href="mycart.php";
          </script>';
    }
  }
}


?>