<?php
$check = mail("karan9955078@gmail.com",
"testing mail","this is test mail",
"From:karan9955078@gmail.com");
if($check){
    echo "email sent";
}
else{
    echo "email is not sent";
}
?>