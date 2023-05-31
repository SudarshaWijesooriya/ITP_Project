<?php

header('Content-Type:application/json');
  require'configure.php';

	  $query = "SELECT Specialization, @count_num := COUNT(Specialization) AS 'Count'
	            FROM treatment t, doctor d
	            WHERE  d.DoctorID  = t.DoctorID AND Month(Date) = '09' and Year(Date) = '2022' 
	            GROUP BY Specialization
	            HAVING COUNT(Specialization) > 0";
				
	   $result = $con->query($query);
	   $data = array();
	   foreach($result as $row){
		   $data[] = $row;
	   }
	   
	   print json_encode($data);






?>

