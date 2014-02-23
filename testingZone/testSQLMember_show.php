<!doctype html> 
<html lang="en"> 
	<head>     
	<meta charset="UTF-8">     
	<!--<title>Document</title> -->     
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"rel="stylesheet"/> 
	<script type="text/javascript">
	function deleteAlert(){
		if(confirm('Do you want to delete this member?')){
			document.location = 'testSQLMember_delete.php?memberID=$query[MemberID]';
		} else {
			alert('Cancelled!');
		}
	}
	</script>
</head> 
<body>     
<table class="table table-striped table-hover">
         <thead>
            <tr>
                <th>Member ID</th>
				<th>Member Name</th>
				<th>Manage</th>
			</tr>
		</thead>
		<tbody>
			
        <?php
            echo "<hr>";
            include("testSQLMember_config.php");
			$sql = "SELECT * FROM member";
			$result = mysql_query($sql);
		
			while($query = mysql_fetch_array($result)){

			echo "<tr><td>$query[MemberID]</td>".
			"<td>$query[MemberName]</td>".
			"<td><a href='testSQLMember_edit.php?memberID=$query[MemberID]'>".
			"<span class='glyphicon glyphicon-pencil'></span></a>".
			"&nbsp;&middot;&nbsp;".
			"<a href='testSQLMember_delete.php?memberID=$query[MemberID]'>".
			// "<a onClick='deleteAlert();'>".
			"<span class='glyphicon glyphicon-trash'></span></a></td>".
			"</tr>";
			}
		?>
						
		</tbody>
	</table>
</body>
</html>
