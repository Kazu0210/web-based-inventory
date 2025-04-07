<?php
function hash_password($raw_password) {
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
    return $hashed_password;
}

?>