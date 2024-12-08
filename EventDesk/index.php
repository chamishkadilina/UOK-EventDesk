<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Add inline CSS to handle the blank space */
        .page-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: calc(120vh - 200px); /* Adjust this value based on your header and footer height */
            padding: 20px;
            text-align: center;
        }

        .page-container h1 {
            color: #555;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php 
    // Include the header and navigation bar templates
    include 'templates/header.php';
    include 'templates/navbar.php';
    ?>

    <div class="page-container home">
        <h1>This is Home Page</h1>
        <p>Please add HomePage content!.</p>
    </div>

    <?php 
    // Include the footer template
    include 'templates/footer.php'; 
    ?>

    <script src="assets/js/script.js"></script>
</body>
</html>
