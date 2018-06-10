<?php 
	require "db_connect.php";
	if (isset($_POST['submit'])) {
		$checkValidate = true;
		if (empty($_POST['name'])) {
			$checkValidate = false;
		} else {
			$checkValidate = true;
			$sql = "INSERT INTO categories (name) VALUES ('" . $_POST['name'] . "')";
		}
		if ($checkValidate) {
			$conn->query($sql);
		}
		header("Location: cat_list.php");
	}
 ?>