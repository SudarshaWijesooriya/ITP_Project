<?php
$con = new mysqli("localhost" , "root" , "" , "hospital_management_system" );
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT Item_Name, count(*) as Quantity FROM requestlist GROUP BY Item_Name";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Item_Name']  ;
            $sales[] = $row['Quantity'];
        }
 
 }
?>