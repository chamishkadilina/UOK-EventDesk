<?php
session_start();
include 'db/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $event_name = $_POST['event_name'];
    $venue = $_POST['venue'];
    $date_time = $_POST['date_time'];
    $organized_by = $_POST['organized_by'];
    $event_info = $_POST['event_info'];

    if (isset($_FILES['event_image']) && $_FILES['event_image']['error'] === 0) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['event_image']['name']);
        $uploadFile = $uploadDir . $fileName;

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        if (move_uploaded_file($_FILES['event_image']['tmp_name'], $uploadFile)) {
            $imagePath = $uploadFile;

            $sql = "INSERT INTO events (event_name, venue, date_time, organized_by, event_info, image_path)
                    VALUES ('$event_name', '$venue', '$date_time', '$organized_by', '$event_info', '$imagePath')";
            if ($conn->query($sql) === TRUE) {
                header('Location: dashboard.php');
                exit();
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h2>Add Event</h2>
        <form method="POST" action="addEvent.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="event_name">Event Name</label>
                <input type="text" class="form-control" id="event_name" name="event_name" required>
            </div>
            <div class="form-group">
                <label for="venue">Venue</label>
                <input type="text" class="form-control" id="venue" name="venue" required>
            </div>
            <div class="form-group">
                <label for="date_time">Date and Time</label>
                <input type="datetime-local" class="form-control" id="date_time" name="date_time" required>
            </div>
            <div class="form-group">
                <label for="organized_by">Organized By</label>
                <input type="text" class="form-control" id="organized_by" name="organized_by" required>
            </div>
            <div class="form-group">
                <label for="event_info">Event Information</label>
                <textarea class="form-control" id="event_info" name="event_info" required></textarea>
            </div>
            <div class="form-group">
                <label for="event_image">Event Image</label>
                <input type="file" class="form-control" id="event_image" name="event_image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Add Event</button>
        </form>
    </div>
</body>
</html>
