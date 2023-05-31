<?php

require 'fconfig.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:patientlogin.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:patientlogin.php');
}

?>

<!DOCTYPE html>
<html>

	<head>

		<!-- add a title (a)-->
		<title>FAQ Page Client</title>

		<!--add metaInfo-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!--NEW-->
		<link rel="stylesheet" href="Styles/ComplainPageClient.css"><!--NEW-->

		<!--<add Javascript-->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!--NEW-->

        <!--add JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!--NEW-->
        
	
	</head>

	<body>
	 
		<div class="topnav">
			<div class="logo">
			<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="patientprofile.php">Patient Profile</a>
			<a href="ComplainPageClient.php">Complain</a>
			<a href="FAQPageClient.php">Question</a>
			<a href="ViewComplains.php">Delete Complains</a>
			<a href="ViewFAQs.php">Delete Questions</a>
			<a href="patientprofile.php?logout=<?php echo $user_id; ?>" class="logout-btn">logout</a>
		</div>

		<br>

		</div>

		<div class = "alert alert-info">
			<a href="#" class="close" data-dismiss="alert"></a>
			<strong>You are In User FAQ Page</strong>
		</div>
		

		<!-- Implementation started here-->
		<br><br><br><br>

		<div class = "container">

			<div class="wrapper">
				<form class="form" method="POST" action="php/faq_record_add.php">
				  <div class="pageTitle title">Ask a Question</div>
				  <div class="secondaryTitle title">Please enter your question below</div>
				  <textarea class="message formEntry" placeholder="Mention your question Here" name ="new_user_faq"></textarea>
				  <button class="submit formEntry" name="add">Submit</button>
				</form>
			  </div>


		</div>

		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		<br><br><br><br>
		


		<!-- Implementation ended here-->

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