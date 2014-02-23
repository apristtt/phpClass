<?php 
if ($send == null) {
echo <<<HTMLBLOCK
<form action="{$_SERVER['PHP_SELF']}" method="POST">
<h1>Deletes Data</h1>
Type book id to delete <br>
Book ID : <input type="text" name="id2"><br>
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancel" value="Cancel">
</form>
HTMLBLOCK;
} else {
	$link = mysql_connect("127.0.0.1", "root");
	$tb = mysql_select_db("Bookstore");
	$q = mysql_query($tb);
	mysql_query("SET NAMES tis-620");
	$sql = "DELETE FROM Books WHERE isbn = '$id2'";
	$q1 = mysql_query($sql);
	if ($q1) {
		echo "<br>DELETE Success<br>";
		mysql_close($link);
	} else {
		echo "DELETE NOT SUCCESS";
	}
echo '<a href="hw9-1-index.php">Back to home page</a><br>';
}