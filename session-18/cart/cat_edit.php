<?php 
    require "db_connect.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['name'])) {
            $sql="UPDATE categories SET name = '" . $_POST['name'] . "' WHERE id = ". $_POST['id'];
            $conn->query($sql);
        }
    }
    header('location: cat_list.php');
?>