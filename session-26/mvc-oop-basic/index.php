<a href="index.php?action=home">HOME</a>
| <a href="index.php?action=register">REGISTER</a>
| <a href="index.php?action=contact">CONTACT</a>
<?php 
	include 'controller/home_controller.php';
	$home = new HomeController();
	$home->handleRequest();
?>