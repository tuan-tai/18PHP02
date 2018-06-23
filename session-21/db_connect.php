<?php 
	$servername = 'localhost';
	$dbname = '18php02';
	$username = 'root';
	$password = 'mysql';

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		exit('Connection failed ' . $conn->connect_error);
	}
 ?>