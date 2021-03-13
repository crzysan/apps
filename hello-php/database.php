<?php
$SERVERNAME = "localhost";
$USERNAME = "username";
$PASSWORD = "password";

// Create connection
$conn = new mysqli($SERVERNAME, $USERNAME, $PASSWORD);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
