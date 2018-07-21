<?php
session_start();

if ( !empty($_SESSION['user']['username']) && ($_SESSION['user']['role'] == '1') ) {
    require_once 'controller/admin_controller.php';
    $linkAdmin = new AdminController();
    $linkAdmin->handleRequest();
} else {
    require_once 'controller/frontend_controller.php';
    $fe = new FrontEndController();
    $fe->handleRequest();
}

?>