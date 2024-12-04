<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP/WAMP
$password = "";     // Default password for XAMPP/WAMP
$dbname = "event_desk"; // Our database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
