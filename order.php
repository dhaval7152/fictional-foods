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
	<title>Your Order</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="background:#d0d6e2">
<div class="container">
	<div class="jumbotron" style="background:#45526e">
		<h1 style="color:white">Your Order<img src="cheese3.png" class="img-rounded" alt="Cheese Burger" align="right"></h1>
	</div>
<div>


<?php
//var_dump($_POST);
$username = "root";
$password = "";
$database = "fictional";
$host = "localhost";
$conn = mysqli_connect($host, $username, $password, $database);
$amount = 0;

echo "<div class='container'>
		<table class='table table-striped table-bordered'>
			<thead>
				<tr>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>
			</thead>
	  <tbody>
	  
		";
//var_dump($_POST['checklist']);
$array = $_POST['checklist'];
//print_r($array);
foreach($array as $item)
{	
	//var_dump($item);
	$query = "SELECT * FROM menu WHERE item = '{$item}'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_row($result);
	$amount = $amount + ($row[1]*$_POST[$row[2]]);
	echo "<tr>
			<td>{$row[0]}</td>
			<td>{$row[1]}</td>
			<td>{$_POST[$row[2]]}</td>
		  </tr>
	";

$tax = (0.08)*$amount;
$total = $tax + $amount;	
}

echo "<tr>
                            
                            <td>   </td>
                            <td class='text-right'>
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax(8%): </strong>
                            </p></td>
                            <td>
                            <p>
                                <strong>Rs. {$amount}</strong>
                            </p>
                            <p>
                                <strong>Rs. {$tax}</strong>
                            </p></td>
                        </tr>
						
						<tr>
                            <td></td>
                            <td class='text-right'><h4><strong>Total: </strong></h4></td>
                            <td class='text-danger'><h4><strong>Rs. {$total}</strong></h4></td>
                        </tr>";
echo " 

<tr>
                            <td></td>
							<td></td>
                            <td class='text-right'><a href='placed.php' class='btn btn-primary'>Deliver</a></td>
                        </tr>
";
echo "</tbody></table>";



echo "</div>";	


?>
</body>
</html>