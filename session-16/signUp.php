<?php 
	//Check edit
if ($_POST['index'] != "") {
	if (!empty($_POST['name']) && !empty($_POST['pass']) && !empty($_POST['tel'])) {
		if (!file_exists("user.txt")) {
			$file = fopen("user.txt", "w");
			fwrite($file, "[]");
		}
		$users = json_decode(file_get_contents("user.txt"), true);
		$_POST['pass'] = md5($_POST['pass']);
		$users[$_POST['index']] = $_POST;
		unset($users[$_POST['index']]['index']);
		unset($users[$_POST['index']]['url']);
		$file = fopen("user.txt", "w");
		fwrite($file, json_encode($users, JSON_UNESCAPED_UNICODE));
		fclose($file);
		echo "<span style='color:green'>Thank you, ".$_POST['name']."! You've successfull edited.0</span><br><a href='".$_POST['url']."'><- Go back</a>";
	}
	else 
		echo "<span style='color:red'>Please input all field!</span><br><a href='".$_POST['url']."'><- Go back</a>";
}
	//Check sign up
else {
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['tel'])) {
		if (!file_exists("user.txt")) {
			$file = fopen("user.txt", "w");
			fwrite($file, "[]");
		}
		$users = json_decode(file_get_contents("user.txt"), true);

		foreach ($users as $user) {
			if ($_POST['email'] == $user[email]) {
				exit("<span style='color:red'>Email already exits!</span><br><a href='".$_POST['url']."'><- Go back</a>");
			}
		}

		$_POST['pass'] = md5($_POST['pass']);
		array_push($users, $_POST);
		$file = fopen("user.txt", "w");
		fwrite($file, json_encode($users, JSON_UNESCAPED_UNICODE));
		fclose($file);
		echo "<span style='color:green'>Thank you, ".$_POST['name']."! You've successfull signed up.</span><br><a href='".$_POST['url']."'><- Go back</a>";
	}
	else 
		echo "<span style='color:red'>Please input all field!</span><br><a href='".$_POST['url']."'><- Go back</a>";
}
?>