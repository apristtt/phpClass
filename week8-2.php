<?php

$link = mysql_connect("localhost", "root");

//mysql_query("CREATE DATABASE IF NOT EXISTS Bookstore;");
mysql_select_db("Bookstore");
//
//$create_Tb = "CREATE TABLE Customer (
//                CustomerID INT PRIMARY KEY,
//                Name VARCHAR(40));";
//
//$q = mysql_query($create_Tb);
//
//mysql_query("SET NAMES tis620");
//
//if($q) {
//    echo "Table created!<br>";
//} else {
//    echo "Can't create table!<br>";
//}

//$insert_db = "INSERT INTO Customer VALUES
//                ('1234', 'Somchai'),
//                ('4656', 'Somsri');";
//
//$q1 = mysql_query($insert_db);
//
//if($q1) {
//    echo "New Record Inserted<br>";
//} else {
//    echo "Can't insert new record!<br>";
//}

echo '<a href="week8-2_drop.php">Drop Bookstore<br></a>';

//$select = mysql_query("SELECT CustomerID, Name FROM Customer");
////$name = mysql_result($select, 0, "Name");
//$name = mysql_result($select, 0, "Name");
//echo "<br> $name <br>";
//
//$id = mysql_result($select, 0, "CustomerID");
//echo "<br> $id <br>";

//$select = mysql_query("SELECT Name FROM Customer");
//$num = mysql_num_rows($select);
//for($i=0;$i<$num;$i++){
//    $name = mysql_result($select, $i, "Name");
//    echo "$name<br>";
//}

$select = mysql_query("SELECT Name FROM Customer");
while($data = mysql_fetch_array($select)) {
    echo "{$data['Name']}<br>";
}

//$select = mysql_query("SELECT Name FROM Customer");
//if(!$select) {
//    echo mysql_error();
//} else {
//    echo "No error";
//}

//// list all database
//$dbs = mysql_list_dbs();
//while(list($db) = mysql_fetch_row($dbs)) {
//    echo $db."<br>";
//}

//list all table
//$table = mysql_list_tables("Bookstore");
//while(list($tb) = mysql_fetch_row($table)) {
//    echo $tb."<br>";    
//}