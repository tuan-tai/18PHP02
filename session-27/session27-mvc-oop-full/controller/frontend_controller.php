<?php 

session_start();

class FrontEndController
{
    public function handleRequest()
    {
        $controller = isset( $_GET['controller'] ) ? $_GET['controller'] : 'index';
        $action     = isset( $_GET['action'] ) ? $_GET['action'] : 'list';

        if ( $controller == 'index' ) {
            require 'views/frontend/index.php';
        } elseif ( $controller == 'login' ) {
            require 'views/frontend/login.php';

            if ( isset($_POST['login']) ) {
                if ( !empty($_POST['username']  && !empty($_POST['password'])) ) {
                    require './model/user_model.php';
                    $userModel = new UserModel();
                    $user = $userModel->checkUser($_POST['username'], $_POST['password']);
                    if ( !empty($user[0]) ) {
                        $_SESSION['user']['username'] = $user[0]['username'];
                        $_SESSION['user']['role'] = $user[0]['role'];
                        header('location: admin.php');
                        exit();
                    } else {
                        echo '<p class="alert alert-danger">Invalid username or password!</p>';
                    }
                } else {
                    echo '<p class="alert alert-danger">Invalid username or password!</p>';
                }
            }
        }
    }
}

?>