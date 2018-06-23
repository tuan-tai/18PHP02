<?php 
require "session.php";
require "db_connect.php";
if (!empty($_SESSION['email'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = ".$id;
	$conn->query($sql);
	header("Location: user_list.php");
} else {
	require "layout_header.php";
	echo "
	<div class=\"s-w-300 mx-auto mt-5\">
		<div class=\"alert alert-warning text-center\"><i class=\"fas fa-exclamation-triangle mr-1\"></i>You are not logged in</div>
		<div class=\"text-center\">
			<a href=\"user_register.php\" class=\"btn btn-primary\">Sign up</a> <span class=\"text-primary\">OR</span> <a href=\"user_sign_in.php\" class=\"btn btn-primary\">Log in</a>
		</div>
	</div>";
	require "layout_footer.php";
}
 ?>
