<?php 
	$sql = "SELECT name from categories WHERE id = " . $row['cat_id'];
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		
	}
 ?>