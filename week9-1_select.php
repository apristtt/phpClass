<?php 
$link = mysql_connect("127.0.0.1","root");
$tb = mysql_select_db("adminDB");
mysql_query($tb);
mysql_query("SET NAMES tis-620");
$sql = "SELECT * FROM Employee";
$q = mysql_query($sql);
while ($fetch = mysql_fetch_array($q)) {
	echo "Employee ID : $fetch[id]".
	"Employee Name : $fetch[name]".
	"Age : $fetch[age]<br>";
}
echo '<a href="week9-1.php">Back to main menu</a>';
mysql_close($link);
 ?>