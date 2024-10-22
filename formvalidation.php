<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Define variables and set to empty values
    $usernameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
    $username = $email = $password = $confirmPassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate username
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required.";
        } else {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z0-9_]{3,16}$/", $username)) {
                $usernameErr = "Username must be 3-16 characters and contain only letters, numbers, and underscores.";
            }
        }

        // Validate email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required.";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format.";
            }
        }

        // Validate password
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required.";
        } else {
            $password = test_input($_POST["password"]);
            if (strlen($password) < 6) {
                $passwordErr = "Password must be at least 6 characters long.";
            }
        }

        // Validate confirm password
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Please confirm your password.";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
            if ($confirmPassword != $password) {
                $confirmPasswordErr = "Passwords do not match.";
            }
        }

        // If all fields are valid, you can proceed with further processing (e.g., saving data to a database)
        if (empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            // All fields are valid, process the data
            echo "<p>Registration successful!</p>";
        }
    }

    // Function to sanitize user input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>">
                <span class="error"><?php echo $usernameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $passwordErr; ?></span>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword; ?>">
                <span class="error"><?php echo $confirmPasswordErr; ?></span>
            </div>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
