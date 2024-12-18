<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event 1</title>
    <style>
        .page-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
            margin-left: auto; /* Centers the container */
            margin-right: auto; /* Centers the container */
            width: 80%; /* Sets the container width to 80% of the page */
        }

        .title {
            text-align: center; /* Centers the heading */
            margin-top: 30px; /* Adds top margin */
            margin-bottom: 20px; /* Adds bottom margin */
            font-family: 'Roboto', sans-serif; /* Adds a custom font */
            font-size: 48px; /* Adjust font size as needed */
            font-weight: bold; /* Makes the heading bold */
        }

        .image {
            display: block;
            margin: 0 auto; /* Centers the image */
            margin-bottom: 20px; /* Adds space below the image */
            width: 80%; /* Sets the image width to 80% of the container */
            max-width: 600px; /* Sets a maximum width for the image */
        }

        .event {
            margin-left: auto; /* Ensures the content has equal margins on both sides */
            margin-right: auto;
            text-align: justify; /* Justifies the content */
            width: 100%; /* Makes sure the content takes up the full width of the container */
        }

        .event p {
            line-height: 1.8; /* Increases spacing between lines for better readability */
            font-size: 18px;
        }

        /* Style for the image grid */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 columns */
            gap: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%; /* Ensures the grid takes the full width */
        }

        .image-grid img {
            width: 100%; /* Ensures all images fill the grid cell */
            height: 250px; /* Fixes the height of all images */
            object-fit: cover; /* Ensures the image covers the box without distortion */
            border-radius: 8px; /* Adds rounded corners */
            transition: transform 0.3s ease; /* Smooth transition for hover effect */
        }

        .image-grid img:hover {
            transform: scale(1.05); /* Slight zoom effect on hover */
        }
    </style>
</head>
<body>

<?php 
    // Include the header and navigation bar templates
    include 'templates/header.php';
    include 'templates/navbar.php';
?>

<div class="title">
    <p>
        Workshop on Physics and ICT for A/L Science for Technology (SFT) Teachers
    </p>
</div>

<br>

<div class="page-container home">
    <img src="assets/images/event11.jpg" alt="Event 1 Image" class="image">

<br>  
    <div class="event">
        <p>
            Workshop on Physics and ICT for A/L Science for Technology (SFT) teachers, organized by the Committee for the Popularization of Science (CPS) of the Sri Lanka Association for the Advancement of Science (SLAAS), in collaboration with the Faculty of Computing and Technology, University of Kelaniya and the Education Department of the Western Province, was held on the 4th of November 2024 at the Auditorium of the Faculty of Computing and Technology (FCT), University of Kelaniya.

            Prof. Udeni Nawagamuwa, General President Elect for 2025, Sri Lanka Association for the Advancement of Science (SLAAS), graced the event as the chief guest, while other esteemed guests included Dr. Chamli Pushpakumara, Dean of the Faculty of Computing and Technology, and W. A. S. Deshapriya, Deputy Director of Education -Science, Department of Education, Western Province.

            Around 60 SFT teachers from the Western Province participated in the event. During the workshop, teachers had the opportunity to conduct physics experiments related to the A/L SFT syllabus in the FCT Physics Laboratory. At the same time, a session focused on the ICT component of the SFT syllabus was conducted in the FCT computer lab. Participants expressed great satisfaction with both sessions, and there were numerous requests for more workshops aimed at teachers and students in the technology stream.

            Additionally, the event witnessed the participation of the academic and non-academic staff of the Faculty of Computing and Technology, University of Kelaniya.
        </p>
    </div>

    <!-- Image Grid Section -->
    <div class="image-grid">
        <img src="assets/images/event12.jpg" alt="Image 1">
        <img src="assets/images/event13.jpg" alt="Image 2">
        <img src="assets/images/event14.jpg" alt="Image 3">
        <img src="assets/images/event15.jpg" alt="Image 4">
    </div>

</div>

<?php 
    // Include the footer template
    include 'templates/footer.php'; 
?>

<script src="assets/js/script.js"></script>
</body>
</html>
