<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Inventory System</title>
</head>
<body>
    <form action="login_process.php" method="post">
        <h1>Login</h1>
        <fieldset>
            <label for="username">Username</label>
            <input type="text" name="username" id="username-input">
        </fieldset>
        <fieldset>
            <label for="password">Password</label>
            <input type="password" name="password" id="password-input">
        </fieldset>
        <button type="submit" name="login">LOGIN</button>
    </form>

    <p>Don't have an account? <a href="register.php">Create an account</a></p>
</body>
</html>