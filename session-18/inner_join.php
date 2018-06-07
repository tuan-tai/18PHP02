<?php 
	$server_name = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "18php02";
	$conn = new mysqli($server_name, $username, $password, $dbname);
	if ($conn->connect_error) {
		exit ("Connection failed ".$conn->connect_error);
	}

	$sql = "SELECT * from users INNER JOIN cities ON users.city_id = cities.id WHERE cities.name LIKE 'Da Nang'";
	$conn->set_charset("utf8");
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "Name: " . $row["name"] . "<br>";
		}
	} else {
		echo "No result";
	}

	$conn->close();
 ?>