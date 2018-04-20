<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname="users";

// Create connection
$dbcon =mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>