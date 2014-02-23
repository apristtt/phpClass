<?php 
	// if (($username == "user1") and ($pwd == "1234")) {
$username = $_POST['username'];
$pwd = $_POST['pwd'];
	if (($username == "user1") and ($pwd == "1234")) {
		setcookie("user", "$username", time()+180);
		setcookie("passw", "$pwd", time()+180);
		echo "Welcome to admin<br>";
		echo "<a href='week10-1_login_admin.php'>Go to admin</a><br>";
		$array_username[] = $username;
		$array_password[] = $pwd;
		array_push($array_username, $username);
		print_r($array_username);
		array_push($array_password, $pwd);
		print_r($array_password);
		if (in_array("user1", $array_username)) {
			echo "We found user1";
		}

		session_start();



		//header("Refresh:5;URL:login_admin.php");
	} else {
		echo "Your username and password incorrect";
	}
 ?>