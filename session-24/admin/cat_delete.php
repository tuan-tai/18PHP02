<?php 
	require "db_connect.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM categories WHERE id = $id";
	$conn->query($sql);
	header("Location: cat_list.php");
 ?>