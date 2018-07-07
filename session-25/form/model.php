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
            return 'Register succeed!';
        } catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
        }
    }
}

?>
