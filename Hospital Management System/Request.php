<!DOCTYPE html>
<?php

	require 'config.php';
	
?>
<html>
	<head>
    
		<!-- add a title (a)-->
		<title>Request Form</title>
		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="Styles/Request.css">
		<link rel="stylesheet" href="Styles/reqbk.css">
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
						<script>
			function validateForm1(){
                
                qt = document.forms["form"]["Qty"].value;
				dt = document.forms["form"]["date"].value;
				var numpattern=/^[0-9]+$/;
				var datepatton=/^(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
				/*var datepatton = =/^(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
				if (it==null||it=="") {
                    alert("Pl. enter the ID")
                    return false
                }*/
				if(! qt.match(numpattern) && qt!=""){
					alert("Only enter numbers")
					return false;
				}
                else if (!dt . match(datepatton) && dt!="") {
                    alert(" Enter valid date!")
                    return false
                }
		
				
                else  {
                    return true; 
                }
            }
		
		</script>
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
		<br><br><br>
		<center>
			<div class="maindiv">
				<h3>Request Form</h3>
					<div class="container">
					<form name="myForm" action="req.php" onsubmit="return validateForm()" method="post">
					  
						<div class="row">
						  <div class="col-25">
							<label for="Rid"> Request ID</label>
						  </div>
						  <div class="col-75">
						  <?php 
							require 'config.php';
							$result = mysqli_query($con,"SHOW TABLE STATUS LIKE 'requestlist'");
							$data = mysqli_fetch_assoc($result);
							$next_increment = $data['Auto_increment'];
							
							
						?>
							<input type="text" id="Rid" name="ReqID" Value="<?php echo $next_increment; ?>" readonly >
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="sname">Section Name</label>
						  </div>
						  <div class="col-75">
							<select id="sname" name="Secname">
							  <option value="Laboratory">Laboratory</option>
							  <option value="pharmacy">Pharmacy</option>
							</select>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="Iname">Item Name</label>
						  </div>
						  <div class="col-75">
						  <select id="Iname" name="Itemname">
						  <?php 
							require 'config.php';
							$query ="SELECT * FROM item";
							$result = $con->query($query);
							if($result->num_rows> 0){
								while($optionData=$result->fetch_assoc()){
								$option =$optionData['Name'];
								
							?>
							<option value="<?php echo $option; ?>" ><?php echo $option; ?>  </option>
						   <?php
							}}
						?>
						  <!--</*?php
							require 'config.php';
							$s=mysqli_query($con,"SELECT * FROM item");
						  ?>
							<select id="Iname" name="Itemname">
							</*?php
								while($r=mysql_fetch_array($s)){
							?>		
								
							  <option ></*?php echo $r['Name'];?></option>
							</*?php
								}
							?>*/-->
							</select>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="Qty">Quantity</label>
						  </div>
						  <div class="col-75">
							<input type="text" id="Qty" name="Qty">
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="RDay">Required Date</label>
							
						  </div>
						  <div class="col-75" >
						  <!--span class="lnr lnr-calendar-full"></span>
							<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp1"-->
							
						  <!--span class="lnr lnr-calendar-full"></span-->
							<input type="text" id="date" name="date" placeholder="dd/mm/yyyy">
							
					
						  </div>
						</div><br>
						<input type= "submit" value="ADD" class="button"><br>
						
						<a href="#" class="but" onclick="setInputValue()">Demo</a>
						<script>
					function validateForm() {
					  let x = document.forms["myForm"]["Qty"].value;
					  let y = document.forms["myForm"]["date"].value;
					  var numpattern=/^[0-9]+$/;
					var datepatton=/^(0[1-9]|1[0-9]|2[0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
					 
					  if (!x . match(numpattern) || x == "") {
						alert("Quantity must be number ");
						return false;
					  }
					  else if (!y . match(datepatton) || y == "") {
						alert("date must be valide date");
						return false;
					  }
					 
					}
					</script>
					<script>
					function setInputValue()
					{
						// using value property
						document.getElementById("Qty").value = "20";
						document.getElementById("date").value = "02/12/2022";
						
						
					}
					</script>

					  </form>
					  
					</div>

			</div>
		</center>
	
		<br>
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