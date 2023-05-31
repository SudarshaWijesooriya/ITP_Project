<?php

  require '../fconfig.php';

	session_start();
	$user_id = $_SESSION['user_id'];

  if(!isset($user_id))
		header('location:patientlogin.php');

  
  @$submission_button = $_POST['add'];
  @$user_faq = $_POST['new_user_faq'];
  
  if(isset($submission_button)){

    @$sql = " INSERT INTO faq(FAQID,Question,Answers,Feedback_ManagerID,PatientID) VALUES ('','$user_faq','<empty>','0','$user_id') " ;
    @$result = $conn -> Query($sql);    

    if($result)
		{
			
			echo "<script> alert('Submission Sucessfull') </script>" ;
			
		}
		else
		{
			
			echo "Submission Failed , ".$conn -> error ;
			
		}

    $conn -> close();
    
  }

?>

<html>

  <head>

    <style>
          
          .button {
            display: inline-block;
            padding: 0.75rem 1.25rem;
            border-radius: 10rem;
            color: #fff;
            text-transform: uppercase;
            font-size: 1rem;
            letter-spacing: 0.15rem;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
          }

          .button:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0cf;
            border-radius: 10rem;
            z-index: -2;
          }

          .button:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background-color: #008fb3;
            transition: all 0.3s;
            border-radius: 10rem;
            z-index: -1;
          }

          .button:hover {
          color: #fff;
          }

          .button:hover:before {
          width: 100%;
          }

          /* optional reset for presentation */
          * {
          font-family: Arial;
          text-decoration: none;
          font-size: 20px;
          }

          .container {
          padding-top: 50px;
          margin: 0 auto;
          width: 100%;
          text-align: center;
          }

          h1 {
          text-transform: uppercase;
          font-size: 0.8rem;
          margin-bottom: 2rem;
          color: #777;
          }

          span {
          display: block;
          margin-top: 2rem;
          font-size: 0.7rem;
          color: #777;
          }

          span a {
          font-size: 0.7rem;
          color: #999;
          text-decoration: underline;
          }
      
    </style>

</head>

<body>

  <div class="container">

    <a href="../ComplainPageClient.php" class="button">Redirect to Complaint page</a>

  </div>

  <div class="container">

    <a href="../FAQPageClient.php" class="button">Redirect to FAQ page</a>

  </div>

  <div class="container">

    <a href="../patientprofile.php" class="button">Redirect to Patient Profile page</a>

  </div> 

</body>

</html>