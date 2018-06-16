<?php require "layout_header.php" ?>
<?php $checkValidate = false; ?>
	<form id="userRegisterForm" class="s-w-300 m-auto" method="post" action="user_register.php">
		<h1 class="text-center">User Register</h1>
		<div class="text-right">
			<a href="user_list.php" class="btn btn-primary">User list</a>
		</div>
	    <div class="form-group">
	        <label>Email address<sup> *</sup></label>
	        <input type="email" class="form-control" name="email">
	        <?php 
	        if (isset($_POST['email']) && empty($_POST['email'])) {
	            $checkValidate = false;
	            echo "<div class='alert alert-danger form-control mt-2'>Please input email!</div>";
	        } else {
	        	$checkValidate = true;
	        }
	        ?>
	    </div>
	    <div class="form-group">
	        <label>Password <sup>*</sup></label>
	        <input type="password" class="form-control" name="password">
	        <?php 
	        if (isset($_POST['email']) && empty($_POST['password'])) {
	            $checkValidate = false;
	            echo "<div class='alert alert-danger form-control mt-2'>Please input password!</div>";
	        } else {
	        	$checkValidate = true;
	        }
	        ?>
	    </div>
	    <div class="form-group">
	        <label>Name</label>
	        <input type="text" class="form-control" name="name">
	    </div>
	    <button type="submit" name="submit" class="btn btn-primary" form="userRegisterForm">Submit</button>
	</form>
<?php require "layout_footer.php" ?>

<?php 
	require "db_connect.php";
	if (isset($_POST['submit'])) {
		if ($checkValidate == true) {
			$sql = "INSERT INTO users(name, email, password) VALUES
						('" . $_POST['name'] . "', '" . $_POST['email'] ."',
						 '" . $_POST['password'] ."')";
			// echo $sql; exit();
			$conn->query($sql);
			header("Location: user_list.php");
			$conn->close();
		}
	} else {
		echo "Error";
		$conn->close();
	}
 ?>