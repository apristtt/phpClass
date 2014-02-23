<?php 
	include("testSQLMember_config.php");

	// $MemberID = $MemberID++;
	// $MemberName = "";
	// echo $MemberID;
	$MemberName = $_POST['MemberName'];
	$check ="";

// function findMaxMemberID(){
// 	$sql = "SELECT MAX(MemberID) FROM member";
// 	$result = mysql_query($sql);
// 	$data = mysql_fetch_array($result);

// 	echo $data[0];
// }



	if ($MemberName == '') {
		echo "Please type name!<br>";
		echo "<a href='javascript: history.go(-1)'>&larr; Back</a>";
	} else {
		$sql = "INSERT INTO member (MemberName) VALUES ('$MemberName')";
		$query = mysql_query($sql) or die(mysql_error());
			echo "Member Added";
			mysql_close($conn);
			header("Location:testSQLMember.php");
	}

 ?>
