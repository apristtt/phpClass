<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Member</title>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
	<style type="text/css">
	body{
		background-color: #2c3e50;
	}
	.container{
		background-color: #FFF;
	}
	</style>
</head>
<body>
	<?php 
		include("testSQLMember_config.php");
		//$memberID = "";
		if($_REQUEST['memberID'] != "") {
			$memberID = $_REQUEST['memberID'];
			$sql = "SELECT * FROM member WHERE MemberID = '$memberID'";
			$result = mysql_query($sql) or die(mysql_error());
			$query = mysql_fetch_array($result);

		}	

		// echo "REQUEST : $memberID"
		//while($query = mysql_fetch_array($result)){
			// echo "<tr><td>$query[MemberID]</td>".
			// "<td>$query[MemberName]</td>".
			// "<td><a href='testSQLMember_edit.php?id=$query[MemberID]'>Edit</a></td></tr>";
			// echo ''.
			// 	'';
		//}
		?>	
	 <!-- <?=$_REQUEST['memberID']?> -->
	<div class="container">
		<form class="form-horizontal" method="POST" action="testSQLMember_doEdit.php" method="POST" role="form">
		<div class="form-group">
			<label class="col-md-2 control-label">Member ID</label>
			<div class="col-sm-10">
					<!-- <label name="MemberID"> -->
					<p class="form-control-static">
						<kbd><?echo $query['MemberID'] ?></kbd>
					</p>
					<!-- </label> -->
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Member Name</label>
			<div class="col-md-15">
					<input type="text" class="form-control" style="width: 350px;" name="MemberName" value="<?echo $query['MemberName'] ?>"></input>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-15">
					<input type="submit" class="btn btn-success" name="submitEdit" value="Edit"></input>
					<!-- <button type="submit" class="btn btn-success" name="submitEdit"><span class="glyphicon glyphicon-pencil"> Edit</span></button> -->
			</div>
		</div>
		<input name="memberID" type="hidden" id="memberID" value="<?=$_REQUEST['memberID']?>">
		</form>
	</div>
	
</body>
</html>