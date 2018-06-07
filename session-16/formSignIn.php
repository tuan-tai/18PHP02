<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Sign In</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	form {
		width: 300px;
		margin: auto;
	}
	legend {
		text-align: center;
	}
	div {
		margin: 10px;
	}
	label, input {
		display: block;
		width: 100%;
	}
</style>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Sign in</legend>
			<div>
				<label for="email">Email: </label>
				<input type="email" name="email">
			</div>
			<div>
				<label for="pass">Password: </label>
				<input type="password" name="pass">
			</div>
			<input type="hidden" name="url" value="formSignIn.php">
			<div>
				<button>Submit</button>
			</div>
		</fieldset>
	</form>
</body>
</html>

<?php 
if (!empty($_SESSION)) {
	echo "Please sign out first!<br><form method='post' action='formSignOut.php'><input type='hidden' name='url' value='formSignIn.php' /><button>Sign out</button></form>";	
}
else {
	if (!empty($_POST['email']) && !empty($_POST['pass'])) {
		$users = json_decode(file_get_contents("user.txt"));

		foreach ($users as $index=>$user) {
			if ($_POST['email'] == $user->email && md5($_POST['pass']) == $user->pass) {
				echo "<span style='color:green'>Hello ".$user->name."</span><br><a href='formEdit.php'>Edit info</a>";
				$_SESSION['name'] = $user->name;
				$_SESSION['email'] = $user->email;
				$_SESSION['pass'] = $user->pass;
				$_SESSION['tel'] = $user->tel;
				$_SESSION['index'] = $index;
				exit();
			}
		}
		echo "<span style='color:red'>Cannot verify!</span>";
	}
}
?>