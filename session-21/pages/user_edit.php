<?php require "session.php"; ?>
<?php require "layout_header.php"; ?>
<?php require "db_connect.php";  ?>
<?php if (!empty($_SESSION['email'])) { ?>
<?php 
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id = ".$id;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    	while ($row = $result->fetch_assoc()) {
?>
<?php $checkValidate = true; ?>
	<form id="userRegisterForm" class="s-w-300 m-auto" method="post" action="user_edit.php?id=<?php echo $id ?>.php">
		<h1 class="text-center">User Edit</h1>
		<div class="text-right">
			<a href="user_list.php" class="btn btn-primary">User list</a>
		</div>
	    <div class="form-group">
	        <label>Email address<sup> *</sup></label>
	        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
	        <?php 
	        if (isset($_POST['email']) && empty($_POST['email'])) {
	            $checkValidate = false;
	            echo "<div class='alert alert-danger form-control mt-2'>Please input email!</div>";
	        }
	        ?>
	    </div>
	    <div class="form-group">
	        <label>Password <sup>*</sup></label>
	        <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>">
	        <?php 
	        if (isset($_POST['email']) && empty($_POST['password'])) {
	            $checkValidate = false;
	            echo "<div class='alert alert-danger form-control mt-2'>Please input password!</div>";
	        }
	        ?>
	    </div>
	    <div class="form-group">
	        <label>Name</label>
	        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
	    </div>
	    <button type="submit" name="submit" class="btn btn-primary" form="userRegisterForm">Submit</button>
	</form>
<?php 
		}
	}
 ?>
<?php 
	if (isset($_POST['submit'])) {
		if ($checkValidate == true) {
			$sql = "UPDATE users SET
						name = \"".$_POST['name']."\", 
						email = \"".$_POST['email']."\",
						password = \"".$_POST['password']."\"
					WHERE id = ".$id;

			$conn->query($sql);
			// header("Location: user_list.php");
			$conn->close();
		}
	} else {
		echo "Error";
		$conn->close();
	}
 ?>
 <?php 
} else {
		echo "
		<div class=\"s-w-300 mx-auto mt-5\">
			<div class=\"alert alert-warning text-center\"><i class=\"fas fa-exclamation-triangle mr-1\"></i>You are not logged in</div>
			<div class=\"text-center\">
				<a href=\"user_register.php\" class=\"btn btn-primary\">Sign up</a> <span class=\"text-primary\">OR</span> <a href=\"user_sign_in.php\" class=\"btn btn-primary\">Log in</a>
			</div>
		</div>";
}
?>
<?php require "layout_footer.php" ?>