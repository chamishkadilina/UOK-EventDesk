<?php
// Include the database connection
require 'db.php';

// Function to fetch all events from the database
function fetchEvents($conn) {
    // Prepare and execute the SQL statement to select all events
    $stmt = $conn->prepare("SELECT * FROM events");
    $stmt->execute();

    // Return the fetched events as an associative array
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
