<?php 
	require "db_connect.php";
	if (isset($_POST['submit'])) {
		if (empty($_POST['name'])) {
			echo 'Category name cannot be empty!';
		} else {
			if ($conn->query("INSERT INTO categories (name) VALUES ('" . $_POST['name'] ."')") === TRUE) {
				echo "Category added successfully";
			} else {
				echo "Error " . $conn->error;
			}
		}
	} else {
		echo 'Not available';
	}
 ?>