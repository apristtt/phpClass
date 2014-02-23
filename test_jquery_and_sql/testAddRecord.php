<?php

$link = mysql_connect("localhost", "root");

mysql_select_db("Bookstore");

$insert = "INSERT INTO Customer VALUES ('1111', 'Chic'), ('1212', 'Tevv');";

$q = mysql_query($insert);

if($q) {
    echo "Record Added!";
} else {
    echo "Can't Add record";
}