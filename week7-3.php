<?php

// when you using filter MUST USING filter_var()
// then using other filter function such as FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_URL or FILTER_VALIDATE_IP

$email = "ssiiid@gmail.com";
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Email is not valid<br>";
} else {
    echo "Email is valid<br>";
}

$url = "http://google.com";
if(!filter_var($url,FILTER_VALIDATE_URL)){
    echo "URL is not valid<br>";
} else {
    echo "URL is valid<br>";
}

$ip = "0.3.4.1";
if(!filter_var($ip,FILTER_VALIDATE_IP)){
    echo "IP is not valid<br>";
} else {
    echo "IP is valid<br>";
}