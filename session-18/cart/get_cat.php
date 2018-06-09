<?php 
	require "db_connect.php";
	$sql = "SELECT * FROM categories";
	$result = $conn->query($sql);
	$return = array();
	while($r = mysqli_fetch_assoc($result)) {
    	$return[] = $r;
	}
 ?>