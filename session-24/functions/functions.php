<?php
function select($db, $sql)
{
    require $db;
    $result = $conn->query($sql);
    $result1 = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($result1, $row);
        }
    }
    $conn->close();
    return $result1;
}

function insert($db, $sql)
{
    require $db;
    if ($conn->query($sql) === TRUE) {
        return "New record created successfully";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
