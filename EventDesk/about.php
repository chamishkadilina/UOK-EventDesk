<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->

    <style>
        /* Team Section Styles */
        .team-details h6 {
            margin-bottom: 10px; /* Add space between each line */
        }

        /* Italic text style */
        .italic-text {
            font-style: italic;
            color: #555; /* Lighter color for the italicized text */
            font-size: 14px;
        }

        /* LinkedIn Icon styling */
        .linkedin-icon {
            color: #0077b5; /* LinkedIn's brand color */
            font-size: 20px;
            margin-left: 5px;
        }

        .linkedin-icon:hover {
            color: #005c8e; /* Darker LinkedIn color on hover */
        }

        .fade-in-sections {
            display: flex;
            flex-direction: column;
            gap: 40px; /* Space between sections */
            padding: 20px;
        }

        .fade-in-section {
            display: flex;
            align-items: center;
            opacity: 0;
            transform: translateX(50px); /* Default initial position for fade-right */
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        /* Fade in from left */
        .fade-in-section.fade-left {
            flex-direction: row; /* Default order for left-aligned */
            transform: translateX(-50px); /* Initial position for fade-left */
        }

        /* Fade in from right */
        .fade-in-section.fade-right {
            flex-direction: row-reverse; /* Reverse order for right-aligned */
            transform: translateX(50px); /* Initial position for fade-right */
        }

        .fade-in-section.animate {
            opacity: 1;
            transform: translateX(0);
        }

        /* Horizontal Divider */
        .divider {
            width: 100%;
            height: 1px;
            background-color: #71706e;
            margin: 30px 0;
        }

        .round-image {
            width: 150px;
            height: 150px;
            object-fit: contain; /* Ensures image is contained within the div */
            border-radius: 50%;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .fade-in-section p {
            font-size: 14px;
            color: #333;
            max-width: 300px;
            text-align: justify;
        }

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

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .fade-in-section {
                flex-direction: column;
                text-align: center;
            }

            .fade-in-section img {
                margin-bottom: 20px;
            }
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
        <h2>Meet Our Team</h2>
        <div class="fade-in-sections">

            <!-- Section 1 -->
            <div class="fade-in-section fade-left" id="section1">
                <img src="assets/images/team/1.jpg" alt="Sandaru Lashan" class="round-image" loading="lazy">
                <div class="team-details">
                    <h4>Sandaru Lashan</h4>
                    <h6 class="italic-text">
                        An android application developer, currently specialized in Software technology.
                    </h6>
                    <h6 class="italic-text">
                        Passionate about creating mobile applications that are efficient and more secure.
                    </h6>
                    <h6 class="italic-text">
                        LinkedIn: <a href="https://www.linkedin.com/in/sandaru-lashan-herman" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
                    </h6>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="fade-in-section fade-right" id="section2">
                <img src="assets/images/team/2.jpeg" alt="Chamishka Dilina" class="round-image" loading="lazy">
                <div class="team-details">
                    <h4>Chamishka Dilina</h4>
                    <h6 class="italic-text">
                        Currently specialized in Software technology.
                    </h6>
                    <h6 class="italic-text">
                        Would love to create creative and user-focused applications.
                    </h6>
                    <h6 class="italic-text">
                        LinkedIn: <a href="https://www.linkedin.com/in/chamishka-dilina" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
                    </h6>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="fade-in-section fade-left" id="section3">
                <img src="assets/images/team/3.jpg" alt="Channa Bandara" class="round-image" loading="lazy">
                <div class="team-details">
                    <h4>Channa Bandara</h4>
                    <h6 class="italic-text">
                        Currently specialized in Software technology.
                    </h6>
                    <h6 class="italic-text">
                        A mobile application developer, has development skills in various areas.
                    </h6>
                    <h6 class="italic-text">
                        LinkedIn: <a href="https://www.linkedin.com/in/channa-bandara" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
                    </h6>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="fade-in-section fade-right" id="section4">
                <img src="assets/images/team/4.jpeg" alt="Dinuka Kasun" class="round-image" loading="lazy">
                <div class="team-details">
                    <h4>Dinuka Kasun</h4>
                    <h6 class="italic-text">
                        A cybersecurity specialist, pen tester currently specialized in Network technology.
                    </h6>
                    <h6 class="italic-text">
                        Passionate about security, developing exploits.
                    </h6>
                    <h6 class="italic-text">
                        LinkedIn: <a href="https://www.linkedin.com/in/dinuka-kasun-a05210323" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
                    </h6>
                </div>
            </div>

            <!-- Section 5 -->
            <div class="fade-in-section fade-left" id="section5">
                <img src="assets/images/team/5.jpeg" alt="Isuru Kavinda" class="round-image" loading="lazy">
                <div class="team-details">
                    <h4>Isuru Kavinda</h4>
                    <h6 class="italic-text">
                        A network designer, currently specialized in Network Technology.
                    </h6>
                    <h6 class="italic-text">
                        Passionate about creating network designs and UI/UX designs.
                    </h6>
                    <h6 class="italic-text">
                        LinkedIn: <a href="https://www.linkedin.com/in/isuru-kavinda-b71348188" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
                    </h6>
                </div>
            </div>

            <!-- Section 6 -->
            <div class="fade-in-section fade-right" id="section6">
                <img src="assets/images/team/6.jpeg" alt="Krishan Imalka" class="round-image" loading="lazy">
                <div class="team-details">
                    <h4>Krishan Imalka</h4>
                    <h6 class="italic-text">
                        Currently specialized in Software technology.
                    </h6>
                    <h6 class="italic-text">
                        Passionate about Python programming.
                    </h6>
                    <h6 class="italic-text">
                        LinkedIn: <a href="https://www.linkedin.com/in/sandaru-lashan-herman" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
                    </h6>
                </div>
            </div>

        </div>
    </div>

    <?php 
    // Include the footer template
    include 'templates/footer.php'; 
    ?>

    <script>
        // Intersection Observer for fade-in sections
        const fadeInSections = document.querySelectorAll('.fade-in-section');
        const sectionObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        });

        fadeInSections.forEach(section => {
            sectionObserver.observe(section);
        });
    </script>

    <script src="assets/js/script.js"></script>
</body>

</html>
