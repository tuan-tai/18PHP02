<?php
  session_start();
  if (!empty($_SESSION['user'])) {
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
    echo count($_SESSION['cart']);
    die();
  } else {
    header("Location: index.php?mess=You are not logged in. Please try again.");
  }
?>
