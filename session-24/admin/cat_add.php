<?php
session_start();
require "../config/db__connect.php";
require "../functions/functions.php";
if (isAdmin()) {
  $checkValidate = true;
  if (empty($_POST['name'])) {
    $checkValidate = false;
  } else {
    $checkValidate = true;
    if ($checkValidate) {
      insert("../config/db__connect.php", "INSERT INTO categories (name) VALUES ('".$_POST['name']."')");
    }
  }
  header("Location: index.php");
} else {
  header("location: ../index.php");
}
?>
