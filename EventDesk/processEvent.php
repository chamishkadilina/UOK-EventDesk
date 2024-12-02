<?php
include 'db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $organized_by = mysqli_real_escape_string($conn, $_POST['organized_by']);
    $event_info = mysqli_real_escape_string($conn, $_POST['event_info']);

    // Handle file upload
    if (isset($_FILES['event_image']) && $_FILES['event_image']['error'] === 0) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['event_image']['name']);
        $uploadFile = $uploadDir . $fileName;

        // Ensure uploads directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move file to the uploads directory
        if (move_uploaded_file($_FILES['event_image']['tmp_name'], $uploadFile)) {
            $imagePath = $uploadFile;

            // Insert into the database
            $sql = "INSERT INTO events (event_name, venue, date_time, organized_by, event_info) 
                    VALUES ('$event_name', '$venue', '$event_date', '$organized_by', '$event_info')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to dashboard after successful insert
                header('Location: dashboard.php');
                exit; // Always exit after a header redirect
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file uploaded.";
    }
}

$conn->close();
?>
