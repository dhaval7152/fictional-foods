<?php

$username = "root";
$password = "";
$database = "fictional";
$host = "localhost";
$conn = mysqli_connect($host, $username, $password, $database);

if($conn)
{	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query = "INSERT INTO users VALUES ('$user', '$pass')";
	mysqli_query($conn, $query);
	include_once("register2.php");
}

else
{
	echo "Could not connect.";
}

?>