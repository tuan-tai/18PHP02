<?php
session_start();
require "../config/db__connect.php";
require "../functions/functions.php";
if ( isAdmin() == TRUE ) {
    if (!empty($_POST['name'])) {
        update("../config/db__connect.php", "UPDATE categories SET name = '".$_POST['name']."' WHERE id = ".$_POST['id']."");
    }
}
header('location: index.php');
?>
