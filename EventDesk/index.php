<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
            /* General styling */
        .divider {
            width: 100%;
            height: 1px;
            background-color: #71706e;
            margin: 30px 0;
        }

        /* Line animation - sliding down */
        .animated-text {
            display: block;
            opacity: 0;
            transform: translateY(-20px);
            animation: slideDown 1s forwards;
        }

        /* Animation for line sliding down */
        @keyframes slideDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animated-text:nth-child(1) {
            animation-delay: 0s;
        }

        .animated-text:nth-child(2) {
            animation-delay: 0.5s;
        }

        .animated-text:nth-child(3) {
            animation-delay: 1s;
        }

        .animated-text:nth-child(4) {
            animation-delay: 1.5s;
        }

        .animated-text:nth-child(5) {
            animation-delay: 2s;
        }

        .animated-text:nth-child(6) {
            animation-delay: 2.5s;
        }

        .animated-text:nth-child(7) {
            animation-delay: 3s;
        }

        .animated-text:nth-child(8) {
            animation-delay: 3.5s;
        }

        .animated-text:nth-child(9) {
            animation-delay: 4s;
        }

        /* Wrapper to center content */
        .text-wrapper {
            font-style: italic;
            margin: 20px;
            padding: 20px;
        }

        .text-wrapper h3 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
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
        object-fit: cover;
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

        .intro {
            position: relative;
            max-width: 800px;
            margin: 20px;
            opacity: 0; /* Initially hidden */
            transform: translateX(-100px); /* Start off-screen */
            transition: opacity 1.5s ease-out, transform 1.5s ease-out;
        }

        .intro.animate {
            opacity: 1; /* Fade in */
            transform: translateX(0); /* Slide into position */
        }
       .slideshow-container {
                    position: relative;
                    width: 800px; /* Fixed width for the container */
                    height: 500px; /* Fixed height for the container */
                    margin: 20px auto; /* Center the container horizontally */
                    overflow: hidden; /* Clip larger images */
                    padding-bottom: 30px; /* Add space for the dots */
                    border-radius: 8px; /* Optional: Rounded corners */
                    background-color: #f4f4f4; /* Optional: Background color for empty space */
        }


       .slides {
             width: 100%; /* Scale the image to fit the container width */
             height: 100%; /* Scale the image to fit the container height */
             object-fit: cover; /* Ensure the image covers the entire container */
             display: none; /* Default state: hidden */
        }

       .active-slide {
             display: block; /* Display the active slide */
        }


        img {
            width: 100%;
            border-radius: 8px;
        }

        /* Dots container styles */
        .navigation-dots {
             position: relative; /* Ensure it's positioned relative to the container */
             text-align: center;
             margin-top: 10px;
             z-index: 5; /* Ensure dots are above other elements */
         }

        /* Individual dot styles */
        .dot {
           height: 15px;
           width: 15px;
           margin: 5px;
           background-color: #bbb;
           border-radius: 50%;
           display: inline-block;
           cursor: pointer;
           z-index: 10; /* Ensure dots themselves are clickable */
        }

        /* Active dot style */
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
    <div class="intro" id="intro">
        <h1>Welcome to University of Kelaniya EventDesk!</h1>
        <p>
            This website serves as the university's event calendar, where users can explore and stay updated 
            on the events happening at the University of Kelaniya. Whether it's academic seminars, cultural programs, 
            or student-led initiatives, Go to the Dashboard.
        </p>
    </div>

    <div class="page-container home">
        <!-- Slideshow Section -->
        <div class="slideshow-container">
            <img class="slides active-slide" src="assets/images/event1.png" alt="Event 1">
            <img class="slides" src="assets/images/event2.png" alt="Event 2">
            <img class="slides" src="assets/images/event3.png" alt="Event 3">
            <img class="slides" src="assets/images/event4.jpg" alt="Event 4">
            <img class="slides" src="assets/images/event5.png" alt="Event 5">
            <img class="slides" src="assets/images/event6.png" alt="Event 6">
            <img class="slides" src="assets/images/event7.png" alt="Event 7">
            <img class="slides" src="assets/images/event8.png" alt="Event 8">
          
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

    <div class="divider"></div>
    <div class="text-wrapper">
        <h3>Introduction</h3>
        <p class="animated-text">
            The University of Kelaniya EventDesk is a dynamic and comprehensive platform designed to keep students, faculty, and staff connected with the university’s vibrant calendar of events. Whether you're a student looking to participate in academic seminars, workshops, or cultural programs, or a faculty member organizing conferences, the EventDesk provides all the details you need in one centralized location.
        </p>
        <p class="animated-text">
            Our platform is more than just a calendar — it’s a hub for the university’s entire events. From student-led initiatives and academic discussions to career fairs and health awareness programs, EventDesk ensures that everyone has access to up-to-date event information. You no longer have to search through multiple sources to stay informed. Everything you need is here, neatly organized for quick and easy access.
        </p>
        <p class="animated-text">
            The website features an intuitive interface that allows users to browse events by category, date, and relevance. With real-time updates and seamless navigation, EventDesk is your one-stop destination for all the happenings at the University of Kelaniya.
        </p>
        <p class="animated-text">
            <strong>Key Features of the EventDesk:</strong>
        </p>
        <ul class="animated-text">
            <li>Event Calendar: Easily view upcoming events, lectures, seminars, and student activities.</li>
            <li>Category Filter: Sort events by type, including academic events, cultural programs, and more.</li>
            <li>Real-Time Updates: Stay up-to-date with real-time notifications and event changes.</li>
            <li>Faculty & Department Links: Quickly access faculty and department-specific events and resources.</li>
        </ul>
    </div>
    <div class="divider"></div>


   <div class="fade-in-sections">

   <!-- Section 1 -->
   <h3>Team</h3>
   <div class="fade-in-section fade-left" id="section1">
       <img src="assets/images/team/1.jpg" alt="Section 1" class="round-image">
       <div class="team-details">
           <h4>Sandaru Lashan</h4>
           <h6 class="italic-text">
               An android application developer, currently specialized in Software technology.
           </h6>
           <h6 class="italic-text">
               Passionate about creating mobile applications that efficient and more secure.
           </h6>
           <h6 class="italic-text">
               LinkedIn: <a href="https://www.linkedin.com/in/sandaru-lashan-herman" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
           </h6>
      </div>
     </div>

    <!-- Section 2 -->
    <div class="fade-in-section fade-right" id="section2">
       <img src="assets/images/team/2.jpeg" alt="Section 2" class="round-image">
       <div class="team-details">
          <h4>Chamishka Dilina</h4>
          <h6 class="italic-text">
            Currently specialized in Software technology.
          </h6>
          <h6 class="italic-text">
            Would love create creative and user-focused applications.
          </h6>
          <h6 class="italic-text">
              LinkedIn: <a href="https://www.linkedin.com/in/chamishka-dilina" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
          </h6>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="fade-in-section fade-left" id="section3">
        <img src="assets/images/team/3.jpg" alt="Section 3" class="round-image">
        <div class="team-details">
            <h4>Channa bandara</h4>
            <h6 class="italic-text">
                 Currently specialized in Software technology.
            </h6>
            <h6 class="italic-text">
               A mobile application developer, has the development skills in different areas.
            </h6>
            <h6 class="italic-text">
               LinkedIn: <a href="https://www.linkedin.com/in/channa-bandara" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
            </h6>
         </div>
     </div>

     <!-- Section 4 -->
     <div class="fade-in-section fade-right" id="section4">
         <img src="assets/images/team/4.jpeg" alt="Section 4" class="round-image">
         <div class="team-details">
             <h4>Dinuka Kasun</h4>
             <h6 class="italic-text">
                A cybersecurity specalist,penstester currently specialized in Network technology.
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
          <img src="assets/images/team/5.jpeg" alt="Section 5" class="round-image">
          <div class="team-details">
             <h4>Isuru Kavinda</h4>
             <h6 class="italic-text">
                 A network designer, currently specialized in Network Technology.
             </h6>
             <h6 class="italic-text">
                Passionate about creating network designs also UI/UX designs.
             </h6>
             <h6 class="italic-text">
                LinkedIn: <a href="https://www.linkedin.com/in/isuru-kavinda-b71348188" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
             </h6>
           </div>
     </div>

     <!-- Section 6 -->
     <div class="fade-in-section fade-right" id="section6">
          <img src="assets/images/team/6.jpeg" alt="Section 6" class="round-image">
          <div class="team-details">
             <h4>Krishan Imalka</h4>
             <h6 class="italic-text">
                 Currently specialized in Software technology.
             </h6>
             <h6 class="italic-text">
                 Passionate about python programming.
             </h6>
             <h6 class="italic-text">
                 LinkedIn: <a href="https://www.linkedin.com/in/sandaru-lashan-herman" target="_blank" class="linkedin-icon"><i class="fab fa-linkedin"></i></a>
             </h6>
         </div>
     </div>



    <?php 
    // Include the footer template
    include 'templates/footer.php'; 
    ?>

    <script>
        // Intersection Observer for Scroll Animation
        const introSection = document.getElementById('intro');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    introSection.classList.add('animate');
                } else {
                    introSection.classList.remove('animate');
                }
            });
        });

        observer.observe(introSection);

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
</body>
</html>