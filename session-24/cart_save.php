<?php
session_start();

require("config/db__connect.php");
require("functions/functions.php");

if ( empty($_SESSION['user']['username']) || empty($_SESSION['cart']) ) {
    header("Location: index.php");
} else {
    $order_id = insert("config/db__connect.php", "INSERT INTO orders (user_id) VALUES (".$_SESSION['user']['id'].")");
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $price = select("config/db__connect.php", "SELECT price FROM products WHERE id = ".$product_id."")[0]['price'];
        insert("config/db__connect.php", "INSERT INTO order_detail (order_id, product_id, quantity, price) VALUES (".$order_id.", ".$product_id.", ".$quantity.", ".(int)$price.")");
    }
    header("Location: cart_show.php");
}
?>
