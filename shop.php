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
	<title>Place Your Order</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="background:#d0d6e2">
<div class="container">
	<div class="jumbotron" style="background:#45526e">
		<h1 style="color:white">Place Your Order<img src="cheese3.png" class="img-rounded" alt="Cheese Burger" align="right"></h1>
	</div>
<div>

<?php

$username = "root";
$password = "";
$database = "fictional";
$host = "localhost";
$conn = mysqli_connect($host, $username, $password, $database);
$query = "SELECT * FROM menu";

$result = mysqli_query($conn, $query);

echo "<div class='container'>
		<table class='table table-striped'>
			<thead>
				<tr>
					<th></th>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity<th>
				</tr>
			</thead>
	  <tbody>
	  
		";
echo "<form action='order.php' method='post'>";

while($row = mysqli_fetch_row($result))
{
	echo "
			
		  
		  <tr>
			<td><input type='checkbox' name='checklist[]' value='{$row[0]}'></td>
			<td>{$row[0]}</td>
			<td>{$row[1]}</td>
			<td><input type='number' name='{$row[2]}' min='1' max='5' value='1'></td>
		  </tr>
	";
	
}
echo "</tbody>
</table>";


echo "<button type='sumbit' class='btn btn-primary'>Place Order</button>";
		
		
echo "</form>";

echo "</div>"
?>

</body>
</html>