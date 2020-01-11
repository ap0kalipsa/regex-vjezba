<?php
$text = $_POST["mail"];
$pattern= "/[a-zA-Z]{1,5}[0-9]{1,5}@yahoo.com/";

if(preg_match($pattern, $text)){
    echo "Mail match found!<br>";
} else{
    echo "Mail match not found.<br>";
}


$text1 = $_POST["http"];
$pattern1= "/http:\/\/www.[0-9]{1,9}.com$/";

if(preg_match($pattern, $text)){
    echo "HTTP match found!<br>";
} else{
    echo "HTTP match not found.<br>";
}


$text2 = $_POST["https"];
$pattern2= "/https:\/\/www.[a-zA-Z]{1,9}.net$/";

if(preg_match($pattern, $text)){
    echo "HTTPS match found!<br>";
} else{
    echo "HTTPS match not found.<br>";
}


$text3 = $_POST["adresa"];
$pattern3= "/http(s)?:\/\/www.[a-zA-Z_0-9]{1,9}.[a-z]{2,3}$/";

if(preg_match($pattern, $text)){
    echo "Adress match found!<br>";
} else{
    echo "Adress match not found.<br>";
}
