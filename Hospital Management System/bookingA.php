<?php
        require 'configure.php';
        
        
            $AppointmentID = $_GET['id'];
            
            $sql ="SELECT a.AppointmentID ,d.Specialization, d.Last_Name , a.Appointment_Time , a.Appointment_Date , p.First_Name , p.Email
FROM doctor d , appointment a , patient p ,patient_appointment pa
WHERE d.DoctorID = p.DoctorID AND pa.AppointmentID = a.AppointmentID AND pa.patientID = p.patientID AND a.AppointmentID = $AppointmentID ";                         
            $result = $con -> query($sql);



       if($result -> num_rows > 0){
            
           echo"<table border = 1 class = 'table' id = 'table'>";
           echo"<th>Appointment id</th><th>Doctor Name</th><th>Specialization</th><th>Time </th><th>Date</th><th>Patient name</th><th>Patient email</th>";
          
           while($row = $result->fetch_assoc())
           {
               echo"<tr>";
               echo"<td>".$row['AppointmentID']."</td>";
               echo"<td>".$row['Last_Name']."</td>";
               echo"<td>".$row['Specialization']."</td>";
               echo"<td>".$row['Appointment_Time']."</td>";
               echo"<td>".$row['Appointment_Date']."</td>";
               echo"<td>".$row['First_Name']."</td>";
               echo"<td>".$row['Email']."</td>";
               echo"</tr>";
               
           }
           
            echo"</table>";
       }
      
             
           else
           {
               echo"<Script>alert('Patient Recods are not there.......')</script>";
           }
          //$con -> close();
    ?>

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