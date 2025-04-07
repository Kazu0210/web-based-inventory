<?php
include("db.php");

function hash_password($raw_password) {
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
    return $hashed_password;
}

function verify_password($username, $str_password, $conn) {
    // get hashed password from db
    $sql = "SELECT password FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Username exists
        $stmt->close(); // Close the statement before returning
        return true;
    } else {
        // Username does not exist
        $stmt->close(); // Close the statement before returning
        return false;
    }
}

?>