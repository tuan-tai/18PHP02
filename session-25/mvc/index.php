<?php
require "controller.php";
$controller = new ExController();
$controller->handleRequest();
?>
<br>
<a href="index.php?action=home">HOMEPAGE </a> |
<a href="index.php?action=news">NEWS </a> |
<a href="index.php?action=contact">CONTACT </a> |
<a href="index.php?action=about">ABOUT US </a>
