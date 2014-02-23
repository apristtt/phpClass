<?php
//$open = fopen('/opt/lampp/htdocs/php/test.txt', 'r');
//echo $open;
//$myread = fread($open, 3); // you need to know byte of file then you can read
//echo $myread;
//fputs($open, "It's work"); // Insert It's work into test.txt
//$output = file('/opt/lampp/htdocs/php/test.txt'); // collect file function
//for($i=0;$i<count($output);$i++){
//    echo "$output[$i]<br>";
//}
// with $file function can convert string to array
//echo $output[0]."<br>$output[1]";
//echo filesize("/opt/lampp/htdocs/php/test.txt");

//with this method you don't need to know byte of file because $filesize() read it for you!
//$myread = fread($open, filesize("/opt/lampp/htdocs/php/test.txt")); 
//echo $myread;
//$output2 = fpassthru($open);

//fclose($open);

//if (file_exists("/opt/lampp/htdocs/php/test.txt")) {
//    echo "Have";
//} else {
//    echo "Have not";
//}

//$old = '/opt/lampp/htdocs/php/old.txt';
//$new = '/opt/lampp/htdocs/php/new.txt';

//if (copy($old, $new)) {
//    echo "Success";
//} else {
//    echo "Cannot copy";
//}

//if (unlink($new)) {
//    echo "Delete successful";
//} else {
//    echo "Cannot delete";
//}

//if (rename("/opt/lampp/htdocs/php/test.txt", "/opt/lampp/htdocs/php/testnew.txt")) {
//    echo "Rename success";
//} else {
//    echo "Cannot rename";
//}

$dir = opendir('/opt/lampp/htdocs/php');
//echo $dir;
//while ($list = readdir($dir)){
//    echo $list;
//}

//echo getcwd();
echo basename($path); //$basename() use to hide real file path
echo dirname($path); //$dirname() only show path
//closedir($dir);