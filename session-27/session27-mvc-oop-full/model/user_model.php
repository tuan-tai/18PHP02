<?php 
require_once './config/database.php';
require_once './controller/functions/functions.php';

class UserModel extends ConnectDB{
	function addUser($username, $password, $role){
		$sql = "INSERT INTO users(role, username, password) VALUES ('$role', 
		'$username', '$password')";
		return mysqli_query($this->conn,$sql);
	}

    function checkUser($username, $password) {
        $sql = "SELECT username, role FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);
        $result1 = [];
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($result1, $row);
            }
        }
        return $result1;
    }

    function listUser()
    {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        $result1 = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                array_push($result1, $row);
            }
        }
        return $result1;
    }
}
?>