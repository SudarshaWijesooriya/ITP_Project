<?php

	/* -- Session -- */
   
	require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

    $display_msg = "";
    $int_val_01 = 0;
    $int_val_02 = 0;
    $my_selected_user_id = -1;

	if(!isset($user_id))
		header('location:feedbackmlogin.php');                                                                                                                                                                                                                                        	                   /* SUDA */

    if(@$_POST['my_selected_submit'])
        $int_val_01 = 1;
    
    if($int_val_01 == 1){

        $my_selected_user_id = $_POST['my_selected_user_id'];

        if(empty($my_selected_user_id)){
            $int_val_01 = 0;
            $display_msg = "Enter a valid patient ID";
        }
        else{

            $int_val_01 = 0;
            $sql_sorted_01 = " SELECT * FROM `complaint` WHERE PatientID = $my_selected_user_id ";
            $result_01 = $conn->query($sql_sorted_01);
    
            if(mysqli_num_rows($result_01) > 0){
                $int_val_01 = 1;
                $display_msg = "Results for patient ID : " .$my_selected_user_id;
            }
            else{
                $int_val_01 = 0;
                $display_msg = "No records could be found for patient ID : " .$my_selected_user_id ;
            }
                

        }

    }
	
	$conn->close();

?>


<html>

	<head>

		<!-- add a title (a)-->
		<title>Complain Page Manager - Section 01</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/ComplainPage_1.css"><!--NEW-->

	</head>

	<body>

    <h2 style="background-color:#3373C4;color:white"> <?php echo $display_msg ?> </h2>

    <form action="#" method="POST">

        <center>
        <table>
            <tr>
	            <td>Search Here</td>
	            <td><input type="text" name="my_selected_user_id" size="100"></td>
	            <td><input type="submit" name="my_selected_submit" value="SEARCH"></td>
            </tr>
        </table>
        </center>

    </form>

    <?php if($int_val_01 == 1) { ?>

    <section>

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
                while($rows_01=$result_01->fetch_assoc()){
            ?>
            <tr> 
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
				<form method = "POST" action="ComplainPage_3.php" >
                <td> <input type="textarea" name="complain_id" value="<?php echo $rows_01['ComplaintID'];?>" readonly> </td>
                <td> <input type="textarea" name="complain_text" value="<?php echo $rows_01['complaints'];?>" readonly> </td>
                <td> <input type="textarea" name="complain_answer" value="<?php echo $rows_01['Answers'];?>" readonly> </td>
				<td> <input type="textarea" name="complain_feedback_manager" value="<?php echo $rows_01['Feedback_ManagerID'];?>" readonly> </td>
				<td> <input type="textarea" name="complain_patient_id" value="<?php echo $rows_01['PatientID'];?>" readonly> </td>
				<td><input type="submit" value="EDIT" name="edit"></td>
				</form>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

    <?php } ?>

	<!-- Implementation ended here-->

	</body>

</html>