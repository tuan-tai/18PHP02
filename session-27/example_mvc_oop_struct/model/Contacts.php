<?php
require "config/db_connect.php";

class Contacts
{

    private $conn;

    public function __construct()
    {
        $this->conn = new ConnectDB();
    }

    /**
     * Insert email and message
     */
    public function insert($email, $message)
    {
        $sql = "INSERT INTO contacts(email, message) VALUES ('$email', '$message')";
        if ($this->conn->connectDB()->query($sql) === TRUE) {
            echo "<p style=\"color: green;\">Success!</p>";
        } else {
            echo "<p style=\"color: red;\">Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }

}

?>