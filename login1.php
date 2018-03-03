<!DOCTYPE html>
<html>
<body>

<?php
session_start();

$username = "root";
$password = "";
$database = "fictional";
$host = "localhost";
$conn = mysqli_connect($host, $username, $password, $database);

if($conn)
{	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query = "SELECT password FROM users WHERE username = '$user'";
	$result=mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	if($row['password']==$pass)
	{
		//echo "hehe";
		$_SESSION['current'] = $_POST;
		header("Location: welcome.php");
	}
	else
	{	
		header("Location: login2.php");
		
	}
	
	
}

else
{
	echo "Could not connect.";
}

?>

</body>
</html>