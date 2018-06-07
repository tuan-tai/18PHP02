<?php 
	session_start();
	session_unset(); 
	session_destroy();
	echo "Logged out successful!<br><a href='".$_POST['url']."'><- Go Back</a>"
 ?>