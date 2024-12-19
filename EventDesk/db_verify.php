<?php
// db_verify.php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include database configuration
require_once "config.php";

echo "<h2>Database Connection Test</h2>";

// Test database connection
if ($conn) {
    echo "✅ Database connection successful<br><br>";
} else {
    die("❌ Database connection failed<br>");
}

// Verify database exists
$db_selected = mysqli_select_db($conn, 'university_events');
if (!$db_selected) {
    // Create database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS university_events";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Database 'university_events' created successfully<br>";
        mysqli_select_db($conn, 'university_events');
    } else {
        die("❌ Error creating database: " . mysqli_error($conn));
    }
}

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "✅ Users table verified/created successfully<br>";
} else {
    die("❌ Error creating users table: " . mysqli_error($conn));
}

// Create fresh admin user
$username = "admin";
$password = "test123";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Remove existing admin user
mysqli_query($conn, "DELETE FROM users WHERE username = 'admin'");

// Insert new admin user
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
    
    if(mysqli_stmt_execute($stmt)){
        echo "✅ Admin user created successfully<br><br>";
        echo "<strong>Login Credentials:</strong><br>";
        echo "Username: admin<br>";
        echo "Password: test123<br><br>";
        
        // Verify stored password
        $verify_sql = "SELECT password FROM users WHERE username = 'admin'";
        $result = mysqli_query($conn, $verify_sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $stored_hash = $row['password'];
            if (password_verify($password, $stored_hash)) {
                echo "✅ Password verification test successful<br>";
            } else {
                echo "❌ Password verification test failed<br>";
            }
        }
    } else {
        echo "❌ Error creating admin user: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        line-height: 1.6;
    }
    h2 {
        color: #333;
    }
</style>