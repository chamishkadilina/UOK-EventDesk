<?php
// Database connection settings
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "event_desk";

// Establish connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Array of table names
$tables = [
    "management_fac",
    "science_fac",
    "social_science_fac",
    "medicine_fac",
    "humanities_fac",
    "graduate_studies_fac"
];

// Iterate over each table and retrieve data
foreach ($tables as $table) {
    echo "<h3>Data from $table:</h3>";
    
    // Query to select all data from the current table
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        // Output data as a table
        echo "<table border='1'>";
        echo "<tr>";
        // Fetch column names
        while ($fieldInfo = $result->fetch_field()) {
            echo "<th>" . htmlspecialchars($fieldInfo->name) . "</th>";
        }
        echo "</tr>";
        
        // Fetch rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data found in $table.</p>";
    }
}

$conn->close();
?>
