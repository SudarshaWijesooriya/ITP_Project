<?php

	/* -- Session -- */
   
	require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');                                                                                                                                                                                                                                   	                   /* SUDA */

    $sql_sorted_03 = " SELECT * FROM `faq` WHERE PatientID = $user_id ORDER BY Feedback_ManagerID DESC , FAQID DESC ";
    $result_03 = $conn->query($sql_sorted_03);
    
    if(@$_POST['delete']){

        @$f_id = $_POST['faq_id'];
        @$sql = " DELETE FROM `faq` WHERE FAQID =  $f_id ";
        @$result = $conn -> Query($sql);
        
        if($result)
            header('location:ViewFAQs.php');
        
    }
    
    
    
	
	$conn->close();

?>


<html>

	<head>

		<!-- add a title (a)-->
		<title>Submitted Questions</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/ViewFAQs.css"><!--NEW-->

	</head>

	<body>


	<br><br><br>

    <section>
        <!-- TABLE CONSTRUCTION -->
        <h1>Submitted Questions</h1>
        <table>
            <tr>
                <th>Question Asked</th>
                <th>Provided Answer</th>
                <th></th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows_03=$result_03->fetch_assoc()){
            ?>
            <tr> 
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				<form method = "POST" action="ViewFAQs.php" >
                <input type="hidden" name="faq_id" value="<?php echo $rows_03['FAQID'];?>" readonly>
                <td> <input type="textarea" name="faq_text" value="<?php echo $rows_03['Question'];?>" readonly> </td>
                <td> <input type="textarea" name="faq_answer" value="<?php echo $rows_03['Answers'];?>" readonly> </td>
				<input type="hidden" name="faq_feedback_manager" value="<?php echo $rows_03['Feedback_ManagerID'];?>" readonly>
				<input type="hidden" name="faq_patient_id" value="<?php echo $rows_03['PatientID'];?>" readonly>
				<td> <input type="submit" value="DELETE" name="delete"></td>
				</form>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

    <br><br><br>

	<form method = "POST" action="FAQPageClient.php" >
    <input type="submit" value="REDIRECT" name="delete"></td>
    </form>

	<!-- Implementation ended here-->

	</body>

</html>