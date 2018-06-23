<?php require "db_connect.php"; ?>
<?php 
	if (isset($_GET)) {
		$sql = "DELETE FROM products WHERE id = " . $_GET['id'];
		$conn->query($sql);
		header("Location: product_list.php");
	} else {
		echo "Error";
	}
 ?>