<?php
header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'university_events';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if (isset($_GET['id'])) {
        // Fetch specific event details
        $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        $event = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($event);
    } else {
        // Get faculty filter from query parameter
        $faculty = isset($_GET['faculty']) ? $_GET['faculty'] : 'All Faculties';
        
        // Build the SQL query based on faculty filter
        if ($faculty === 'All Faculties') {
            $sql = "SELECT id, title, start_date as start, start_time as time, faculty 
                   FROM events";
            $stmt = $pdo->query($sql);
        } else {
            $sql = "SELECT id, title, start_date as start, start_time as time, faculty 
                   FROM events 
                   WHERE faculty = ? OR faculty = 'All Faculties'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$faculty]);
        }
        
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Format events for FullCalendar
        $formattedEvents = array_map(function($event) {
            return [
                'id' => $event['id'],
                'title' => $event['title'],
                'start' => $event['start'] . 'T' . $event['time'],
                'faculty' => $event['faculty']
            ];
        }, $events);
        
        echo json_encode($formattedEvents);
    }
} catch(PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>