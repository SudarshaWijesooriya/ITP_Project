<?php

	/* -- Session -- */
   
	require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');                                                                                                                                                                                                                                                	                   /* SUDA */

    $sql_sorted_03 = " SELECT * FROM `faq` ORDER BY FAQID DESC ";
    $result_03 = $conn->query($sql_sorted_03);
	
	$conn->close();

?>


<html>

	<head>

		<!-- add a title (a)-->
		<title>FAQ Page Manager - Section 01</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/FAQPage_1.css"><!--NEW-->

	</head>

	<body>


	<br><br><br>

    <section>
        <h1>Search Results - Sorted method :- Latest Received</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>FAQ ID</th>
                <th>Question Asked</th>
                <th>Provided Answer</th>
                <th>Feedback Manager ID</th>
				<th>Patient ID</th>
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
				<form method = "POST" action="FAQPage_2.php" >
                <td> <input type="textarea" name="faq_id" value="<?php echo $rows_03['FAQID'];?>" readonly> </td>
                <td> <input type="textarea" name="faq_text" value="<?php echo $rows_03['Question'];?>" readonly> </td>
                <td> <input type="textarea" name="faq_answer" value="<?php echo $rows_03['Answers'];?>" readonly> </td>
				<td> <input type="textarea" name="faq_feedback_manager" value="<?php echo $rows_03['Feedback_ManagerID'];?>" readonly> </td>
				<td> <input type="textarea" name="faq_patient_id" value="<?php echo $rows_03['PatientID'];?>" readonly> </td>
				<td> <input type="submit" value="EDIT" name="edit"></td>
				</form>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

	

	<!-- Implementation ended here-->

	</body>

</html>