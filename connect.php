<?php

$user = 'root';
$pass = '';
$db = 'svsdb';
$con = mysqli_connect('localhost', $user, $pass);
mysqli_select_db($con,$db);

$user = $_POST["textfield"];
$pass = $_POST["pass"];

$result = mysqli_query($con, "SELECT * FROM `login` where username = '$user'");
$row = mysqli_fetch_array($result);

if($row["username"]==$user && $row["password"]==$pass)
	include("vote.php");
else if($user=='admin' && $pass='admin')
	include("display.php");
else
	echo "Please Register first";

mysqli_close($con);

?>