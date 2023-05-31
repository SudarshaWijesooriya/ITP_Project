<!DOCTYPE html>

<html>
	<head>
    
		<!-- add a title (a)-->
		<title>Supplier Details Form</title>
				<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="Styles/update.css">
		<link rel="stylesheet" href="Styles/addsbk.css">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		
		<style>

		.but{
			
           
                    border: 0;
                    outline: 0;
                    cursor: pointer;
                    color: white;
                    background-color: rgb(84, 105, 212);
                    box-shadow: rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 12%) 0px 1px 1px 0px, rgb(84 105 212) 0px 0px 0px 1px, rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(60 66 87 / 8%) 0px 2px 5px 0px;
                    border-radius: 4px;
                    font-size: 14px;
                    font-weight: 500;
                    padding: 4px 8px;
                    display: inline-block;
                    min-height: 28px;
                    transition: background-color .24s,box-shadow .24s;
                    :hover {
                        box-shadow: rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(0 0 0 / 12%) 0px 1px 1px 0px, rgb(84 105 212) 0px 0px 0px 1px, rgb(0 0 0 / 0%) 0px 0px 0px 0px, rgb(60 66 87 / 8%) 0px 3px 9px 0px, rgb(60 66 87 / 8%) 0px 2px 5px 0px;
                    }
                
		}
		
			.button {
				
                display: inline-block;
                outline: 0;
                border: 0;
				width: 173px;
				height: 42px;
                cursor: pointer;
                background: #000000;
                color: #FFFFFF;
                border-radius: 8px;
                padding: 14px 24px 16px;
                font-size: 18px;
                font-weight: 700;
                line-height: 1;
                transition: transform 200ms,background 200ms;
                :hover{
                    transform: translateY(-2px);
                }
                
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
				<br>
			</div>
		<div class="wrapper">
			<br><br><br><br>
			<center>
			<div class="inner">
				<form name="myForm" action="Addsup.php" onsubmit="return validateForm()" method="post">
				
					<h3>Add Supplier Details</h3>
					<center>
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Supplier ID </label>
								<?php 
							require 'config.php';
							$result = mysqli_query($con,"SHOW TABLE STATUS LIKE 'supplier'");
							$data = mysqli_fetch_assoc($result);
							$next_increment = $data['Auto_increment'];
							
							
						?>
								<input type="text" name="sid" class="form-control" value="<?php echo $next_increment; ?>" placeholder="<?php echo $next_increment; ?>" readonly>
							</div>
						</div>	
						<div class="form-row">
							<div class="form-wrapper">
								<label for="">Full Name</label>
								<input type="text" id="input" name="fnm" class="form-control" placeholder="Enter full name">
							</div>
						</div>
						<div class="form-row last">
							<div class="form-wrapper">
								<label for="">Email</label>
								<input type="text" id="input1" name="email" class="form-control" placeholder="Enter Email">
								
							</div>
						</div>
						<div class="form-row last">
							<div class="form-wrapper">
								<label for="">Company</label>
								<input type="text" id="input2" name="com" class="form-control" placeholder="Enter company name">
								
							</div>
						</div>
						<input type= "submit" value="ADD" class="button"><br><br>
						<a href="#" class="but" onclick="setInputValue()">Demo</a>
					</center>
					
					<script>
					function validateForm() {
					  let x = document.forms["myForm"]["fnm"].value;
					  let y = document.forms["myForm"]["email"].value;
					  let z = document.forms["myForm"]["com"].value;
					  var ep = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
					  var e = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
					  if (x == "") {
						alert("Name must be filled out");
						return false;
					  }
					   else if (!y . match(ep) || y == "") {
						alert("email must be filled out with valid email");
						return false;
					  }
					  else if (z == "") {
						alert("company must be filled out");
						return false;
					  }
					}
					</script>
					<script>
					function setInputValue()
					{
						// using value property
						document.getElementById("input").value = "Oliver Smith";
						document.getElementById("input1").value = "Oliver@gmail.com";
						document.getElementById("input2").value = "Medi Crew";
						
						
					}
					</script>
					
					
					
				</form>
				
			</div>
			</center>
			<br><br><br><br>
		
			<script src="js/jquery-3.3.1.min.js"></script>

			<!-- DATE-PICKER -->
			<script src="vendor/date-picker/js/datepicker.js"></script>
			<script src="vendor/date-picker/js/datepicker.en.js"></script>

			<script src="js/main.js"></script>
		
		</div>
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

</html>