<?php 
include './config/configDB.php';
class UserModel{
	function register($email){
		//xu ly luu du lieu vao database
		$conn = new ConnectDB();
		$sql = "INSERT INTO users (email) VALUES ('$email')";
		mysqli_query($conn->connectDB(),$sql);
	}
}
?>