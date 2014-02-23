<?php

$link = mysql_connect("127.0.0.1","root");
$tb = mysql_select_db("Bookstore");
mysql_query($tb);
mysql_query("SET NAMES tis-620");
$sql = "SELECT * FROM Customers";
$q = mysql_query($sql);
while ($fetch = mysql_fetch_array($q)) {
	echo "Customer ID : $fetch[CustomerID]<br>".
	"Customer Name : $fetch[CustomerName]<br>".
	"Address : $fetch[address]<br>".
        "Phone : $fetch[Phone]<br><hr>";
}
echo '<a href="hw9-1-index.php">Back to home page</a><br>';
mysql_close($link);
 ?>
