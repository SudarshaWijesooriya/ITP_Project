<?php
	
	//create the connection
	//$con = new mysqli(server_name , user_name ,password ,database_name)
	
	define ("DB_HOST" , "localhost");
	define ("DB_USER" , "root");
	define ("DB_PASSWORD" , "");
	define ("DB_DATABASE" , "hospital_management_system");
	
	$conn = new mysqli(DB_HOST , DB_USER , DB_PASSWORD  , DB_DATABASE);
	
	if($conn -> connect_error) 
	{
		
		die("Connection Failed , " .$conn -> connect_error);
		
	}
	else
	{
		
		echo "<script> alert('Connected Successfully')</script>" ;
		
	}
	
	
	
	/*
		
		place this code whenever config.php required ->
		
		<?php  require "config.php";  ?>
		
		whenever necessary
		
		
		place this code to whenever config.php need to be included  ->
		
		<?php  include("config.php");  ?>
		
	*/
	
?>