<?php
// Include the database connection
include 'db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - University Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        .calendar { margin: 20px auto; max-width: 800px; }
        .footer { background: maroon; color: white; padding: 10px; text-align: center; }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container calendar">
        <h2 class="text-center my-4">Upcoming Events</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM events ORDER BY date_time ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['event_name']); ?></td>
                    <td><?= date("d M Y", strtotime($row['date_time'])); ?></td>
                    <td><?= htmlspecialchars($row['details']); ?></td>
                </tr>
                <?php
                    endwhile;
                else:
                ?>
                <tr>
                    <td colspan="3">No events found</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <footer class="footer">
        <p>©2024-2025 University Event Desk. Faculty of Computing and Technology, University of Kelaniya.</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
