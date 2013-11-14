<?php

 // convert type of variable ex. convert from float to integer

$float = 2.8;
//echo $float;
$casting = (int) $float;
echo $casting . "<br/> <b>Type</b> " . gettype($casting);