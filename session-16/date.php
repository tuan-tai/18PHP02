<?php 
	if ($_POST['day'] != '' && $_POST['month'] != '' && $_POST['year'] != '') {

	}
	$date = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
	$d2 = strtotime("now");
	// var_dump($d1 . "<br>");
	// var_dump($d2);
	$diff = $d2->diff($d1);
	echo $diff->y;
 ?>