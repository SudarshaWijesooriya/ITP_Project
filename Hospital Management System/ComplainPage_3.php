<?php

  require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');

  @$previous_value_complain_id = $_POST['complain_id'];
  @$previous_value_complain_txt = $_POST['complain_text'];
  @$previous_value_complain_ans = $_POST['complain_answer'];
  @$previous_value_complain_patient_id = $_POST['complain_patient_id'];

?>

<html>

	<head>

		<!-- add a title (a)-->
		<title>Complain Page Manager - Section 03</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/ComplainPage_3.css"><!--NEW-->

        
	
	</head>

	<body>

		<!-- Implementation started here-->
		
		<div class="center">
        <h1>Answer Complains</h1>
        <form method= "POST" action="php/complain_record_update.php">
        <span><b>Complain_ID</b></span>
        <div class="inputbox">
            <input type="textarea" name ="new_complain_id" value="<?php echo $previous_value_complain_id ?>" required="required" readonly>
          </div>
          <span><b>Issue</b></span>
          <div class="inputbox">
            <input type="textarea" name ="new_complain_txt"  value="<?php echo $previous_value_complain_txt ?>" required="required" readonly>
          </div>
          <span><b>Answer</b></span>
          <div class="inputbox">
          <input type="textarea" name = "new_complain_answer" value="<?php echo $previous_value_complain_ans ?>" required="required">
          </div>
          <input type="hidden" name = "new_complain_id" value="<?php echo $previous_value_complain_id ?>" required="required">
          <input type="hidden" name = "new_complain_patient_id" value="<?php echo $previous_value_complain_patient_id ?>" required="required">
          <div class="inputbox">
            <input type="submit" name="update" value="UPDATE">
          </div>
        </form>

        <form method= "POST" action="php/complain_record_delete.php">
        <input type="hidden" name = "new_complain_id" value="<?php echo $previous_value_complain_id ?>" required="required">
        <div class="inputbox">
            <input type="submit" name="delete" value="DELETE">
          </div>
        </form>
      </div>

		<!-- Implementation ended here-->

	</body>

</html>