<?php 
if ($send == null) {
echo <<<HTMLBLOCK
<form action="{$_SERVER['PHP_SELF']}" method="POST">
<h1>Update data</h1>
Please insert employee to update<br>
Employee ID : <input type="text" name="id3">
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancel" value="Cancel">
</form>
HTMLBLOCK;
} else {
	$link = mysql_connect("127.0.0.1","root");
	$tb = mysql_select_db("adminDB");
	mysql_query($tb);
	mysql_query("SET NAMES tis620");
	$sql = "SELECT * FROM Employee WHERE id = '$id'";
	$q1 = mysql_query($sql);
	$fetch = mysql_fetch_array($q1);
echo <<<HTMLBLOCK
<form action="week9-1_update.php?noEmp=$id3" method="POST">
Employee ID : $id3<br>
Employee Name : <input type="text" name="nameEmp" value=$fetch[name]>
Age : <input type="text" name="ageEmp" value=$fetch[age]><br>
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancel" value="Cancel">
HTMLBLOCK;
mysql_close($link);
}