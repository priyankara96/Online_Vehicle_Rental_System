<?php
	include_once 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/stylesnew.css" >
<script src="../js/Booking.js"> </script>
<title> Booking Details</title>
</head>

<body>
<h2 class="font2"><center> ABC Vehicle Rental Pvt.ltd </center></h2>

 <img class="logo" src="../images/car.png" style="float:left;" width=100 height=100 > 
 <img class="login" src="../images/user.png" style="float:right;" width=100 height=100 >
 <button class="login1" style="float:right" width=100 height=100 onclick="location.href='../../IT20135966/html/login.html';">Login</button>
<ul class="menu">

<h2>
      <li class="menu"> <a href="../../IT20252090/html/home.html"> Home </a></li>
      <li class="menu"> <a href="../../IT20252090/html/VehicleFleet.html"> Vehicle Fleet </a> </li>
      <li class="menu"> <a href="../../IT20139858/html/Payment.html"> Payment </a> </li>
      <li class="menu"> <a href="../../IT20139544/html/Services.html"> Service </a> </li>
      <li class="menu"> <a href="../../IT20135966/html/New_register.html"> Register</a> </li>
      <li class="menu"> <a href="../../IT20137632/html/About.html"> About </a> </li>
      <li class="menu"> <a href="../../IT20137632/html/Contact us.html"> Contact Us </a> </li>
	  

</h2>
</ul>

 
<br> 
<div class="layout">
		<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT20139544/html/Booking.html';">Booking</button>
		<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT20139858/html/feedback.html';">Feedback</button>
</div>

</div>
<br>
<br><br><br>
  <div class="box">
     <div class="productData" >
      <table border="1" width="100%">
         <tr>
		  <th class="col1">Location</th>
		  <th class="col1">Pickup_month</th>
		  <th  class="col1">Pickup_date</th>
		  <th class="col1">Pickup_year </th>
		  <th class="col1">Pickup_time </th>
		  <th class="col1">Return_month</th>
	      <th class="col1">Return_date</th>
		  <th class="col1">Return_year</th>
		  <th class="col1">Return_time</th>
		  <th class="col1">No_of_dates</th>
		  <th class="col1">Vehicle_type</th>
		   <th class="col1">Currency_type</th> 
	     </tr>
	 
</div>
</div>
	<?php
		$sql = "SELECT * FROM booking";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["Location"]."</td><td>".$row["Pickup_month"]."</td><td>".$row["Pickup_date"]."</td><td>".$row["Pickup_year"]."</td><td>".$row["Pickup_time"]."</td><td>".$row["Return_month"]."</td><td>".$row["Return_date"]."</td><td>".$row["Return_year"]."</td><td>".$row["Return_time"]."</td><td>".$row["No_of_dates"]."</td><td>".$row["Vehicle_type"]."</td><td>".$row["Currency_type"]."</td></tr>";
				//echo "<tr><td>".$row["Location"]."</td><td>".$row["Location"]."</td><td>".$row["Pickup_date"]."</td><td>".$row["Pickup_year"]."</td><td>".$row["Pickup_time"]."<tr><td>".$row["Return_month"]."</td><td>".$row["Return_date"]."</td><td>".$row["Return_year"]."</td><td>".$row["Return_time"]."</td><td>".$row["No_of_dates"]."</td></tr>".$row["Vehicle_type"]."</td></tr>".$row["Currency_type"]."</td></tr>";
				//"</td></tr>".$row["Return_month"]."</td><td>".$row["Return_month"]."</td><td>".$row["Return_date"]."</td><td>".$row["Return_year"]."</td><td>".$row["Return_time"]."</td></tr>".$row["No_of_dates"]."<tr><td>".$row["Vehicle_type"]."<tr><td>".$row["Currency_type"]."</td></tr>";
			}
		}
		else{
			echo "no results";
		}
		echo "</table>";
		
		$conn->close();
	?>
<div class="footer">

<div class="layout2">
		<button class="bttn2" type="button" ><a href="https://www.facebook.com/login/"><img src="../images/a.png"  height="40" width="40"></a> </button>
		<button class="bttn2" type="button" ><a href="hhttps://twitter.com/login?lang=en"><img src="../images/c.png"  height="40" width="40"></a></button>
		<button class="bttn2" type="button" ><a href="https://www.instagram.com/accounts/login/?hl=en"><img src="../images/b.png"  height="40" width="40"></a></button>
		<button class="bttn2" type="button" ><a href="https://accounts.google.com/"><img src="../images/d.png" height="40" width="40"></a></button>
</div>
<div class="layout3">
		<button class="bttn3" type="button" ><img src="../images/e.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/f.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/g.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/h.png" height="40" width="40"></button>
</div>
</div>
</body>
</html>