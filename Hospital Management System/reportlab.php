<?php
	require 'configlab.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title> New Lab Report</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/HeaderFooter.css">
		<script src="https://kit.fontawesome.com/7e9997bdc9.js" crossorigin="anonymous"></script>
		
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		
		<style>
		
			<style>
		
			.container{
				margin:auto;
				width: 10px;
				max-width:6%;
			}
						
			.container form{
				font-size:18px;
				width: 50%;
				height: 75%;
				padding:80px;
				background:white;
				border-radius:4px;
				background:white;
				box-shadow:0 8px 16px rgba(0,0,0,.3);
				
			}
			
			.container form h1{
				font-family: Arial;
			}

		.form-group span{
				position: absolute;				
				font-size:16px;
				color:red;
			}
			
			#submit_error{
				color:red;
			}
			
			.form-group span i{
				color : seagreen;
			}
			
			body {
					background-image: url("image/lab50.jpg");
					background-size:cover;
			}
		
		
		</style>
		
	
	
	</head> 
	<body>
	<div class="topnav">
		<div class="logo">
		<p> <strong> e Service </strong> </p>
		</div>
		
	    <img class = "image" src="image/logo.jpg" width="121px" height="100px">
		
		<div class = "navbar">
			<a href="#">Home</a>
			<a href="#" >About Us</a>
			<a href="#" >Contact us</a>
			<a href="#">Terms & Conditions</a>
			<a href="#" class="login">Login</a>
		</div>
		<br>
	</div>
	
	 
	
	<!---------------------------------------------------------------------------------------->
		<?php
		
			$sql = "SELECT Report_name, count(*) number from lab GROUP BY Report_name";
			$result = $con -> query($sql);				
		?>
			
	
	<center>
	<div class = "container">
	<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
		<h1> Issued Lab reports from the Laboratory</h1>
		<div class="form-group">
		
		<div id="piechart">
		
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
		
        <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Report_name', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Report_name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: '',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
        </script>  
		
           <div style="width:800px;">  
                <h3 align="center">  </h3>  
                <div id="piechart" style="width: 500px; height: 500px;"></div>  
           </div>  
		   
		  </div>
   
	   
	
		<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
			// Load google charts
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			// Draw the chart and set the chart values
			function drawChart() {
			  var data = google.visualization.arrayToDataTable([
			  ['Task', 'Hours per Day'],
			  ['Fasting Blood Glucose', 234],
			  ['Mineral and Vitamin', 150],
			  ['Cholesterol', 144],
			  ['Albumin', 132],
			  ['Globulin', 121]
			]);

			  // Optional; add a title and set the width and height of the chart
			  var options = {'title':' Average Month', 'width':550, 'height':400};

			  // Display the chart inside the  element with id="piechart"
			  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			  chart.draw(data, options);
			}
		</script>-->
		</div>
		</form>
	</div>
	</center>




		
	<!---footer--!>
	<!----------------------footer-------------------------------------------->
		<footer>
			 <img class = "image1" src="image/qr2.PNG" width="121px" height="100px">
			
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