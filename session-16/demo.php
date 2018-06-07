<!DOCTYPE html>
<html>
<head>
	<title>HW</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	form {
		width: 300px;
		margin: auto;
	}
	textarea {
		width: 100%;
	}
</style>
</head>
<body>
	<form method="post" action="">
		<label>Nhập nội dung: </label>
		<textarea name="text" rows="10"></textarea>
		<button>Submit</button>
	</form>
	<script type="text/javascript"></script>
</body>
</html>
<?php 

	//Thêm text vào demo.txt
	if (isset ($_POST["text"])) {
		$text = $_POST["text"];
		$demo = fopen("demo.txt", "w+") or die ("Không thể mở file!");
		fwrite ($demo, $text);
		fclose ($demo);
	}

	//Đếm số, đếm chữ hoa và chia văn bản
	$demo = fopen ("demo.txt", "r") or die ("Không thể mở file!");
	$text = fread ($demo, filesize ("demo.txt"));
	$count_num = 0;
	$count_upper = 0;

	for ($i = 0; $i < strlen($text); $i++) {
		if (is_numeric($text[$i])) {
			$count_num++;
		}
		else if (ctype_upper($text[$i])) {
			$count_upper++;
		}
	}
	echo 'Có <b>'.$count_num.'</b> số trong đoạn văn <br>';
	echo 'Có <b>'.$count_upper.'</b> chữ in hoa trong đoạn văn <br>';
	$text_explode = explode('.', $text);
	$index = 1;
	for ($i = 0; $i < count($text_explode); $i++) {
		if (strlen($text_explode[$i]) != 0) {
			$demo1 = fopen("demo".$index.".txt", "w+") or die ("Không thể mở file!");
			$index++;
			fwrite($demo1, $text_explode[$i]);
			fclose($demo1);
		}
	}
fclose ($demo);

?>