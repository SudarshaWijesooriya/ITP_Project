<?php
      require'configure.php';
	  session_start();
	  
	  ?>

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
	<head>
		<!-- add a title (a)-->
		<title>Generate Report</title>
		 <style type = "text/css">
	      #chart-container{
		      width :630px;
			  height:auto;
		  }
          body {
 background-image: url("images/img.jpg");
 background-repeat:no-repeat;

}

img{
	max-width :100%;
}
.button {
  display: inline-block;
  padding: 12px 15px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#98AFC7;
  border: none;
  border-radius: 8px;
  
}
.button:hover {background-color: blue}
         
			
.container{
	background-color:#e5e9e6;
	width : 700px;
	height :300px;
	padding:50px 50px 50px 50px;
	margin: auto ;
	border-radius: 20px 20px 20px 20px;
}
          .maindiv{
	
	padding:1px;
	position:relative;
	background:#E0FFFF;
	width:800px;
	height:500px;
	text-align:center;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
	bottom: 0;
	margin-left:15px;
	margin-bottom:5px;
}
.button {
  background-color:#737CA1;
  border: none;
  color: black;
  padding: 5px 5px;
  <!--padding: 15px 32px;-->
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  
  cursor: pointer;
}
	   </style>
       </head>
       <body>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/bar31.css">
        <link rel="stylesheet" href="styles/Docmain.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
	<div class = "maindev"><br>
	 
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
</div><br><br><br><br><br><br>


	  
<?php
	    require'configure.php';
	    
			
			
			$sql2 ="SELECT COUNT(p.PatientID) AS Count
					FROM patient p, patient_appointment ap, appointment a
					WHERE p.PatientID = ap.PatientID and ap.AppointmentID = a.AppointmentID
					and Month(a.Appointment_Date) = 09 ";
		$result =$con -> query($sql2);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$Count=$row["Count"];
		}
		echo "</table>";
	}
	
	$con-> close();

?>
	  
	  
<?php
	    require'configure.php';
	    
			
			
			$sql3 =" SELECT Specialization,
					 COUNT(Specialization) as c 
					 FROM doctor d,treatment t
					 WHERE  d.DoctorID  = t.DoctorID AND Month(Date) = '09' and Year(Date) = '2022'
					 GROUP BY  Specialization
					 HAVING COUNT(Specialization) > 0
					 ORDER BY c DESC LIMIT 1  ";
		$result =$con -> query($sql3);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$Specialization=$row["Specialization"];
		}
		echo "</table>";
	}
	
	$con-> close();

?>
	
			
			
			
			
			
		
	
	
    <center>
 <div class = "barchart"><BR><BR>
 


           <h1 id = "at_ti">Monthly Highest Specialization Count</h1><br><br>
		 <br>
	<div id = "second_bar"> 
    
  <div id = "chart-container">
	     <canvas id = "mycanvas" width = "500" height = "300"></canvas>
	  
	     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	     <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.9.3/Chart.min.js"> </script>
	    <script src = "js/AppReport.js"></script>
     </div>

              <br><br><br>
              <div class="container">
			<center>
						<table border="0" width="40%" height="20%" id = "table">
							<tr>
							  
							<center><td colspan="3" ><h2 id = "tp">Summery of the Report</h2></td><br></center>
							</tr>
							
							<tr>
							    <td><h4 id = "tt">No of patients : </h4></td>
								<td><h4 id = "dt"><?php echo$Count?></h4></td>
							</tr>
							<tr>
								<td><h4 id = "tt">Highest Count Specialization: </h4></td>
								<td><h4 id = "dt"><?php echo$Specialization?></h4> </td>
							</tr>
			             </table><br><br>
						 
        <a href="add.php">
		<input type="submit" class= "button" value="BACK" name="btnsubmit" class="button"> 
		</a>
			
   </div>
	  </div>
</div>
<br><br><br>












  </div>



<br><br><br>


</center>

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
			
	</div>		<br>
		</footer>
   </body>	
</head>
</html>
	
	
	
	
	
	
	