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
		<link rel="stylesheet" href="styles/addMedicine.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
				<style>
		
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Poppins-Regular";
  font-size: 13px;
  margin: 0;
  color: #999; 
  background-image: url("../image/img.jpg");
 background-repeat:no-repeat;}

input, textarea, select {
  font-family: "Muli-Regular";
  font-size: 13px;
  color: #666; }



img {
  max-width: 100%; }



a {
  text-decoration: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  position: relative;
  background: url("image/img.jpg") no-repeat right center;
  background-size: cover; }

.inner {
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translateY(-50%);
  width: 511px;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
  background: url("../image/bg-inner.png") repeat;
  padding: 7px; }

form {
  width: 100%;
  padding: 57px 46px 55px;
  background: #fff; }

select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer; }

h3 {
  text-transform: uppercase;
  font-size: 35px;
  font-family: "Poppins-Medium";
  color: #3e91f7;
  letter-spacing: 3px;
  margin-bottom: 22px;
  margin-top: 5px;
  font-weight: 500; }

.form-row {
  display: flex;
  margin-bottom: 25px; }
  .form-row.last {
    margin-bottom: 22px; }
  .form-row .form-wrapper {
    width: 50%; }
    .form-row .form-wrapper:first-child {
      margin-right: 30px; }

.form-wrapper {
  position: relative;
    }
  .form-wrapper label {
	
	border: none;
    display: block;
    font-family: "Muli-SemiBold";
    font-size: 15px;
    color: #4c4c4c;
    margin-bottom: 8px; }
	.form-wrapper i.zmdi-chevron-down {
    position: absolute;
    right: 16px;
    top: 42px;
    font-size: 15px;
    color: #666; }
 

.form-control {
  border: 3px solid #e6e6e6;
  display: block;
  width: 100%;
  height: 42px;
  padding: 0 14px; }
  .form-control.datepicker-here {
    padding-left: 39px; }




button {

  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
  border: none;
  width: 173px;
  height: 42px;
  margin-top: 30px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #424242;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  font-size: 15px;
  position: relative;
  transition: all 0.3s ease; }
  button span {
    letter-spacing: 3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s; }
  button:after {
    content: attr(data-text);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 50%;
    left: 0;
    opacity: 0;
    letter-spacing: 3px;
    -webkit-transform: translate(-30%, -25%);
    transform: translate(-30%, -25%);
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s; }
  button:hover {
    background: #0072fd; }
    button:hover span {
      opacity: 0;
      -webkit-transform: translate(0px, 40px);
      transform: translate(0px, 40px); }
    button:hover:after {
      opacity: 1;
      -webkit-transform: translate(0, -25%);
      transform: translate(0, -25%); }

@media (max-width: 1199px) {
  .wrapper {
    background-position: center center; } }
@media (max-width: 991px) {
  .inner {
    width: 60%; } }
@media (max-width: 767px) {
  .inner {
    width: 100%;
    transform: translateY(0);
    position: static;
    padding: 0;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none; }

  form {
    padding: 30px 20px; }

  .form-row {
    display: block; }
    .form-row .form-wrapper {
      width: 100%;
      margin-bottom: 25px; }
      .form-row .form-wrapper:first-child {
        margin-right: 0; } }

/*# sourceMappingURL=style.css.map */

		
			.button {
				box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
				border: none;
				width: 173px;
				height: 42px;
				margin-top: 30px;
				cursor: pointer;
				display: flex;
				align-items: center;
				justify-content: center;
				padding: 0;
				background: #424242;
				color: #fff;
				text-transform: uppercase;
				font-family: "Muli-SemiBold";
				font-size: 15px;
				position: relative;
				transition: all 0.3s ease; 
			}
			.button span {
				letter-spacing: 3px;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s; }
			.button::after {
				content: attr(data-text);
				position: absolute;
				width: 100%;
				height: 100%;
				top: 50%;
				left: 0;
				opacity: 0;
				letter-spacing: 3px;
				-webkit-transform: translate(-30%, -25%);
				transform: translate(-30%, -25%);
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s; }
		.button:hover {
				background: #0072fd; }
				button:hover span {
				  opacity: 0;
				  -webkit-transform: translate(0px, 40px);
				  transform: translate(0px, 40px); }
		.button:hover::after {
			  opacity: 1;
			  -webkit-transform: translate(0, -25%);
			  transform: translate(0, -25%); }
			  
			  @import url('https://fonts.googleapis.com/css?family=Poppins:900i');

.butt{
	float:right;
	
	height:50px;
	width:150px;
	background:#BDC3C7 ;
}




.cta {
    display: flex;
    padding: 2px 10px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    color: white;
    background: #2980B9;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #AED6F1;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  span {
    transform: skewX(15deg) 
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

path.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #2980B9 ;
    }
    100% {
        fill: white;
    }
}
		</style>
	
	 
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
		<br>
	</div>
	
	<br><br>
	
	<!-------------------------------form----------------------------------------->
	<div class="wrapper">
			<br>
			<center>
			<div class="inner">
					<form method="POST" name="form" action="">
				<div>
				</div>
					<h3>Update Medicines</h3>
					<center>
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Medicine ID </label>
								<input type="text" name="mid" class="form-control">
								<!--Value="<//?php echo $row['MedicineID']?>"-->
							</div>
							<div class="form-wrapper">
							<lable for ="" style="font-size:17px; color:black;"> Quantity</label><br>
							<input type="text" name="currentQty" class="form-control" >
							</div>	
						</div>
			
					<br>
					
					<input type= "submit" name="btnSubmit" value="UPDATE" class="button"><br>
			</div>
			
			</form>
			</div>
			
			<div class="butt">
						
						  <a class="cta" href="MEDICINE_DETAILS.php">
							<span>Back</span>
							<span>
							  <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
								  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
								  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
								</g>
							  </svg>
							</span> 
						  </a>
						
					</div>
	
	<br><br>
	
	<!------------------------------------------php-------------------------------------------------->	
	<?php

	if(isset($_POST['btnSubmit']))
	{
		
	$MedicineID = $_POST['mid'];
	$Current_Quantity =$_POST['currentQty'];
	
	//insert query
	$sql = "UPDATE `medicine` SET Current_Quantity='$Current_Quantity' WHERE MedicineID = '$MedicineID'";
	
	if($con -> query($sql))
	{
		echo"<script> alert('updated succesfully') </script>";
		
	}
	else
	{
		echo"Error updating" , $con -> error;
		
	}
	}
	
	$con ->close();
	
	

?>
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