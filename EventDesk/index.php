<?php include 'db/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body { font-family: Georgia, serif; background-color: #f9f9f9; height: 100%; margin: 0; display: flex; flex-direction: column; }
        .footer { background: maroon; color: white; padding: 10px; text-align: center; }
        .content { flex: 1; }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center">Welcome to the University of Kelaniya Event Portal</h1>
        <p class="text-center">Explore upcoming events and stay updated!</p>
    </div>

    <footer class="footer">
        <p>©2024-2025 University Event Desk. Faculty of Computing and Technology, University of Kelaniya.</p>
    </footer>
</body>
</html>
