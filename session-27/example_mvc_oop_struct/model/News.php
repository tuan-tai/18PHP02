<?php
require "config/db_connect.php";

class News
{

    private $conn;

    public function __construct()
    {
        $this->conn = new ConnectDB();
    }

    /**
     * Get titles details
     */
    public function getTitles()
    {
        $sql = 'SELECT title FROM news';
        $result = $this->conn->connectDB()->query($sql);
        $result1 = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($result1, $row);
            }
        }
        return $result1;
    }

    /**
     * Get news details
     */
    public function getDetails()
    {
        $sql = 'SELECT * FROM news';
        $result = $this->conn->connectDB()->query($sql);
        $result1 = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($result1, $row);
            }
        }
        return $result1;
    }

}

?>