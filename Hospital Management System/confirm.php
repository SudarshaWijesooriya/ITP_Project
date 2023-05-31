<?php

	require  'configure.php';
	// select Query
    if(isset($_POST["b"]))
        {
           
    $AppointmentID = $_POST['AppointmentID'];
    $Appointment_Time = $_POST['Appointment_Time'];
	$Appointment_Date= $_POST['Appointment_Date'];
    $Specialization= $_POST['Specialization'];
	$Last_Name= $_POST['Last_Name'];
    $First_Name= $_POST['First_Name'];
    $Email= $_POST['Email'];    
    $sql = "INSERT INTO book (AppointmentID, Appointment_Time,Appointment_Date,  Specialization , Last_Name, First_Name,Email) VALUES ('$AppointmentID','$Appointment_Time','$Appointment_Date' , '$SSpecialization', '$Last_Name' , '$First_Name','$Email')";
	
    if($con -> query($sql))
	{
		echo"Booking Confirmed";
		
	}
	else
	{
		echo"Error " , $con -> error;
		
	}
	
	
	$con ->close();
	
}

?>


	
?>