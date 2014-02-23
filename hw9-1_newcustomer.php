<?php
if($send==null) {
echo<<<HTMLBLOCK
<form action="{$_SERVER['$PHP_SELF']}" method="POST">
<h1>Add New Customer</h1>
Customer ID : <input type="text" name="id"><br>
Customer Name : <input type="text" name="name"><br>
Address : <input type="text" name="address"><br>
Phone : <input type="text" name="phone"><br>
<input type="submit" name="send" value="Submit">
<input type="reset" name="cancel" value="Cancel">
</form>
HTMLBLOCK;
} else {
$link = mysql_connect("127.0.0.1","root");
mysql_select_db("Bookstore");
$sql = "INSERT INTO Customer VALUES ('$id','$name','$address','$phone')";
$q1 = mysql_query($sql);

    if($q1) {
            echo "Insert Success<br>";
            mysql_close($link);
    } else {
            echo "Insert not success";
    }
echo '<a href="hw9-1_newcustomer.php">Back to new customer page</a><br>';
echo '<a href="hw9-1-index.php">Back to home page</a><br>';
}