<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $registration_no = htmlspecialchars($_POST['registration_no']);
    $mobile_no = htmlspecialchars($_POST['mobile_no']);
    $skills = isset($_POST['skills']) ? $_POST['skills'] : [];

    // Display the details
    echo "<h2>Registration Details:</h2>";
    echo "<strong>Name:</strong> " . $name . "<br>";
    echo "<strong>Email:</strong> " . $email . "<br>";
    echo "<strong>Registration No:</strong> " . $registration_no . "<br>";
    echo "<strong>Mobile No:</strong> " . $mobile_no . "<br>";
    echo "<strong>Skills:</strong> " . (!empty($skills) ? implode(', ', $skills) : "No skills selected") . "<br>";
} else {
    echo "Form not submitted.";
}
?>
