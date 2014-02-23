<?php
$open = fopen('/opt/lampp/htdocs/php/hw-05.txt', 'a+');

//$myread = fread($open, filesize('/opt/lampp/htdocs/php/hw-05.txt'));
//echo $myread;

//$output = file('/opt/lampp/htdocs/php/hw-05.txt');
//for($i=0;$i<count($output);$i++){
//    echo "<br>$output[$i]<br>";
//}

//$output2 = fpassthru($open);

//fputs($open, "Year 2 Section 3");

fclose($open);
//
$old = '/opt/lampp/htdocs/php/hw-05.txt';
$new = '/opt/lampp/htdocs/php/new/new.txt';

//mkdir('/opt/lampp/htdocs/php/new');

if (copy($old, $new)) {
    echo "Success";
} else {
    echo "Cannot copy";
}