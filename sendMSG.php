<?php 

if(isset($_POST['sendMsg'])){
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

$conn= mysqli_connect("localhost","root","","tiger_sports");

$query="INSERT INTO `contact_us`( `name`, `email`, `message`) 
          VALUES ('$name','$email','$msg')";

$exe=mysqli_query($conn,$query);
    if($exe){

    echo '<script>
        
      alert("Message Sent!");
      window.location.href="contactus.php";
     
      </script>';


    }
    else{
      echo '<script>
        
      alert("failed to Sent Message!");
      window.location.href="contactus.php";
     
      </script>';
    }
}



?>