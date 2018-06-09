<?php 
	require "db_connect.php";

	$sql_categories = "CREATE TABLE categories (
		id int unsigned auto_increment primary key,
		name varchar(255) not null unique
	)";
	$sql_products = "CREATE TABLE products (
		id int unsigned auto_increment primary key,
		image varchar(255),
		name varchar(255) not null,
		cat_id int unsigned not null,
		foreign key (cat_id) references categories(id),
		model varchar(255) not null,
		prices varchar(255) not null,
		quantity varchar(255) not null,
		status boolean
	)";

	if ($conn->query($sql_categories) === TRUE && $conn->query($sql_products) === TRUE) {
		echo "Tables created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}
 ?>