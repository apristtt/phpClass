<?php 
	// include ("week10-1_login.php");
	// if(in_array("user1", $array_username) and in_array("1234", $array_password)) {
	// if (($username == "user1") and ($pwd == "1234")) {
	if (($user == "user1") and ($passw == "1234")) {
		echo "Welcome to Admin page<br>";
		echo '<a href="week9-1_insert.php>Insert Data</a><br>';
		echo '<a href="week9-1_delete.php>Delete Data</a><br>';
		echo '<a href="week9-1_update.php>Update Data</a><br>';
		echo '<a href="week9-1_select.php>Select Date</a><br>';
		echo '<a href="week10-1_logout.php>Logout</a><br>';
	} else {
		echo "You can not entry to admin page";
		print_r($array_username);
	}
 ?>