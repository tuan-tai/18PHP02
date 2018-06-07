<!DOCTYPE html>
<html>
<head>
	<title>Form Sign Up</title>
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
	<form method="post" action="signUp.php">
		<fieldset>
			<legend>Sign up</legend>
			<div>
				<label for="name">Full name: </label>
				<input type="text" name="name">
			</div>
			<div>
				<label for="email">Email: </label>
				<input type="email" name="email">
			</div>
			<div>
				<label for="pass">Password: </label>
				<input type="password" name="pass">
			</div>
			<div>
				<label for="tel">Phone number: </label>
				<input type="number" name="tel">
			</div>
			<input type="hidden" name="url" value="formSignUp.php">
			<div>
				<button>Submit</button>
			</div>
		</fieldset>
	</form>
</body>
</html>