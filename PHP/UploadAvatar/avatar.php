<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Avatar</title>
	<style type="text/css">
	body {
		width: 40%;
		margin: auto;
	}
	h3 {
		text-align: center;
	}
	#select-avatar {
		border: 1px solid black;
		background-color: rgb(254, 220, 160);
		border-radius: 4px;
		text-align: center;
		padding: 10px 0;
	}
	button {
		display: inline-block;
		margin: 10px 0;
		background-color: lightgreen;
		border-radius: 4px;
	}
	img {
		width: 100%;
	}
</style>
</head>
<body>
	<h3>Upload Avatar</h3>
	<p></p>
	<form method="post" action="" enctype="multipart/form-data">
		<div id="select-avatar">
			<span>Chọn Avatar của bạn: </span><input type="file" name="fileToUpload">
		</div>
		<button type="submit" name="submit">Upload ảnh</button>
	</form>


<?php 
if (isset($_POST["submit"])) {
	if ($_FILES["fileToUpload"]["name"] == NULL) {
		echo 'Bạn chưa chọn file để upload';
	}
	else {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo 'Bạn up file quá lớn, vui lòng up file khác.';
		}
		else if ($imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'png' && $imageFileType != 'gif') {
			echo "Sorry, only JPG, JPEG, PNG AND GIF ARE ALLOWED.";
		}
		else {
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			echo "Upload file thành công";
		}
	}
}
?>

	<img src="<?php echo $target_file; ?>">
</body>
</html>