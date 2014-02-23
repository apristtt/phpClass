<?php

global $host, $user, $pass, $db, $table, $conn;

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "todo";
$table = "todo_list";

$conn = mysql_connect($host, $user, $pass);
if(! $conn) {
    die ('Unable to connect to server :'. mysql_error());
} 
