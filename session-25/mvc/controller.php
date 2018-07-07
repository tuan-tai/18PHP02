<?php
include "model.php";
class ExController
{
    function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';
        $model = new ExModel();
        switch ($action) {
            case 'home':
                $home = $model->getHome();
                include 'views/home.php';
                break;
            case 'news':
                $news = $model->getNews();
                include 'views/news.php';
                break;
            case 'contact':
                $contact = $model->getContact();
                include 'views/contact.php';
                break;
            case 'about':
                $about = $model->getAbout();
                include 'views/about.php';
                break;
            default:
                $home = $model->getHome();
                include 'views/home.php';
                break;
        }
    }
}
?>
