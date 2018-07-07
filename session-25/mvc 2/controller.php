<?php
include 'model.php';
class ExController{
	function handleRequest(){
		// echo "xu ly yeu cau tai day <br/>";
		$action = isset($_GET['action'])?$_GET['action']:'home';
		$model = new ExModel();
		switch ($action) {
			case 'home':
				// echo "nho model goi thong tin trang chu<br/>";
				$home = $model->getHome();
				include 'views/home.php';
				break;
			case 'news':
				// echo "nho model goi thong tin trang news<br/>";
				$news = $model->getNews();
				include 'views/news.php';
				break;
			case 'about':
				// echo "nho model goi thong tin trang about<br/>";
				$about = $model->getAbout();
				include 'views/about.php';
				break;
			case 'contact':
				// echo "nho model goi thong tin trang contact<br/>";
				$contact = $model->getContact();
				include 'views/contact.php';
				break;
			default:
				// echo "nho model goi thong tin trang chu<br/>";
				break;
		}
		//neu vao trang chu thi

		//neu vao trang tin tuc thi

		//neu vao trang lien he thi
	}
}
?>
