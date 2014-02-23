<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
	<style type="text/css">
	.mainbody { 
		background-color: #2c3e50;
	}
	.container {
		background-color: #FFF;
	}
	</style>
	<script type="text/javascript">
	function checkBlank(field){
		if (MemberName.value == ''){
			alert("Please type name!");
		}
	}
		function emptyAlert(){
			if(confirm('Empty table?')){
				document.location = 'testSQLMember_empty.php';
			} else {
				alert('Cancelled');
			}
		}
	</script>
</head>
<body class="mainbody">
	<div class="container">
		<h4>Add new member</h4>
		<hr>
			<form action="testSQLMember_save.php" class="form-inline" method="POST">
			<input type="text" name="MemberName" placeholder="Name" class="form-control">
			<input type="submit" name="send" value="Submit" onBlur="CheckBlank(this);" class="btn btn-primary">
			<a onclick="emptyAlert();"><h5 class="pull-right"><span class="glyphicon glyphicon-trash"></span></h5></a>
			</form>
	<?php 
	include("testSQLMember_config.php");
	include("testSQLMember_show.php");
 ?>
 	</div>
</body>
</html>