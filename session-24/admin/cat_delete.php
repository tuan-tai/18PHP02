<?php
session_start();
require "../config/db__connect.php";
require "../functions/functions.php";
if (isAdmin()) {
	delete("../config/db__connect.php", "DELETE FROM categories WHERE id = ".$_GET['id']."");
	header("Location: index.php");
} else {
	header("location: index.php");
}
 ?>
