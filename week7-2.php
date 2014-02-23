<?php
$str1 = "I am number one";
$find = "(one)|(two)"; // set pattern when found "one" or "two"
$replace = "four"; // when matched with $find replace with "four"
$str2 = ereg_replace($find, $replace, $str1); // pattern is ereg_replace(pattern, replacement, string)
echo "<b>Before replace</b><br>$str1<br><br>";
echo "<b>After replace</b><br>$str2";