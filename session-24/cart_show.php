<?php session_start() ?>
<?php
    foreach ($_SESSION['cart'] as $cart) {
        var_dump($cart);
    }
?>
