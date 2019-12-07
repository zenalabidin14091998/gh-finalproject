<?php 
require 'koneksi.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$sql = "INSERT INTO account (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";
if (mysqli_query($conn, $sql)) {
	//echo "New record created successfully";
	header("location:select.php");
}else{ 
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
