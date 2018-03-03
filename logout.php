<!DOCTYPE html>
<html>
<head>
	<title>Logged Out</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background:#d0d6e2">

<?php

session_start();

unset($_SESSION['current']);

?>	

<div class='container'>
	<div class='jumbotron' style="background:#45526e">
			<h1 style="color:white">Logged out.<img src="cheese3.png" class="img-rounded" alt="Cheese Burger" align="right"></h1>
	</div>
</div>";

<div class='container'>
	<a href='home.php' class='btn btn-primary'>Home</a> <a href='login.php' class='btn btn-primary'>Login</a>
</div>";

</body>
<html>