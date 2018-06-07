<?php 
session_start();
?>
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
		margin: 10px 0;
	}
	label, input {
		display: block;
		width: 100%;
		margin: 10px 0;
	}
	label {
		position: relative;
	}
	.checkbox {
		display: inline-block;
		position: absolute;
		right: 0;
		top: 0;
	}
	.checkbox input {
		display: inline-block;
		width: auto;
		margin-right: 5px;
	}
</style>
</head>
<body>
	<form method="post" action="signUp.php">
		<fieldset>
			<legend>User edit</legend>
			<div>
				<label for="name">
					Full name: 
					<span class="checkbox"><input type="checkbox" data-name="name">Edit</span>
				</label>
				<div> 
					<input type="text" name="name" readonly value= <?php echo "\"".$_SESSION['name']."\""?>>
				</div>
			</div>

			<div>
				<label for="email">
					Email: 
					<span class="checkbox"><input type="checkbox" data-name="email">Edit</span>
				</label>
				<div> 
					<input type="email" name="email" readonly value= <?php echo "\"".$_SESSION['email']."\""?>>
				</div>
			</div>

			<div>
				<label for="pass">
					Password: 
					<span class="checkbox"><input type="checkbox" data-name="pass">Edit</span>
				</label>
				<div> 
					<input type="password" name="pass" readonly value= <?php echo "\"".$_SESSION['pass']."\""?>>
				</div>
			</div>

			<div>
				<label for="tel">
					Phone number: 
					<span class="checkbox"><input type="checkbox" data-name="tel">Edit</span>
				</label>
				<div> 
					<input type="number" name="tel" readonly value= <?php echo "\"".$_SESSION['tel']."\""?>>
				</div>
			</div>
			<input type="hidden" name="index" value= <?php echo "\"".$_SESSION['index']."\""?>>
			<input type="hidden" name="url" value="formEdit.php">
			<div>
				<button>Submit</button>
			</div>
		</fieldset>
	</form>
	<script type="text/javascript">
		var checkboxes = document.querySelectorAll("label input");
		checkboxes.forEach(function(checkbox) {
			checkbox.addEventListener("click", function() {
				var name = this.getAttribute("data-name");
				if (this.checked == true) {
					console.log(document.getElementsByName(name)[0]);
					document.getElementsByName(name)[0].removeAttribute("readonly");
				}
				else {
					document.getElementsByName(name)[0].setAttribute("readonly", "readonly");
				}
			});
		});
	</script>
</body>
</html>
<?php 
	if (empty($_SESSION))
 ?>