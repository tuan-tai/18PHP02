<?php 

class FrontEnd {

	private $controller;
	private $action;

	public function __construct()
	{
		$this->controller = isset( $_GET[ 'controller' ] ) ? $_GET['controller'] : 'users';
		$this->action = isset( $_GET[ 'action' ] ) ? $_GET['action'] : 'list';
	}

	/**
	 * Handle incoming request
	 */
	public function handleRequest()
	{
		switch( $this->controller ) {

			case "news":
				require "model/News.php";
				$news = new News();

				switch( $this->action ) {
					case "show":
						$titles = $news->getTitles();
						require "views/news.php";
						break;
					case "details":
						$details = $news->getDetails();
						require "views/news.php";
						break;
					case NULL:
						break;
					default:
						echo "<strong>Not Found</strong>";
				}

				break;

			case "contact":
				require "views/contact.php";
				if ( !empty($_POST['email']) && !empty($_POST['message']) ) {
					require "model/Contacts.php";
					$contact = new Contacts();
					$contact->insert($_POST['email'], $_POST['message']);
				}

			default:
		}
	}

}

?>