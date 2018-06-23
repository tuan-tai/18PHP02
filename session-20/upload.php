<!DOCTYPE html>
<html>
	<head>
		<title>Demo</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css"></style>
	</head>
	<body>
		<form id="test1" action="upload.php" method="post" enctype="multipart/form-data">
			<h1>Form 1</h1>
			Select file to upload:
			<input type="text" name="value">
			<input type="submit" name="submit" value="Submit"  />
		</form>
		<form id="test2" method="post" action="upload.php">
			<h1>Form 2</h1>
			<input type="text" name="value">
			<input type="submit" name="">
		</form>
		<script type="text/javascript"></script>

	</body>
</html>

<?php
$target_dir = "uploads/";
var_dump($_POST['value']);
if (i == 1) {

    echo 'ok';

}
?>