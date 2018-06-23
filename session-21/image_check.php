<?php
	$errorImageCheck = array();
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["productImage"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["productImage"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        array_push($errorImageCheck, 'File is not an image.');
        $uploadOk = 0;
    }
		// Check if file already exists
	if (file_exists($target_file)) {
	    // array_push($errorImageCheck, 'Sorry, file already exists.');
	    $uploadOk = 1;
	}
	// Check file size
	if ($_FILES["productImage"]["size"] > 500000) {
	    array_push($errorImageCheck, 'Sorry, your file is too large.');
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    array_push($errorImageCheck, 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 1) {
	    if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["productImage"]["name"]). " has been uploaded.";
	        $imageName = basename( $_FILES["productImage"]["name"]);
	    } else {
	        array_push($errorImageCheck, 'Sorry, there was an error uploading your file.');
	    }
	}
 ?>