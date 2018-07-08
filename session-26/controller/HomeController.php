<?php 

class HomeController
{
	function handleRequest()
	{
		$action = isset($_GET['action']) ? $_GET['action'] : 'home';
	}
}

?>