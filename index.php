<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: auth/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Inventory System</title>
</head>
<body>
    
</body>
</html>