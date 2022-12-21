<?php 
include("dbconfig.php");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//print_r($_POST);

	$insert = "insert into user (name, email, password) values('$name', '$email', '$password ')";
	if(mysqli_query($conn, $insert)){
		echo "Success";
	}else{
		echo "fail";
	}
?>