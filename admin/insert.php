<?php

session_start();

echo $title=$_POST['title'];
echo $desc=$_POST['desc'];
echo $price=$_POST['price'];
echo $listprice=$_POST['listprice'];
echo $imgurl=$_POST['img_url'];
echo $lettertype=$_POST['letterType'];

$conn= mysqli_connect("localhost","root","","tiger_sports");

$insert="INSERT INTO product_data (`title`,`desc`,`price`,`list_price`,`l_type`,`img_url`) VALUES('$title','$desc','$price','$listprice','$lettertype','$imgurl')";

$exe= mysqli_query($conn,$insert); 
if($exe)
		{
			echo '<script>alert("Data Inserted Successfully..!")</script>';
     //echo '<script>alert("Registation Successfully..!")</script>';
     header('location:upload.php');

		}
		else{
			echo "Error Occurred.!";
		}

?>