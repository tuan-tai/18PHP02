<?php

include './model.php';

class Controller
{
    public function handleRequest()
    {
        if ( isset($_GET['register'], $_POST['submit']) ) {
            if ( !empty($_POST['username']) && !empty($_POST['password']) ) {
                $model = new Model();
                $register = $model->register($_POST['username'], md5($_POST['password']));
                include 'view.php';
            }
        };
    }
}

?>