<?php

	/* -- Session -- */
   
	require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');                                                                                                                                                                                                                                                       	                   /* SUDA */

	if(isset($_GET['logout'])){
		unset($user_id);
		session_destroy();
		header('location:feedbackmlogin.php');
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Feedback Manager Profile</title>

		<!--add metaInfo-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/logpro.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		
		<!--<add Javascript-->
		<!--<script src="js1/script1.js"> </script>-->
	 
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="feedbackmprofile.php">Feedback Profile</a>
			<a href="FAQPageManager.php">FAQ</a>
			<a href="ComplainPageManager.php">Complains</a>
			<a href="FeedbackReportAccess.php">Feedback Reports</a>
			<a href="feedbackmprofile.php?logout=<?php echo $user_id; ?>" class="logout-btn">logout</a>
		</div>
	</div>
	
	<div class = "background">
		<h2 class = "loginheading" >Feedback Manager Profile</h2>
		
		<div class = "welcome">
		<?php
         $select = mysqli_query($conn, "SELECT * FROM `feedback_manager` WHERE Feedback_ManagerID = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select); /* Welcome Message */ 
         }?> <h2>Welcome <?php echo $fetch['First_Name']; ?></h2></div>
	  
	<!---footer-->
	<!----------------------footer-------------------------------------------->
	<br><br><br><br><br><br><br><br><br><br>
	</div>
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
</head>
</html>