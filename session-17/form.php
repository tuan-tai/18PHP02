<?php 
	$server_name = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "18php02";

	$conn = new mysqli($server_name, $username, $password, $dbname);
	if ($conn->connect_error) {
		exit ("Connection failed ".$conn->connect_error);
	}

	if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['phone'] != '') {
		$sql = "INSERT INTO users (name, email, phone) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."')";
	} else exit ("Information cannot be empty");

	if ($conn->query($sql) === TRUE) {
		echo "Inserted successfully";
	} else {
		echo "Error" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
 ?>