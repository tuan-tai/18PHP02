<?php 
include './config/configDB.php';
class ContactModel{
	function contact($email, $phone){
		//xu ly luu du lieu vao database
		$conn = new ConnectDB();
		$sql = "INSERT INTO contact (email, phone) VALUES ('$email', '$phone')";
		mysqli_query($conn->connectDB(),$sql);
	}
}
?>