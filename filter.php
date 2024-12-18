<?php
// $var = 41;
// var_dump(filter_var($var,FILTER_VALIDATE_INT));

// $options = array("options" => array("min_range" => 20,"max_range" => 40));
// if(filter_var($var,FILTER_VALIDATE_INT,$options)){
//     echo "<br> variable is integer";
// }
// else{
//     echo "<br> $var is not integer";
// }
// $email = "karan9955078@gmail.com";
// if(filter_var($email,FILTER_VALIDATE_EMAIL)){
//     echo "<br> '$email' is valid email";
// }
// else{
//     echo "the email address '$email' is not valid.";
// }
$n = 4;
try{
    if($n <=0){
        throw new Exception("Enter the valid number");
    }
    $div = 2/$n;
    echo $div;
}
catch(Exception $e){
    echo $e->getMessage(); 
}
?>