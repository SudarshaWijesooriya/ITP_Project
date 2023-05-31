<?php

	/* -- Session -- */
   
	require 'fconfig.php';
	session_start();
	$user_id = $_SESSION['user_id'];

	if(!isset($user_id))
		header('location:feedbackmlogin.php');                                                                                                                                                                                                                                                       	                   /* SUDA */

	if(isset($_GET['logout'])){
		unset($user_id);
		session_destroy();
		header('location:feedbackmlogin.php');
	}

	try{
		$conn = new PDO("mysql:host=localhost;dbname=hospital_management_system","root","");
	} catch (PDOException $ex) {
		echo $ex->getMessage();
		exit();
	}

	$complain_not_ans_query = "SELECT * FROM complaint WHERE Feedback_ManagerID = 0 ";
	$complain_not_ans_result = $conn->query($complain_not_ans_query);
	$complain_not_ans_count = $complain_not_ans_result->rowCount();

	$faq_not_ans_query = "SELECT * FROM faq WHERE Feedback_ManagerID = 0 ";
	$faq_not_ans_result = $conn->query($faq_not_ans_query);
	$faq_not_ans_count = $faq_not_ans_result->rowCount();

	$int_val_01 = 0;


	$complain_not_ans_value = 10;
	$faq_not_ans_value = 10;


	if(@$_POST['generate_report'])
        $int_val_01 = 1;

	if($int_val_01 == 1){

		$complain_not_ans_value = floatval($complain_not_ans_count );
		$faq_not_ans_value = floatval($faq_not_ans_count);

	}

?>


<html>

	<head>

		<!-- add a title (a)-->
		<title>Generated Feedback Report - Gauge Chart</title>

		<!--<add Javascript-->
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

		
		google.charts.load('current', {'packages':['gauge']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        	var data = google.visualization.arrayToDataTable([
        	['Label', 'Value'],
        	['Complains', <?php echo $complain_not_ans_value ?>],
        	['FAQs', <?php echo $faq_not_ans_value ?>]
        	]);

        	var options = {
            width: '500px', height: '500px' , position: 'center',
            redFrom: 60, redTo: 100,
            yellowFrom:40, yellowTo: 60,
            minorTicks: 25
        	};

        	var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        	chart.draw(data, options);

        }

    </script>
	
	</head>

	<body>
		

		<!-- Implementation started here-->

		<form method = "POST" action="FeedbackReportGaugeChart.php" >
			<?php if($int_val_01 == 0) { ?> <td><input type="submit" value="DISPLAY REPORT" name="generate_report"></td> <?php } ?>
		</form>

		<?php if($int_val_01 == 1) { ?> 
			
			<div id="chart_div" style=" width: 1000px; height: 500px; background-color:#3373C4; position: 'center';"></div>
			
			<h3> Following represent how many FAQs and Complaints are not answered </h3>
			
		<?php } ?>

		<br><br><br>

		<!-- Implementation ended here-->

		<!----------------------footer-------------------------------------------->

			</footer>

	</body>

</html>