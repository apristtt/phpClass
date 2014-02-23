<?php

$pattern = ".a$";
$https = "https";

if(eregi($pattern, $https)){
    echo "$https Valid<br>";
} else {
    echo "$https Not valid<br>";
}

$pattern1 = "[0-9]?";
$transaction1 = "transaction1";

if(eregi($pattern1, $transaction1)) {
    echo "$transaction1 Valid<br>";
} else {
    echo "$transaction1 Not Valid<br>";
}

$pattern2 = "[0-9]$";
$word = "word1word";

if(eregi($pattern2, $word)) {
    echo "$word Valid<br>";
} else {
    echo "$word Not Valid<br>";
}