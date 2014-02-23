<?php 

include("testSQLMember_config.php");

if($_POST['submitEdit']){
	$MemberName = $_POST['MemberName'];
	$MemberID = $_REQUEST['memberID'];
	$sql = "UPDATE member SET MemberName = '$MemberName' WHERE MemberID='$MemberID'";
	mysql_query($sql) or die(mysql_error());

	echo "Edit success!<br>";
	echo '<a href="testSQLMember.php">Back to mainpage</a>';
}
?>