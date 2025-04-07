<?php
include("../includes/db.php");
include_once('../includes/hash_password.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (verify_password($username, $password, $conn)) {
        echo "Login Success";
    }
}
?>