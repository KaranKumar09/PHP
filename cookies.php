<?php

echo "<h2>CREATE COOKIE IN PHP</h2>";
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
    <body>
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie named '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }               
        ?>
    </body>
</html>


//COOKIE DELETE
<?php
setcookie("user","",time()-3600,"/");
?>
<html>
    <body>
        <?php
        echo "Cookie 'user' is deleted";
        ?>
    </body>
</html> 