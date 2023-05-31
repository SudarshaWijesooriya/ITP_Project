	<?php
		header('Content-Type: application/json');

		$con = new mysqli("localhost" , "root" , "" , "hospital_management_system" );
		
		$sqlQuery = "SELECT Name,Current_Stock  FROM item";

		$result = mysqli_query($con,$sqlQuery);

		$data = array();
		foreach ($result as $row) {
		$data[] = $row;
		}

		mysqli_close($con);

		echo json_encode($data);
?>
							