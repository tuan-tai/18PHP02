<?php 
    require './controller/frontend_controller.php';
    $index = new FrontEnd();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MVC OOP</title>
</head>
<body>
    <a href="index.php">Home</a>
    | <a href="index.php?controller=news&action=show">List news</a>
    | <a href="index.php?controller=news&action=details">Details news</a>
    | <a href="index.php?controller=contact">Contact</a>
    <br>
    <?php $index->handleRequest(); ?>
</body>
</html>