<?php
$send = "";
$PHP_SELF ="";
$Self = $_SERVER['PHP_SELF'];
if($send==null) {
echo<<<HTMLBLOCK
<form action="$Self" method="POST">
<h1>Add New Book</h1>
ISBN : <input type="text" name="isbn"><br>
Title : <input type="text" name="title"><br>
Price : <input type="text" name="price"><br>
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancel" value="Cancel">
</form>
HTMLBLOCK;
} else {
$link = mysql_connect("127.0.0.1","root");
mysql_select_db("Bookstore");
$sql = "INSERT INTO books VALUES ('$isbn','$title','$price')";
$q1 = mysql_query($sql);

    if($q1) {
            echo "Insert Success";
            mysql_close($link);
    } else {
            echo "Insert not success";
    }
echo '<br><a href="hw9-1_newbook.php">Back new book page</a><br>';
echo '<a href="hw9-1-index.php">Back to home page</a><br>';
}
