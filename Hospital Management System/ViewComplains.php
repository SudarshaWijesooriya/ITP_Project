<?php

require 'fconfig.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:patientlogin.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:patientlogin.php');
}

$sql_sorted_02 = " SELECT * FROM `complaint` WHERE PatientID = $user_id ORDER BY Feedback_ManagerID DESC , ComplaintID DESC ";
$result_02 = $conn->query($sql_sorted_02);

if(@$_POST['delete']){

    @$c_id = $_POST['complain_id'];
    @$sql = " DELETE FROM `complaint` WHERE ComplaintID =  $c_id ";
    @$result = $conn -> Query($sql);

    if($result)
        header('location:ViewComplains.php');

}

?>


<html>

	<head>

		<!-- add a title (a)-->
		<title>Submitted Complains</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="Styles/ViewComplains.css"><!--NEW-->

	</head>

	<body>

	<br><br><br>

    <section>

        <h1>Submitted Complains</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Received Complains</th>
                <th>Provided Answers</th>
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
				<form method = "POST" action="ViewComplains.php" >
                <input type="hidden" name="complain_id" value="<?php echo $rows_02['ComplaintID'];?>" readonly>
                <td> <input type="textarea" name="complain_text" value="<?php echo $rows_02['complaints'];?>" readonly> </td>
                <td> <input type="textarea" name="complain_answer" value="<?php echo $rows_02['Answers'];?>" readonly> </td>
				<input type="hidden" name="complain_feedback_manager" value="<?php echo $rows_02['Feedback_ManagerID'];?>" readonly>
				<input type="hidden" name="complain_patient_id" value="<?php echo $rows_02['PatientID'];?>" readonly>
                <td><input type="submit" value="DELETE" name="delete"></td>
				</form>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

    <br><br><br>

    <form method = "POST" action="ComplainPageClient.php" >
    <input type="submit" value="REDIRECT" name="delete"></td>
    </form>

	

	<!-- Implementation ended here-->

	</body>

</html>