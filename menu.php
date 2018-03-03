<?php

$username = "root";
$password = "";
$database = "fictional";
$host = "localhost";
$conn = mysqli_connect($host, $username, $password, $database);

$query ="UPDATE menu SET id=2 WHERE item='Fries'";

mysqli_query($conn,$query);

?>