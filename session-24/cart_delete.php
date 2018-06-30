<?php 
	session_start();
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("Location: cart_show.php");
	}
 ?>