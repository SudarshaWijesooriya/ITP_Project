<?php

  require '../fconfig.php';

	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');

  
  @$changed_feedback_manager_id = $user_id;
  @$changed_answer = $_POST['new_faq_answer'];
  @$changed_id = $_POST['new_faq_id'];
  @$submission_button = $_POST['update'];

  @$changed_id = $_POST['new_faq_id'];
  @$changed_faq = $_POST['new_faq_txt'];
  @$changed_answer = $_POST['new_faq_answer'];
  @$changed_feedback_manager_id = $user_id;
  @$changed_patient_id = $_POST['new_faq_patient_id'];
  @$submission_button = $_POST['update'];

  
  if(isset($submission_button)){

    @$sql = " UPDATE `faq` SET `FAQID`='$changed_id',`Question`='$changed_faq',`Answers`='$changed_answer',`Feedback_ManagerID`='$changed_feedback_manager_id',`PatientID`='$changed_patient_id' WHERE  FAQID = '$changed_id' ";
    @$result = $conn -> Query($sql);

    if($result)
		{
			
			echo "<script> alert('Updated Sucessfully') </script>" ;
			
		}
		else
		{
			
			echo "Error Updating record in faq table , ".$conn -> error ;
			
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

    <a href="../ComplainPage_1.php" class="button">Redirect to Search Complains</a>

  </div>

  <div class="container">

    <a href="../ComplainPage_2.php" class="button">Redirect to Latest Received Complains</a>

  </div>

  <div class="container">

    <a href="../FAQPage_1.php" class="button">Redirect to Latest Received FAQs</a>

  </div>

  <div class="container">

    <a href="../feedbackmprofile.php" class="button">Redirect to Feedback Manager Profile page</a>

  </div> 

</body>

</html>