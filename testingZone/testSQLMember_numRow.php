<?php 
	include("testSQLMember_config.php");

	function runMemberID($max){
		$sql = "SELECT * FROM member;";
		$result = mysql_query($sql);

		$numRows = mysql_num_rows($result);
		if ($numRows == 0) {
			$numRows++;
			echo "You have $numRows Row\n";
			//$runID = "INSERT INTO member (MemberID) VALUES ('')"
		} else {
			$numRows++;
			echo "NextID is $numRows\n";
		//echo "$numRows Rows\n";
		}


		//mysql_close($conn);
	}
	
	$memID = "";

	runMemberID($memID);
