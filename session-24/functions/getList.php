<?php
require "../config/db__connect.php";
function get($item, $from)
{
    $sql = "SELECT $item from $from";
    $result = $conn->query($sql);
    $result1 = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($result1, $row);
        }
    }
    return $result1;
}
?>
