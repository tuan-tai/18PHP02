<?php 
require "db_connect.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (!empty($_POST['name'])) {
        $sql="UPDATE categories set name = '" . $_POST['name'] . "' WHERE id = ". $_POST['id'];
        echo $_POST['name'];

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header('location: cat_list.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else {
        echo `<p class="alert alert-danger">Name cannot be null</p>`;
    }
}
?>