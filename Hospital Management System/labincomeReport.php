<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Payment home</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/style.css">
		
		
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>


		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 
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
			<a href="home.html" class="login"><?php
						if( isset ( $_SESSION["uID"] ) ) {
							?> Logout <?php
						}
						else {
							?> Login <?php
						}
					?></a>
		</div>
	</div>
	<div class="bottnav">
		<ul>
		  <li><a href="homepay.php">Home</a></li>
		  <li><a href="addcard.php">Add a Card</a></li>
		  <li><a href="makepay.php">Make Payment</a></li>
		  <li><a href="Mycards.php">My Cards</a></li>
		  <li><a href="labincomeReport.php">Report</a></li>
		  
		  
		</ul>
	</div>
	</head>
	<body>
	<div class = "background">
			<h2 class = "loginheading" >Report</h2> 
			<div class="login1">    
				<h1>Lab Income Report</h1>
				<br>
				<div class="table-wrapper">	
						<table class = "fl-table">
							<thead>
							<tr>
								<th>Report ID</th>
								<th>Lab Report Name</th>
								<th>Duration To Return</th>
								<th>Price</th>
							
							</tr>
							</thead>
								<br>
								<tbody>
									<?php     
										require "config.php";
										
										
										
										
										
											
												$query = "SELECT * from lab_report";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0)
												{
													foreach($query_run as $items)
													{
														?>
															<tr>
																<td><?= $items['ReportID']; ?></td>
																<td><?= $items['Report_Name']; ?></td>
																<td><?= $items['Duration_To_Return']; ?></td>
																<td><?= $items['Price']; ?></td>
										
															</tr>
														<?php
													}
												}
												else
												{
													?>
														<tr>
														<td colspan="4">No Record Found</td>
														</tr>
													<?php
												}
										
									?>
								</tbody>
						</table>
					</div>
				<br><br>
				<button onclick = "window.print();" class = "print"> Print </button>
			</div>

			
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
		<img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
		<p>+94 712 571 22</p>
		<p>eservice@gmail.com</p>
		<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
		<hr class = "hr1">
		<p class="para4"> @2022 All Rights Reserved </p>
		
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