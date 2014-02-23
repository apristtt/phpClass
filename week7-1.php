<?php
$word = array("word1","word2"); // set word1, word2 is vulgar word
$string = "She is word1 and word2"; // 
$tmp = array(); // set blank array
foreach ($word as $temp) {
    $pattern = ".*$temp.*";
    if(eregi($pattern, $string)){  // eregi is function to search string
        array_push($tmp,$temp); // if found some vulgar word push is to $tmp
    }                               // in other word $temp will collect lot of vulgar word
}
if(count($tmp)>0) { // if $tmp is not null it is mean you have a vulgar word
    echo "You should not to post by:<br>"; // echo you have vulgar word!!!
    foreach ($tmp as $str) { // read it by using foreach()
        echo "$str<br>";
    }
} else {
    echo "You have not any vulgar word";
}
