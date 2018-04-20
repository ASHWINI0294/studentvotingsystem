<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
</head>
<body bgcolor="#040CAD" >
<?php
	$user = 'root';
$pass = '';
$db = 'svsdb';
$con = mysqli_connect('localhost', $user, $pass);
mysqli_select_db($con,$db);
	
	$gen = $_POST["gen"];
	$cul = $_POST["cul"];
	$sport = $_POST["sport"];
	
	mysqli_query($con,"update cutural set vote = vote+1 where name='$cul'");
	mysqli_query($con,"update general set vote = vote+1 where name='$gen'");
	mysqli_query($con,"update sports set vote = vote+1 where name='$sport'");

$view_users="select * from sports";
$run=mysqli_query($con,$view_users);	
while($row=mysqli_fetch_array($run))
{
	$name=$row[0];
	$vote=$row[1];
}
echo $name;
echo $vote;
	?>
</body>
</html>