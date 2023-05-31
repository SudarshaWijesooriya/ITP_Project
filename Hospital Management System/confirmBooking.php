<?php

	require  'configure.php';
	// select Query
	$sql ="SELECT a.AppointmentID ,d.Specialization, d.Last_Name , a.Appointment_Time , a.Appointment_Date , p.First_Name , p.Email
    FROM doctor d , appointment a , patient p ,patient_appointment pa
    WHERE d.DoctorID = p.DoctorID AND pa.AppointmentID = a.AppointmentID AND pa.patientID = p.patientID" ;

	// resultser int result variable
	
	$result= mysqli_query($con,$sql);
	
?>

<html>
	<head>
		<!-- add a title (a)-->
		<title>Confirming Patient Appointments</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="styles/Docmain.css">
		<link rel="stylesheet" href="styles/supD1.css">
		<link rel="stylesheet" href="styles/button.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
	</head>
    <body>
	
	 
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="images/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
		<br>
	</div>
	<div class="wrapper">
	<br>
	
	<center>
		<div class="maindiv">

			<center>
				<h2>PATIENT APPOINTMENT DETAILS</h2>
				<div class="table-wrapper">
					<table class="fl-table">
						<thead>
						<tr>

                            <th>Appointment ID</th>
							
							<th>Dotor Last Name</th>
							<th>Doctor Specialization</th>
							<th>Appointment Time</th>
                            <th>Appointment Date</th>
                            <th>Patient Name</th>
                            <th>Patient Email</th>
							
                            
						</tr>
						</thead>
						<?php

							while ($row = $result -> fetch_assoc())
							{
					
							
						?>
							<tbody>
							<tr> 
                                    <td><?php echo $row["AppointmentID"]; ?></td>
									
									<td><?php echo $row["Last_Name"]; ?></td>
									<td><?php echo $row["Specialization"]; ?></td>
									<td><?php echo $row["Appointment_Time"]; ?></td>
                                    <td><?php echo $row["Appointment_Date"]; ?></td>
                                    <td><?php echo $row["First_Name"]; ?></td>
                                    <td><?php echo $row["Email"]; ?></td>
								
								<!>
							</tr>
						<?php
								
							}
						?>
						<tbody>
					</table>
				</div>
			</center>
			
	</center>
	</div>
	
	
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="images/qr2.PNG" width="121px" height="100px">
			
		    <p>+94 712 571 22</p>
			<p>eservice@gmail.com</p>
			<p>eService PLC,nO:108,W A D Ramanayaka Mawatha,Kandy,Sri Lanka</p>
		
			<br><hr class = "hr1">
			<p class="para4"> @2022 All Rights Reserved </p><br>
			
			<div class="socialmedia">
				<ul>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
				</ul>
			</div>
			
			<br>
		</footer>
   </body>	

</html>