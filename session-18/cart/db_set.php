<?php 
	require "db_connect.php";

	$sql_categories = "CREATE TABLE categories (
		id int unsigned auto_increment primary key,
		parent_id int unsigned default null,
		name varchar(255) not null unique
	)";
	$sql_products = "CREATE TABLE products (
		id int unsigned auto_increment primary key,
		cat_id int unsigned not null,
		foreign key (cat_id) references categories(id),
		image varchar(255),
		name varchar(255) not null,
		model varchar(255) not null,
		price int unsigned not null,
		quantity int unsigned not null,
		status boolean,
		created datetime,
		updated datetime
	)";
	$sql_users = "CREATE TABLE users (
		id int unsigned auto_increment primary key,
		name varchar(255),
		email varchar(255) unique,
		password varchar(255),
		priority tinyint unsigned
	)";


	if ($conn->query($sql_categories) === TRUE && $conn->query($sql_products) === TRUE) {
		echo "Tables created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}
 ?>