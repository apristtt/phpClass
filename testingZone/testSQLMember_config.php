<?php 
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$database = "php";

	$conn = mysql_connect($host,$user, $pass);
	if(! $conn){
		die("Unable to connect to database :".mysql_error());
	}
	//  else {
	// 	echo "Connection successful";
	// }
	mysql_select_db($database);
 ?>