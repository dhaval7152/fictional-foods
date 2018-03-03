<?php
session_start();

if(!isset($_SESSION['current']))
{	
	header("Location: notin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background:#d0d6e2">

<?php

$_POST = $_SESSION['current'];

echo "<div class='container'>
		<div class='jumbotron' style='background:#45526e'>
			<h1 style='color:white'>Welcome, {$_POST['username']}.<img src='cheese3.png' class='img-rounded' alt='Cheese Burger' align='right'></h1>
		</div>
	  </div>";

?>

<div class='container'>
	<a href='shop.php' class='btn btn-primary'>Shop</a> or <a href='logout.php' class='btn btn-primary'>Log out</a>
</div>";
	
</body>
<html>