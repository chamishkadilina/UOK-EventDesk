<?php
// Include the functions file to fetch events from the database
require 'includes/functions.php';

// Fetch all events from the database
$events = fetchEvents($conn);
$data = [];

// Prepare the event data for JSON encoding
foreach ($events as $event) {
    $data[] = [
        'id' => $event['id'], // Event ID
        'title' => $event['title'], // Event title
        'start' => $event['start_datetime'], // Event start date and time
        'end' => $event['end_datetime'] // Event end date and time
    ];
}

// Output the event data as a JSON string
echo json_encode($data);
?>
