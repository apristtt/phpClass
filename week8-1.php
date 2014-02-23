<?php

$link = mysql_connect("localhost", "root");

if($link) {
    echo "Connection Success <br>";
    mysql_close($link);
} else {
    die('Could not connect:'.mysql_error());
}