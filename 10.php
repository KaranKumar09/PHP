
// $mac = "00:1A:2B:3C:4D:5E";
// if(filter_var($mac,FILTER_VALIDATE_MAC)){
//     echo "The MAC address is '$mac' is valid.";
// }   
// else{
//     echo "MAC is not valid.";
// } 
<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the MAC address input from the form
    $mac_address = htmlspecialchars($_POST['mac']);

    // Display the MAC address
    echo "<h2>Entered MAC Address:</h2>";
    echo "<p>Your MAC address is: " . $mac_address . "</p>";
}
?> 
