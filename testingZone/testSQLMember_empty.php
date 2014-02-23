<?php 
	include("testSQLMember_config.php");

	$sql = "TRUNCATE TABLE member";
	$query = mysql_query($sql) or die('Cannot Empty Table!.'.mysql_error());
	echo '<script type="text/javascript">'.
		"alert('Emptied'); document.location = 'testSQLMember.php'</script>";
 ?>