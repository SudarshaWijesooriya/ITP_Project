<?php

  require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');

  @$previous_value_faq_id = $_POST['faq_id'];
  @$previous_value_faq_txt = $_POST['faq_text'];
  @$previous_value_faq_ans = $_POST['faq_answer'];
  @$previous_value_faq_patient_id = $_POST['faq_patient_id'];

?>

<html>

	<head>

		<!-- add a title (a)-->
		<title>FAQ Page Manager - Section 02</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/FAQPage_2.css"><!--NEW-->

        
	
	</head>

	<body>

		<!-- Implementation started here-->
		
		<div class="center">
        <h1>Answer Questions</h1>
        <form method= "POST" action="php/faq_record_update.php">
        <span><b>Question_ID</b></span>
        <div class="inputbox">
            <input type="textarea" name="new_faq_id" value="<?php echo $previous_value_faq_id ?>" required="required" readonly>
          </div>
          <span><b>Issue</b></span>
          <div class="inputbox">
            <input type="textarea"  name ="new_faq_txt"  value="<?php echo $previous_value_faq_txt ?>" required="required" readonly>
          </div>
          <span><b>Answer</b></span>
          <div class="inputbox">
          <input type="textarea" name = "new_faq_answer" value="<?php echo $previous_value_faq_ans ?>" required="required">
          </div>
          <input type="hidden" name = "new_faq_id" value="<?php echo $previous_value_faq_id ?>" required="required">
          <input type="hidden" name = "new_faq_patient_id" value="<?php echo $previous_value_faq_patient_id ?>" required="required">
          <div class="inputbox">
            <input type="submit" name="update" value="UPDATE">
          </div>
        </form>

        <form method= "POST" action="php/faq_record_delete.php">
        <input type="hidden" name = "new_faq_id" value="<?php echo $previous_value_faq_id ?>" required="required">
        <div class="inputbox">
            <input type="submit" name="delete" value="DELETE">
          </div>
        </form>
      </div>

		<!-- Implementation ended here-->

	</body>

</html>