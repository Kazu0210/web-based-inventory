<?php
include("../includes/db.php");
include_once('../includes/hash_password.php');

function username_validation($username, $conn) {
    $sql = "SELECT username FROM user WHERE username = ?";
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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm-password'];

    // check if username exists
    if (!username_validation($username, $conn)) {
        if ($password == $confirmpassword){
            // hash password
            $hashed_password = hash_password($password);
    
            $sql = "INSERT INTO user (username, email, password) VALUE (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $hashed_password);
        
            if ($stmt->execute()) {
                header('Location: login.php');
                exit();
            } else {
                $error = "Registration failed, Please try again.";
            }
        } else {
            echo "Password is not the same";
            ?>
                <script>
                    // Redirect after 3 seconds (3000 milliseconds)
                    setTimeout(function() {
                        window.location.href = "register.php";
                    }, 3000); // 3000 ms = 3 seconds
                </script>
            <?php
        }
    } else {
        echo "Username already exists";
        ?>
            <script>
                // Redirect after 3 seconds (3000 milliseconds)
                setTimeout(function() {
                    window.location.href = "register.php"; 
                }, 3000); // 3000 ms = 3 seconds
            </script>
        <?php
    }


}

?>