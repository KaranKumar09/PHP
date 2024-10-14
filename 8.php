<?php
$ip = "192.168.1.1";
if(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)){
    echo "The Ipv4 address is '$ip' is valid.";
}
else{
    echo "Ipv4 is not valid.";
}