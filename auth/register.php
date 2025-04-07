<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Inventory System</title>
</head>
<body>
    <form action="register_process.php" method="post">
        <h1>REGISTRATION</h1>
        <fieldset>
            <label for="username">Username</label>
            <input type="text" name="username" id="username-input" required>
        </fieldset>

        <fieldset>
            <label for="email">Email</label>
            <input type="email" name="email" id="email-input" required>
        </fieldset>

        <fieldset>
            <label for="password">Password</label>
            <input type="password" name="password" id="password-input" required>
        </fieldset>

        <fieldset>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password-input" required>
        </fieldset>

        <button type="submit" name="register">REGISTER</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>