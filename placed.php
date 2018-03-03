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
	<title>Order Placed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background:#d0d6e2">

"<div class='container'>
		<div class="jumbotron" style="background:#45526e">
			<h1 style="color:white">Your order has been placed.<img src="cheese3.png" class="img-rounded" alt="Cheese Burger" align="right"></h1>
		</div>
	  </div>";



<div class='container'>
	<a href='shop.php' class='btn btn-primary'>Shop</a> or <a href='logout.php' class='btn btn-primary'>Log out</a>
</div>";
	
</body>
<html>