<?php

	/* -- Session -- */
   
	require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');                                                                                                                                                                                                                                                       	                   /* SUDA */

    //need to implement a search bar to search complains manually
	$sql_sorted_02 = " SELECT * FROM `complaint` ORDER BY ComplaintID DESC ";
	$result_02 = $conn->query($sql_sorted_02);
	
	$conn->close();

?>


<html>

	<head>

		<!-- add a title (a)-->
		<title>Complain Page Manager - Section 02</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/ComplainPage_2.css"><!--NEW-->

	</head>

	<body>

	<br><br><br>

    <section>

        <h1>Search Results - Sorted method :- Latest Received</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Complain ID</th>
                <th>Received Complains</th>
                <th>Provided Answers</th>
                <th>Feedback Manager ID</th>
				<th>Patient ID</th>
                <th></th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows_02=$result_02->fetch_assoc()){
            ?>
            <tr> 
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				<form method = "POST" action="ComplainPage_3.php" >
                <td> <input type="textarea" name="complain_id" value="<?php echo $rows_02['ComplaintID'];?>" readonly> </td>
                <td> <input type="textarea" name="complain_text" value="<?php echo $rows_02['complaints'];?>" readonly> </td>
                <td> <input type="textarea" name="complain_answer" value="<?php echo $rows_02['Answers'];?>" readonly> </td>
				<td> <input type="textarea" name="complain_feedback_manager" value="<?php echo $rows_02['Feedback_ManagerID'];?>" readonly> </td>
				<td> <input type="textarea" name="complain_patient_id" value="<?php echo $rows_02['PatientID'];?>" readonly> </td>
				<td><input type="submit" value="EDIT" name="edit"></td>
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