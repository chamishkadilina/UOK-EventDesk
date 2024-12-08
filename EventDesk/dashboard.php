<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.1/main.min.css" rel="stylesheet">
</head>
<body>
    <?php 
    include 'templates/header.php';
    include 'templates/navbar.php';
    include 'includes/functions.php'; 
    ?>

    <div class="page-container home">
        <div class="faculty-top-bar">
            <ul>
                <li><a href="#">All Faculties</a></li>
                <li><a href="#">Faculty of Commerce & Management Studies</a></li>
                <li><a href="#">Faculty of Science</a></li>
                <li><a href="#">Faculty of Social Sciences</a></li>
                <li><a href="#">Faculty of Computing & Technology</a></li>
                <li><a href="#">Faculty of Medicine</a></li>
                <li><a href="#">Faculty of Humanities</a></li>
            </ul>
        </div>
        <h3 style="padding-left: 20px;">Upcoming Events 🗓️</h3>
        <div class="flex-container">
            <div class="calendar-container">
                <div id="calendar"></div>
            </div>
            <div class="empty-right-container">
                <p>Empty content here</p>
            </div>
        </div>
    </div>

    <?php 
    include 'templates/footer.php'; 
    ?>

    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/main.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
