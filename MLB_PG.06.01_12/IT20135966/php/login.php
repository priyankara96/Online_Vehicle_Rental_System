<?php
	include_once 'config.php';
 ?>
 

<?php 
    
	  $mail = $_POST['email'];
	  $pwd = $_POST['rpw']; 
	  $rpw = ($pwd);
	  $sql = "SELECT * FROM register WHERE Email='$mail' AND Password ='$pwd'";
	  $result = $conn->query($sql);
      if($result->num_rows>0)
      {
		 while($row=$result->fetch_assoc())
         
		 {
			 $id = $row["ID"];
			 $mail = $row["Email"];
			 session_start();
			 $_SESSION['id'] = $id;
			 $_SESSION['mail'] = $mail;
		 }
		header("Location:../../IT20252090/html/home.html");
      }
      else
	  {	  
		 header("Location:../html/login.html");
		 echo "<script>alert('Invalid email or Password ') </script>";
      }
	  
      $conn->close();
  ?>
 
