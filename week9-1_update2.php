<?php 
$link = mysql_connect("127.0.0.1", "root");
$tb = mysql_select_db("adminDB");
mysql_query($tb);
mysql_query("SET NAMES tis-620");
$sql = "UPDATE Employee SET name = '$nameEmp', age = '$ageEmp' WHERE id = '$noEmp'";
$q1 = mysql_query($sql);
if($sql){
	echo "Update Success<br>";
	mysql_close($link);
} else {
	echo "Update not success<br>";
}
echo '<a href="week9-1_update.php">Back to update page</a><br>';
echo '<a href="week9-1.php">Back to home page</a><br>';
 ?>