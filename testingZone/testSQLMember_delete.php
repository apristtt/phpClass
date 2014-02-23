<?php 
	include("testSQLMember_config.php");

	if($_REQUEST['memberID'] != "") {
		$memberID = $_REQUEST['memberID'];
		$sql = "SELECT * FROM member WHERE MemberID = '$memberID'";
		$result = mysql_query($sql) or die(mysql_error());
		$query = mysql_fetch_array($result);
	}

	$sqlDelete = "DELETE FROM member WHERE MemberID = '$memberID'";
	$doDelete = mysql_query($sqlDelete) or die(mysql_error());
	echo '<script type="text/javascript">'.
		"alert('Deleted'); document.location = 'testSQLMember.php'</script>";
 ?>