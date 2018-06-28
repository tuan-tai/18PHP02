<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "18php02_shop";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}
