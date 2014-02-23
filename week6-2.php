<?php
$pattern = ".a$"; // set strings pattern must end with lower case "a"
$string = "bananA"; // with eregi() function result will be Valid
if(eregi($pattern, $string)){
    echo "Valid";
} else {
    echo "Not valid";
}