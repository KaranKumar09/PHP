<?php
function static_var(){
    static $num1 = 2;
    $num2 = 3;
    $num1++;
    $num2++;
    echo "Static: ".$num1."</br>";
    echo "Non-Static: ".$num2."</br>";

}
static_var();
static_var();
static_var();
static_var();
?>
