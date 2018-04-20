<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'svsdb');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
	$db=mysqli_select_db($con,DB_NAME);
	
	$userName = $_POST['username'];
	$password =  $_POST['password_1'];
	$query = "INSERT INTO login VALUES('$userName','$password')";
	$data = mysqli_query($con,$query);
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}

?>