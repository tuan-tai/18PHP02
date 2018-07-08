<?php

include './ConnectDB.php';

class Model
{
    protected $conn;

    public function __construct()
    {
        $conn = new ConnectDB();
        $this->conn = $conn->connect();
    }

    public function register($username, $password)
    {
        try {
            $stmt = $this->conn->prepare('INSERT INTO users (username, password) values (?, ?)');
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $password);
            $stmt->execute();
            return "<p style=\"color: green\">Register succeed!</p>";
        } catch (PDOException $e) {
            echo '<p class=\"color: red\">Error: '.$e->getMessage()."</p>";
        }
    }
}

?>
