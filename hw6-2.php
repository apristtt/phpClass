<?php
$url1 = "gmail.com";
$url2 = "www.gmail.com";
$email1 = "php@localhost";
$ip = "192.168.5.6";
$email2 = "Admin@php.net";

if(!filter_var($url1,FILTER_VALIDATE_URL)){
    echo "$url1 URL is not valid<br>";
} else {
    echo "$url1 URL is valid<br>";
}

if(!filter_var($url2,FILTER_VALIDATE_URL)){
    echo "$url2 URL is not valid<br>";
} else {
    echo "$url2 URL is valid<br>";
}

if(!filter_var($email1,FILTER_VALIDATE_EMAIL)){
    echo "$email1 Email is not valid<br>";
} else {
    echo "$email1 Email is valid<br>";
}

if(!filter_var($ip,FILTER_VALIDATE_IP)){
    echo "$ip IP is not valid<br>";
} else {
    echo "$ip IP is valid<br>";
}

if(!filter_var($email2,FILTER_VALIDATE_EMAIL)){
    echo "$email2 Email is not valid<br>";
} else {
    echo "$email2 Email is valid<br>";
}