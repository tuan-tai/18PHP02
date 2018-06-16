<?php 
require "session.php";
if (!empty($_SESSION['email'])) {
	$id = $_GET['id'];
	require "db_connect.php";
}
?>