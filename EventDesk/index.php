<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Add inline CSS to handle layout */
        .page-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            min-height: calc(120vh - 200px); /* Adjust this value based on your header and footer height */
            padding: 20px;
            text-align: center;
        }

        .slideshow-container {
            position: relative;
            max-width: 800px;
            margin: 20px;
        }

        .slides {
            display: none;
        }

        .active-slide {
            display: block;
        }

        img {
            width: 100%;
            border-radius: 8px;
        }

        .navigation-dots {
            text-align: center;
            margin-top: 10px;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
        }

        .dot.active {
            background-color: #717171;
        }

        .links-container {
            margin-left: 30px;
            
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }

        .links-container h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 25px;
        }

        .links-container ul {
            list-style-type: none;
            padding: 0;
        }

        .links-container ul li {
            margin-bottom: 10px;
        }

        .links-container ul li a {
            text-decoration: none;
            color: #0073e6;
            font-size: 16px;
        }

        .links-container ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php 
    // Include the header and navigation bar templates
    include 'templates/header.php';
    include 'templates/navbar.php';
    ?>
    
    <br>
    <div class="page-container home">
        <!-- Slideshow Section -->
        <div class="slideshow-container">
            <img class="slides active-slide" src="assets/images/event1.png" alt="Event 1">
            <img class="slides" src="assets/images/event2.png" alt="Event 2">
            <img class="slides" src="assets/images/event3.png" alt="Event 3">
            <img class="slides" src="assets/images/event4.jpg" alt="Event 4">
            <img class="slides" src="assets/images/event5.jpg" alt="Event 5">
            <img class="slides" src="assets/images/event6.jpg" alt="Event 6">
            <img class="slides" src="assets/images/event7.jpg" alt="Event 7">
            <img class="slides" src="assets/images/event8.jpg" alt="Event 8">
            <div class="navigation-dots">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
            </div>
        </div>

        <!-- Links Section -->
        <div class="links-container">
            <h2>Faculties</h2>
            <ul>
                <li><a href="https://www.kln.ac.lk/" target="_blank">University of Kelaniya Main Website</a></li>
                <li><a href="https://fcms.kln.ac.lk/" target="_blank">Faculty of Commerce and Management</a></li>
                <li><a href="https://fct.kln.ac.lk/" target="_blank">Faculty of Computing and Technology</a></li>
                <li><a href="https://fhss.kln.ac.lk/" target="_blank">Faculty of Humanities</a></li>
                <li><a href="https://science.kln.ac.lk/" target="_blank">Faculty of Science</a></li>
                <li><a href="https://medicine.kln.ac.lk/" target="_blank">Faculty of Medicine</a></li>
                <li><a href="https://ss.kln.ac.lk/" target="_blank">Faculty of Social Sciences</a></li>
                <li><a href="https://pg.kln.ac.lk/" target="_blank">Postgraduate Studies</a></li>
            </ul>
        </div>
    </div>

    <?php 
    // Include the footer template
    include 'templates/footer.php'; 
    ?>

    <script>
        let slideIndex = 0;

        // Function to show the current slide
        function showSlides(index) {
            const slides = document.querySelectorAll('.slides');
            const dots = document.querySelectorAll('.dot');

            if (index >= slides.length) {
                slideIndex = 0;
            } else if (index < 0) {
                slideIndex = slides.length - 1;
            } else {
                slideIndex = index;
            }

            slides.forEach(slide => slide.classList.remove('active-slide'));
            dots.forEach(dot => dot.classList.remove('active'));

            slides[slideIndex].classList.add('active-slide');
            dots[slideIndex].classList.add('active');
        }

        // Function to navigate to a specific slide
        function currentSlide(index) {
            showSlides(index - 1);
        }

        // Auto slideshow
        function autoSlides() {
            showSlides(slideIndex + 1);
            setTimeout(autoSlides, 5000); // Change image every 5 seconds
        }

        // Start auto slideshow
        autoSlides();
    </script>
</body>
</html>
