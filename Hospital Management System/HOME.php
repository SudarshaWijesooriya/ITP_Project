<?php
	require 'configure.php';
?>

<html>
	<head>
		<!-- add a title (a)-->
		<title>PharmacyMS</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/home.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
font-family: Arial, Helvetica, sans-serif;
   min-height: 100vh;
  position: relative;
  background: url("image/img.jpg") no-repeat right center;
  background-size: cover;
  
}


img {
  max-width: 100%; }

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 200px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color:#e0ffff;
  width:400px;
  height:500px;
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color:#29465B;
  width:427px;
  height:530px;
}

.button {
	display: inline-block;
  padding: 20px 30px;
  font-size: 20px;
  text-decoration:bold;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #424242;
  border: none;
  border-radius: 2px;
}


.button:hover {background-color: #0072fd}

.button:active {
  background-color: #0072fd;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
		
	</div>
	
	<br><br>

<center><h1 style="text-decoration:bold; text-size:35px; ">HOSPITAL PHARMACY MANAGEMENT</h1></center>
<br><br>
<center><h2 style="text-decoration:bold; text-size:35px; ">Select Task To Continue</h2></center>

<br><br><br>
<center>
<div class="row">
  <div class="column">
    <div class="card1">
    <div class="card">
      <h3>MEDICINE DETAILS</h3><br><br>
       <img src="image/medi11.png" style="width:80%;"><br><br><br><br><br><br>
      <a href="MEDICINE_DETAILS.php">
		<input type="submit" style="width:100%;" class= "button" value="Continue" name="btnsubmit" >
		</a>
    </div>
	</div>
  </div>
  
  <div class="column">
  <div class="card1">
    <div class="card">
      <h3>PRESCRIPTION</h3>
       <img src="image/prescrip.png" style="width:80%;"><br><br><br>
      <a href="prescription_details.php">
		<input type="submit" style="width:100%;" class= "button" value="Continue" name="btnsubmit" >
		</a>
    </div>
	</div>
  </div>


    <div class="column">
	  <div class="card1">
    <div class="card">
      <h3>MEDICINE CATALOG</h3>
       <img src="image/calc1.png" style="width:80%;"><br><br>
      <a href="PRESCRIPTION.php">
		<input type="submit" style="width:100%;" class= "button" value="Continue" name="btnsubmit" >
		</a>
    </div>
	</div>
  </div>
  
    <div class="column">
	  <div class="card1">
    <div class="card">
      <h3>MONTHLY REPORT</h3>
       <img src="image/report1.png" style="width:80%;"><br><br><br>
      <a href="barchart.php">
		<input type="submit" style="width:100%;" class= "button" value="Continue" name="btnsubmit" >
		</a>
    </div>
	</div>
  </div>
</center>

<br><br><br><br><br><br><br>
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
		    <p>+94 712 571 22</p>
			<p>eservice@gmail.com</p>
			<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
			<br><hr class = "hr1">
			<p class="para4"> @2022 All Rights Reserved </p><br>
			
			<div class="socialmedia">
				<ul>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
				</ul>
			</div>
			
			<br>
		</footer>
	</body>
</head>
</html>