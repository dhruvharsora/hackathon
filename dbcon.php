<?php
$servername = "localhost"; // Server name must be localhost
$username = "root"; // In my case, user name will be root
$password = ""; // Password is empty
$database = "site"; // Database name

$conn = mysqli_connect($server, $username, $password, $database); // Creating a connection

// Check connection
if (!$conn) {
	die("Connection failure");
}

/*// Creating a database named geekdata
$sql = "CREATE DATABASE geekdata";
if ($conn->query($sql) === TRUE) {
	echo "Database with name geekdata";
} else {
	echo "Error: " . $conn->error;
}

// Closing connection
$conn->close();*/
?>
