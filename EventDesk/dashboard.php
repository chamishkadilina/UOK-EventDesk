<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University of Kelaniya EventDesk</title>
    
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>

    /* Style for the faculty top bar */
.faculty-top-bar {
    background-color: #333; /* Background color of the bar */
    padding: 10px 0; /* Padding around the bar */
}

.faculty-top-bar > ul {
    list-style-type: none; /* Removes bullet points from the list */
    margin: 0;
    padding: 0;
    display: flex; /* Displays the list items horizontally */
    justify-content: center; /* Centers the list items */
}

.faculty-top-bar > ul > li {
    margin-right: 20px; /* Space between the list items */
}

/* Remove the margin from the last list item */
.faculty-top-bar > ul > li:last-child {
    margin-right: 0;
}

/* Style for each faculty box */
.faculty-top-bar > ul > li > a {
    color: white !important; /* Text color */
    text-decoration: none !important; /* Removes underline */
    font-size: 16px !important; /* Font size */
    padding: 10px 20px !important; /* Padding around the text */
    border-radius: 5px !important; /* Rounded corners for the boxes */
    background-color: white;  /* White background color */
    color: #333; /* Dark text color */
    display: inline-block; /* Make the link appear as a block */
    width: auto;
    text-align: center;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

/* Hover effect for list items */
.faculty-top-bar > ul > li > a:hover {
    background-color: #ADD8E6 !important; /* Light blue background on hover */
    color: #333 !important; /* Dark text color on hover */
}


        .main-content {
            min-height: calc(100vh - 200px);
            padding: 2rem 0;
        }

        .page-title {
            margin: 0 1.5rem 2rem;
            font-size: 1.75rem;
            font-weight: 600;
        }

        .calendar-section {
            padding: 0 1.5rem;
        }

        .calendar-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        #calendar {
            width: 100%;
            height: auto;
        }

        .event-details-container {
            position: sticky;
            top: 2rem;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        #eventDetails {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1.5rem;
        }

        #initialMessage {
            text-align: center;
            padding: 3rem 1.5rem;
            color: #666;
        }

        .detail-label {
            color: #444;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .detail-value {
            margin-bottom: 1.5rem;
            color: #333;
            line-height: 1.6;
        }

        .fc-event {
            background-color: #3498db;
            border-color: #3498db;
            cursor: pointer;
            transition: all 0.2s ease;
            border-radius: 4px;
        }

        .fc-event:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: scale(1.06);
        }

        @media (max-width: 992px) {
            .calendar-section {
                padding: 0 1rem;
            }
            
            .calendar-container {
                padding: 1rem;
            }

            #eventDetails {
                margin-top: 2rem;
            }
        }
        
    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <?php include 'templates/navbar.php'; ?>

    <div class="main-content">
        <div class="container-fluid">
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

            <h3 class="page-title">Upcoming Events 🗓️</h3>
            
            <div class="calendar-section">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="calendar-container">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="event-details-container">
                            <div id="eventDetails">
                                <div id="initialMessage">
                                    <h4>Welcome to University Events Calendar</h4>
                                    <p class="mt-3">👆 Click on any event in the calendar to view its details here.</p>
                                </div>
                                
                                <div id="eventContent" class="card-body" style="display: none;">
                                    <h3 class="card-title mb-4" id="eventTitle"></h3>
                                    
                                    <div class="detail-label">Date</div>
                                    <div class="detail-value" id="eventDate"></div>
                                    
                                    <div class="detail-label">Time</div>
                                    <div class="detail-value" id="eventTime"></div>
                                    
                                    <div class="detail-label">Venue</div>
                                    <div class="detail-value" id="eventVenue"></div>
                                    
                                    <div class="detail-label">Description</div>
                                    <div class="detail-value" id="eventDescription"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var lastClickedEvent = null;
            
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay'
                },
                events: 'get_events.php',
                eventClick: function(info) {
                    if (lastClickedEvent) {
                        lastClickedEvent.el.style.backgroundColor = '#3498db';
                    }
                    
                    info.el.style.backgroundColor = '#2c3e50';
                    lastClickedEvent = info;
                    
                    fetch('get_events.php?id=' + info.event.id)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('initialMessage').style.display = 'none';
                            document.getElementById('eventContent').style.display = 'block';
                            
                            document.getElementById('eventTitle').textContent = data.title;
                            document.getElementById('eventDate').textContent = data.start_date;
                            document.getElementById('eventTime').textContent = data.start_time;
                            document.getElementById('eventVenue').textContent = data.venue;
                            document.getElementById('eventDescription').textContent = data.description;
                            
                            if (window.innerWidth < 992) {
                                document.getElementById('eventDetails').scrollIntoView({ 
                                    behavior: 'smooth' 
                                });
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            });
            
            calendar.render();
        });
    </script>
</body>
</html>