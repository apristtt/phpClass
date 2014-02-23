<?php 
if ($send == null) {
echo <<<HTMLBLOCK
<form action="{$_SERVER['PHP_SELF']}" method="POST">
<h1>Deletes Data</h1>
Please insert employee id to deletes <br>
Employee ID : <input type="text" name="id2"><br>
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancel" value="Cancel">
</form>
HTMLBLOCK;
} else {
	$link = mysql_connect("127.0.0.1", "root");
	$tb = mysql_select_db("adminDB");
	$q = mysql_query($tb);
	mysql_query("SET NAMES tis-620");
	$sql = "DELETE FROM Employee WHERE id = '$id2'";
	$q1 = mysql_query($sql);
	if ($q1) {
		echo "DELETES Success";
		mysql_close($link);
	} else {
		echo "DELETES NOT SUCCESS";
	}
echo '<a href="week9-1_delete.php">Back to delete page</a>';
echo '<a href="week9-1.php">Back to homepage</a>';
}
?>