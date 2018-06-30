<?php
    session_start();
    // session_destroy(); exit();
    if (!isset($_SESSION['cart'])) {
    	$_SESSION['cart'] = array();
    }
    $id = $_GET['id'];
    $quantity = (int)($_GET['quantity']);
    if (array_key_exists($id, $_SESSION['cart'])) {
    	$_SESSION['cart'][$id] = $_SESSION['cart'][$id] + $quantity;
	} else {
		$_SESSION['cart'][$id] = $quantity;
	}
    header("Location: index.php");
?>
