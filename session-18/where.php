<?php 
	$server_name = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "18php02";

	$conn = new mysqli($server_name, $username, $password, $dbname);
	if ($conn->connect_error) {
		exit ("Connection failed ".$conn->connect_error);
	}

	// 1. Lấy ra users sử dụng đầu số điện thoại: 098
	// 2. Lấy ra users sử dụng gmail
	// 3. Lấy ra users có chữ "a" trong tên
	// 4. Xóa users dùng số điện thoại có đầu 098 và chữ "a" trong tên
	//5. Lấy ra users có số điện thoại mà số thứ 2 là số 8
	echo "1.<br>";
	$sql_1 = "SELECT * FROM users WHERE phone LIKE '098%'";
	$result_1 = $conn->query($sql_1);
	if ($result_1->num_rows > 0) {
		while ($row = $result_1->fetch_assoc()) {
			echo "Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"];
		}
	} else {
		echo "No result";
	}

	echo "<br>2.<br>";
	$sql_2 = "SELECT * FROM users WHERE email LIKE '%@gmail%'";
	$result_2 = $conn->query($sql_2);
	if ($result_2->num_rows >0) {
		while ($row = $result_2->fetch_assoc()) {
			echo "Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . "<br>";
		}
	} else {
		echo "No result";
	}

	echo "<br>3.<br>";
	$sql_3 = "SELECT * FROM users WHERE name LIKE '%a%'";
	$result_3 = $conn->query($sql_3);
	if ($result_3->num_rows > 0) {
		while ($row = $result_3->fetch_assoc()) {
			echo "Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . "<br>";
		}
	} else {
		echo "No result";
	}

	echo "<br>4.<br>";
	$sql_4 = "DELETE FROM users WHERE phone LIKE '098%' AND email LIKE '%@gmail%'";
	if ($conn->query($sql_4) === TRUE) {
		echo "Record deleted<br>";
	} else {
		echo "Error deleting: " . $conn->error . "<br>";
	}

	echo "<br>5.<br>";
	$sql_5 = "SELECT * FROM users WHERE phone LIKE '_8%'";
	$result_5 = $conn->query($sql_5);
	if ($result_5->num_rows > 0) {
		while ($row = $result_5->fetch_assoc()) {
			echo "Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . "<br>";
		}
	} else {
		echo "No result";
	}

	$conn->close();
 ?>