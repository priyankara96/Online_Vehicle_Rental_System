<?php
	include_once 'config.php';
 ?>
 

<?php 
     $name = $_POST["fname"];
	 $address =  $_POST["add"];
	 $mobile = $_POST["mobile"];
	 $NIC = $_POST["NIC"];
	 $mail = $_POST["email"];
	 $pwd = $_POST["rpw"];
	  
	   $sql = "INSERT INTO register(ID,Name,Address,Mobile,NIC,Email,Password )VALUES ('','$name','$address','$mobile','$NIC','$mail','$pwd')";
	
	  
	  //$sql = insert into item(Item_name,Item_description,Price,Quantity,Item_code('$name','$des','$price','$qty','$code')
	  
	  if(mysqli_query($conn,$sql)) {
		  echo "<script> alert('Record inserted successfully!!!')</script>";
		  header("Location:../php/registerdetails.php");
	  }
	  else{
		  echo"<script>alert('Error in ')</script>";
	  }
	  
	  mysqli_close($conn);
  ?>
 