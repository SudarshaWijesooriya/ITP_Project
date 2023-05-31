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


<html>

	<head>

		<!-- add a title (a)-->
		<title>FAQ Page Manager</title>

		<!--add metaInfo-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/logpro.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!--NEW-->
		<link rel="stylesheet" href="Styles/FAQPageManager.css"><!--NEW-->
		
		<!--<add Javascript-->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!--NEW-->
		<script src = "Javascript/FAQPageManager.js"></script>

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
				<a href="feedbackmprofile.php">Feedback Profile</a>
				<a href="FAQPageManager.php">FAQ</a>
				<a href="ComplainPageManager.php">Complains</a>
				<a href="FeedbackReportAccess.php">Feedback Reports</a>
				<a href="feedbackmprofile.php?logout=<?php echo $user_id; ?>" class="logout-btn">logout</a>
			</div>
		</div>
		<br>

		</div>

		<div class = "alert alert-info">
			<a href="#" class="close" data-dismiss="alert"></a>
			<strong>You are In Manager FAQ Page</strong>
		</div>
		

		<!-- Implementation started here-->
            
            
		<div class="container">
            
            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="FAQPage_1.php">Sorted method :- Latest Received</a>
                    </h4>
                  </div>
                  <div id="ex1" class="panel-collapse collapse in">
                    <div class="panel-body">Latest received questions are available here</div>
                  </div>
                </div>
            
            </div>


        </div>
		
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