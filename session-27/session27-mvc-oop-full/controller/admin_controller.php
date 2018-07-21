<?php
session_start();

require_once './model/user_model.php';
class AdminController{
	function handleRequest(){
		if ( !empty($_SESSION['user']['username']) && ($_SESSION['user']['role']) == '1' ) {
			$controller = isset($_GET['controller'])?$_GET['controller']:'users';
			$action     = isset($_GET['action'])?$_GET['action']:'list';
			if($controller == 'products'){
				switch ($action) {
					case 'list':
						include 'views/admin/products/list.php';
						break;
					case 'add':
						include 'views/admin/products/add.php';
						break;
					default:
						# code...
						break;
				}
			}elseif($controller == 'users'){
				switch ($action) {
					case 'list':
						$userModel = new UserModel();
						$lists = $userModel->listUser();
						include 'views/admin/users/list.php';
						break;
					case 'add':
						if(isset($_POST['add_user'])){
							$username = $_POST['username'];
							$password = $_POST['password'];
							$role     = $_POST['role'];
							$userModel = new UserModel();
							$result = $userModel->addUser($username, $password, $role);
							if($result){
								$this->redirectPage('admin.php?controller=users&action=list');
							}
							
						}
						include 'views/admin/users/add.php';
						break;
					default:
						# code...
						break;
				}
			} elseif ($controller == 'logout') {
				session_destroy();
				header('location: admin.php');
				exit();
			} else {
				$controller = 'users';
				header('location: admin.php');
				exit();
			}
		} else {
			header('location: admin.php');
		}	
	}
	// ham nay de redirect trang
	function redirectPage($link){
		header("Location: $link");
	}
}
?>