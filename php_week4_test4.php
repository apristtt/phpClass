<?php
// Method $_GET will show what you type on address bar
// Method $_POST secure than $_GET and can send bigger data $_GET but slow
$firstname = $_GET["firstname"];
echo "Name is : $firstname <br>";

$lastname = $_GET["lastname"];
echo "Lastname is : $lastname <br>";

$pwd = $_GET["pwd"];
echo "Password is : $pwd <br>";

$gender = $_GET["gender"];
echo "Gender is : $gender <br>";

$education = $_GET["education"];
echo "Education : $education <br>";

$verhicle = $_GET["verhicle"];
echo "Verhicle : $verhicle <br>";

$comment = $_GET["comment"];
echo "Comment : $comment <br>";

$datafile = $_GET["datafile"];
echo "Your file : $datafile <br>";