<?php

$link = mysql_connect("localhost", "root");

$drop = mysql_query("DROP DATABASE Bookstore;");

if($drop) {
    echo "Drop database Bookstore success!";
    echo '<a href="week8-2.php"><br>Click here to insert again!</a>';
}