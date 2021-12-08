<?php
	include_once 'config.php';
 ?>
 

<?php
      $ctype=$_POST['ctype'];
	  $cname = $_POST["fname"];
	  $cumber = $_POST["crdnum"];
	  $cvcnumber = $_POST["cvc"];
	  $expMonth = $_POST["expMonth"];
	  $expYear = $_POST["expYear"];
	  //$reentercvcumber =  $_POST["recvc"];
	  
	  $sql = "INSERT INTO payment (Card_Type,Card_Holder_Name,Card_Number,CVC_Number,Exp_Month,Exp_Year) VALUES ('$ctype','$cname','$cumber','$cvcnumber','$expMonth','$expYear')";
	  
	  //$sql = insert into feedback(First_Name,Last_Name,Email_Adress,Review)('$fname','$lname','$emailAdd','$review')";
	  
	  if(mysqli_query($conn,$sql)) {
		  echo "<script>alert('Record inserted successfully!!!')</script>";
		  header("Location:../php/paymentdetails.php");
	  }
	  else{
		  echo"<script>alert('Error in ')</script>";
	  }
	  
	  mysqli_close($conn);
  ?>