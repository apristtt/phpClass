<?php 
	session_start();
	// $str = "Hello PHP";
	// $str2 = "Hello world";
	// session_register("str");
	$_SESSION['str'] = 'Hello PHP';
	$_SESSION['str2'] = 'Hello world';
	$_SESSION['str3'] = 'Welcome Welcome';
	$_SESSION['str4'] = 'Welcome to Class PHP';
	$_SESSION['str5'] = 'Get grade A';

	echo $_SESSION['str'];
	echo $_SESSION['str2'];
	echo $_SESSION['str3'];
	echo $_SESSION['str4'];
	echo $_SESSION['str5'];

	unset($_SESSION['str3']);

	session_destroy();
//	echo $str;
 ?>