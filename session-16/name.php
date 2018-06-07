<?php 

	$myName = "";
	$myName = "Le Tuan Tai";

	$count_space = 0;
	for ($i = 0; $i < strlen($myName); $i++) {
		if ($myName[$i] != " ") {
			$count_space++;
		}
	}
	echo "Tên có ".$count_space." ký tự. <br>";
	echo "Tên có ".str_word_count($myName)." từ. <br>";

	if (strpos($myName, "n") > -1) {
		$countN = 0;
		echo "Tên có chữ 'n' tại vị trí thứ ";
		for ($i = 0; $i < strlen($myName); $i++) {
			if ($myName[$i] == "n") {
				$countN++;
				echo ($i + 1)." ";
			}
		}
	}
	else {
		echo "Tên không có chữ 'n'.";
	}

	echo "<br>Tên in hoa là: ".strtoupper($myName);
	echo "<br>Tên sau khi thay thế là: ".str_replace(substr($myName, strrpos($myName, " ") + 1), "PHP", $myName);
?>