<?php
include_once 'db.php';

if(isset($_POST['save']))
{	 
	$name=$_POST['name'];
	$price=$_POST['price'];
	$image=$_POST['image'];
	$category=$_POST['category'];
	$tags=$_POST['tags'];
	$description=$_POST['description'];
	$chk="";  
	foreach($tags as $chk1)  
	   {  
		  $chk .= $chk1.",";  
	   }  
	

	   $sql = "INSERT INTO cart ( name ,price,image,category,tags,description) VALUES ('$name','$price','$image','$category','$chk','$description')";
	   if (mysqli_query($conn, $sql)) {
		header('Location: http://localhost/dailyshop/cart.php');

		 
	   } else {
		  echo "Error: " . $sql . "
  " . mysqli_error($conn);
	   }
	   mysqli_close($conn);
  }

?>