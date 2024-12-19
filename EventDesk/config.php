<?php
// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');  // Default XAMPP username
define('DB_PASSWORD', '');      // Default XAMPP password is blank
define('DB_NAME', 'university_events');  // Your database name

// Attempt to connect to MySQL database
try {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
} catch(Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>