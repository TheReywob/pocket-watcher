<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password Hashing Example</title>
</head>
<body>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the password from the form
        $password = $_POST["password"];

        // Hash the password using password_hash
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Store or use $hashedPassword as needed (e.g., save it in a database)
        echo "Hashed Password: " . $hashedPassword;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Hash Password">
    </form>

</body>
</html>
