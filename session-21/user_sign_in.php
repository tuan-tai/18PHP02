<?php require "session.php" ?>
<?php require "layout_header.php" ?>
<?php $checkValidate = false; ?>
<form id="signIn" class="s-w-300 m-auto" method="post" action="user_sign_in.php">
	<h1 class="text-center">Sign in</h1>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email">
            <?php 
            if (isset($_POST['submit']) && empty($_POST['email'])) {
                $checkValidate = false;
                echo "<div class='alert alert-danger form-control mt-2'>Please input Email!</div>";
            } else if (isset($_POST['submit']) && !empty($_POST['email'])) {
            	$checkValidate = true;
            }
            ?>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="pass">
            <?php 
            if (isset($_POST['submit']) && empty($_POST['pass'])) {
                $checkValidate = false;
                echo "<div class='alert alert-danger form-control mt-2'>Please input password!</div>";
            } else if (isset($_POST['submit']) && !empty($_POST['pass'])) {
            	$checkValidate = true;
            }
            ?>
        </div>
	<input type="submit" name="submit" form="signIn" class="btn btn-primary" value="Submit">
</form>

<?php require "layout_footer.php" ?>

<?php 
	require "db_connect.php";
	if ($checkValidate == true) {
		$email = mysqli_real_escape_string($conn,$_POST['email']);
      	$password = mysqli_real_escape_string($conn,$_POST['pass']); 
		$sql = "SELECT id FROM users WHERE email = \"".$email."\" AND password = \"".$password."\"";
		// echo $sql; exit();
		$result = $conn->query($sql);

		if ($result->num_rows == 1) {
			while ($row = $result->fetch_assoc()) {
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['cart'] = array();
				// var_dump($_SESSION['email']);
				header("Location: user_list.php");
			}	
		} else {
			echo 'Invalid email or password';
		}
	}
?>