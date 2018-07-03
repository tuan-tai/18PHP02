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
    return $result1;
}

function insert($db, $sql)
{
    require $db;
    if ($conn->query($sql) === TRUE) {
        return $conn->insert_id;
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

function delete($db, $sql)
{
    require $db;
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

function isAdmin() {
    if ($_SESSION['user']['role'] == 1) {
        return true;
    } else {
        return false;
    }
}
?>
