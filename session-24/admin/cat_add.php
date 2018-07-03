<?php
session_start();
require "../config/db__connect.php";
require "../functions/functions.php";
if (isAdmin()) {
  $checkValidate = true;
  if (empty($_GET['name'])) {
    $checkValidate = false;
  } else {
    $checkValidate = true;
    $sql = "INSERT INTO categories (name) VALUES ('" . $_POST['name'] . "')";
  }
  if ($checkValidate) {
    $conn->query($sql);
  }
  header("Location: cat_list.php");
} else {
  header("location: ../index.php");
}
?>
