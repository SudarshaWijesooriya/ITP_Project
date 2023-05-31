<?php

header('Content-Type:application/json');
  require'configure.php';

	  $query = "SELECT m.Name, @count_num := COUNT(m.Name) AS 'Count'
	            FROM medicine m , treatment t,pharmacy ph
				WHERE t.Treatment_ID=ph.Treatment_ID and m.MedicineID=ph.MedicineID and
				Month(Date) = '09' and Year(Date) = '2022'
				GROUP BY m.Name
				HAVING COUNT(m.Name) > 0";
				
	   $result = $con->query($query);
	   $data = array();
	   foreach($result as $row){
		   $data[] = $row;
	   }
	   
	   print json_encode($data);






?>

