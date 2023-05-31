<?php
	require "configp.php";
	session_start();
	
	$user_id = $_SESSION['user_id'];
		
	$sql1 = "DELETE from user WHERE UserID = '$user_id'"; //Delete from user table
	
	if( $conn -> query($sql1) ){
		
		$sql2 = "DELETE from patient WHERE PatientID = '$user_id'"; //Delete from patient table
	
	if( $conn -> query($sql2) ){
	header('location:patientlogin.php');
	}};
	
?>

