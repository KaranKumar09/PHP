<?php
$url = "https://www.example.com";
if(filter_var($url,FILTER_VALIDATE_URL,)){
    echo "The URL address is '$url' is valid.";
}
else{
    echo "The URL '$url' is not valid.";
}