<!DOCTYPE html>
<?php require_once 'record.php'; ?>
<html>

	<head>
	<html lang="en">


	<meta charset="UTF-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">

	 <title>Inventoty Report</title>



    
		<!-- add a title (a)-->
		
		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="Styles/Docmain.css">
		<link rel="stylesheet" href="Styles/Request.css">
		<link rel="stylesheet" href="Styles/button.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
	
	.mmaindiv{
		padding:1px;
		position:relative;
		background:#E5E4E2;
		width:1000px;
		height:500px;
		text-align:center;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
	}
	.maindiv{
		left:3px;
		float:left;
		position:absolute;
		height:500px;
		width:450px;
		background:whitesmoke;
		text-align:center;
		
	}
	.leftdiv{
	left:3px;
	float:left;
	position:absolute;
	height:400px;
	width:450px;
	background:whitesmoke;
}
#player_info {
  background-color:#C0C0C0;
}
.h2 {
  font-family: "Times New Roman", Times, serif;
  font-size:30px;
}
.h1 {
  font-family: "Times New Roman", Times, serif;
  font-size:40px;
  color:#008080;
}
.rightdiv{
	
	left:3px;
	right:2px;
	float:right;
	display:inline-block;
	height:500px;
	width:450px;
	background:whitesmoke;
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
	<div class="wrapper">
		<br>
		<center>
			<div class="mmaindiv">
				<div class="maindiv">
					<h1>Current Stock Report Of Invenrory</h1>
					<center>
						
						

							<?Php
								require "config.php";// Database connection

								if($stmt = $con->query("SELECT Name,Current_Stock  FROM item")){

								  echo "No of records : ".$stmt->num_rows."<br>";
								$php_data_array = Array(); // create PHP array

								while ($row = $stmt->fetch_row()) {
								   //echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
								   $php_data_array[] = $row; // Adding to array
								   }

								}else{
								echo $con->error;
								}
								//print_r( $php_data_array);
								// You can display the json_encode output here. 


								// Transfor PHP array to JavaScript two dimensional array 
								echo "<script>
										var my_2d = ".json_encode($php_data_array)."
								</script>";
							?>
							<div id="chart_div"></div>
							<br><br>
							</body>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script>
							 google.charts.load('current', {'packages':['corechart']});
								 // Draw the pie chart when Charts is loaded.
								  google.charts.setOnLoadCallback(draw_my_chart);
								  // Callback that draws the pie chart
								  function draw_my_chart() {
									// Create the data table .
									var data = new google.visualization.DataTable();
									data.addColumn('string', 'Name');
									data.addColumn('number', 'Current_Stock');
									for(i = 0; i < my_2d.length; i++)
								data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
							// above row adds the JavaScript two dimensional array data into required chart format
								var options = {title:'',
												   width:400,
												   height:300};

									// Instantiate and draw the chart
									var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
									chart.draw(data, options);
								  }
							</script>
						</center>
				</div>
				<div class="rightdiv">
					<h2>Report of the Most Request Items From Invenrory</h2>
					<center>
					<br>
						<div style="width:400;hieght:300;text-align:center">
							
							<p style="align:center;"><canvas  id="chartjs_bar"></canvas></p>
						</div> 
						
					</center>				
				</div>
				
		
			</div>
		
		<div class="butt">
						
						  <a class="cta" href="Inventory.php">
							<span>STOCKS</span>
							<span>
							  <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								  <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
								  <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
								  <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
								</g>
							  </svg>
							</span> 
						  </a>
						
					</div>







					

					</center>
		</center>
	
		<br>

	</div>
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
   <script src="js/jquery.js"></script>
  <script src="js/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969aa",
                                "#ff407b",
                                "#331523",
                                "#ffc750"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>

</html>