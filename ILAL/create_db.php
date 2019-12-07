<?php 
	require 'koneksi.php';

	
	$sql = "CREATE DATABASE Curriculum_Vitae";
	if(mysqli_query($conn, $sql)) {
		echo "DATABASE CREATE SUCCESFULLY";
	}else{
		echo "ERROR CREATING DATABASE : " . mysqli_error($conn);
	}

	mysqli_close($conn);
 ?>