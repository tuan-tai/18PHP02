<?php 
	$server_name = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "learn_mysql";
	$conn = new mysqli($server_name, $username, $password, $dbname);
	if ($conn->connect_error) {
		exit ("Connection failed ".$conn->connect_error);
	}

	// 1. Lấy ra danh sách sản phẩm thuộc danh mục Guitars và có giá lớn hơn 500
	// 2. Lấy ra danh sách sản phẩm có giảm giá lớn hơn 30% và được thêm vào tháng 2 năm 2014
	// 3. Lấy ra thành phố của khách hàng dùng gmail
	echo "<br>1.<br>";
	$sql_1 = "SELECT * FROM categories AS C INNER JOIN products AS P ON C.categoryID = P.categoryID WHERE C.categoryName = 'Guitars' AND P.listPrice > 500";
	$result_1 = $conn->query($sql_1);
	if ($result_1->num_rows >0) {
		while ($row = $result_1->fetch_assoc()) {
			foreach ($row as $r) {
				echo $r . " <br> ";
			}
			echo '<br>';
		}
	} else {
		echo "No result";
	}

	echo "<br>2.<br>";
	$sql_2 = "SELECT * FROM products WHERE discountPercent > 30 AND month(dateAdded) = 2 AND year(dateAdded) = 2014";
	$result_2 = $conn->query($sql_2);
	if ($result_2->num_rows >0) {
		while ($row = $result_2->fetch_assoc()) {
			echo "Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . "<br>";
		}
	} else {
		echo "No result";
	}

	echo "<br>3.<br>";
	$sql_3 = "SELECT * FROM customers AS C INNER JOIN addresses AS AD ON C.customerID = AD.customerID WHERE C.emailAddress LIKE '%@gmail%'";
	$result_3 = $conn->query($sql_3);
	if ($result_3->num_rows >0) {
		while ($row = $result_3->fetch_assoc()) {
			echo "Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . "<br>";
		}
	} else {
		echo "No result";
	}
 ?>