<?php
$host = 'localhost';     
$dbname = 'inventory';   
$username = 'root';      
$password = '';           

// Create a new connection to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>