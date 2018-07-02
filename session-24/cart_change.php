<?php
	session_start();
	if (isset($_GET['action']) && isset($_GET['id'])) {
		if ($_GET['action'] == '-') {
			if ($_SESSION['cart'][$_GET['id']] == 1) {
				header("Location: cart_show.php");
			} else {
				$_SESSION['cart'][$_GET['id']] = $_SESSION['cart'][$_GET['id']] - 1;
			}
		} else {
			$_SESSION['cart'][$_GET['id']] = $_SESSION['cart'][$_GET['id']] + 1;
		}
	}
	header("Location: cart_show.php");
?>
