<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Events Calendar</title>
    
    <!-- Add required FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Your existing styles -->
    <style>
        /* Your existing CSS remains the same */
        :root {
            --primary-color: #631010;
            --secondary-color: #e89920;
            --primary-light: #8a1c1c;
            --secondary-light: #ffa832;
            --bg-light: #fff9f2;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        /* Faculty styles */
        .faculty-top-bar {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(99, 16, 16, 0.08);
        }

        .faculty-top-bar ul {
            list-style-type: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 12px;
            margin: 0;
            padding: 0;
        }

        .faculty-top-bar ul li a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 500;
            padding: 12px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: block;
            text-align: center;
            background-color: #fff;
            border: 1px solid rgba(99, 16, 16, 0.1);
        }

        .faculty-top-bar ul li a:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(99, 16, 16, 0.15);
        }

        .main-content {
            min-height: calc(100vh - 200px);
            padding: 2rem 0;
        }

        .page-title {
            margin: 0 1.5rem 2rem;
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .calendar-section {
            padding: 0 1.5rem;
        }

        .calendar-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(99, 16, 16, 0.08);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .event-details-container {
            position: sticky;
            top: 2rem;
        }

        #eventDetails {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(99, 16, 16, 0.08);
            padding: 1.5rem;
        }

        #initialMessage {
            text-align: center;
            padding: 3rem 1.5rem;
            color: var(--primary-color);
        }

        #initialMessage h4 {
            color: var(--primary-color);
            font-weight: 600;
        }

        .detail-label {
            color: var(--secondary-color);
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
            padding: 10px;
            background-color: var(--bg-light);
            border-radius: 6px;
        }

        /* FullCalendar Customization */
        .fc {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        .fc-button-primary {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            transition: all 0.3s ease;
        }

        .fc-button-primary:hover {
            background-color: var(--primary-light) !important;
            border-color: var(--primary-light) !important;
        }

        /* Override default FullCalendar event styles */
        .fc .fc-event, 
        .fc .fc-event-dot {
            background-color: var(--secondary-color) !important;
            border-color: var(--secondary-color) !important;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 6px;
            padding: 4px;
        }

        .fc .fc-event:hover {
            background-color: var(--secondary-light) !important;
            border-color: var(--secondary-light) !important;
            transform: scale(1.02);
        }

        /* Selected event style */
        .fc .fc-event.selected-event {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }

        /* Hide time from event title */
        .fc-event-title-container {
            text-align: center;
        }

        .fc-event-time {
            display: none !important;
        }

        .fc-daygrid-day:hover {
            background-color: var(--bg-light);
        }

        .fc-day-today {
            background-color: rgba(232, 153, 32, 0.1) !important;
        }

        .fc-toolbar-title {
            color: var(--primary-color);
            font-weight: 600;
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

            .faculty-top-bar ul {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
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
                <ul id="facultyFilter">
                    <li><a href="#" data-faculty="All Faculties" class="active">All Faculties</a></li>
                    <li><a href="#" data-faculty="Commerce & Management">Commerce & Management</a></li>
                    <li><a href="#" data-faculty="Science">Science</a></li>
                    <li><a href="#" data-faculty="Social Sciences">Social Sciences</a></li>
                    <li><a href="#" data-faculty="Computing & Technology">Computing & Technology</a></li>
                    <li><a href="#" data-faculty="Medicine">Medicine</a></li>
                    <li><a href="#" data-faculty="Humanities">Humanities</a></li>
                </ul>
            </div>

            <h3 class="page-title">
                <span>Upcoming Events</span>
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
            </h3>
            
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
                                
                                <div id="eventContent" style="display: none;">
                                    <h3 class="card-title mb-4" id="eventTitle" style="color: var(--primary-color); font-weight: 600;"></h3>
                                    
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

    <!-- Add required JavaScript libraries -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var lastClickedEvent = null;
            var currentFaculty = 'All Faculties';
            
            // Initialize calendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay'
                },
                events: {
                    url: 'get_events.php',
                    extraParams: function() {
                        return {
                            faculty: currentFaculty
                        };
                    }
                },
                displayEventTime: false,
                eventDisplay: 'block',
                height: 'auto', // Add this to ensure proper height
                eventDidMount: function(info) {
                    info.el.style.backgroundColor = 'var(--secondary-color)';
                    info.el.style.borderColor = 'var(--secondary-color)';
                    
                    // Add faculty badge to event
                    const eventEl = info.el.getElementsByClassName('fc-event-title')[0];
                    const facultyBadge = document.createElement('div');
                    facultyBadge.className = 'event-faculty-badge';
                    facultyBadge.textContent = info.event.extendedProps.faculty;
                    eventEl.appendChild(facultyBadge);
                },
                eventClick: function(info) {
                    if (lastClickedEvent) {
                        lastClickedEvent.el.classList.remove('selected-event');
                    }
                    
                    info.el.classList.add('selected-event');
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
            
            // Handle faculty filter clicks
            document.getElementById('facultyFilter').addEventListener('click', function(e) {
                e.preventDefault();
                
                if (e.target.tagName === 'A') {
                    // Update active state
                    document.querySelectorAll('#facultyFilter a').forEach(link => {
                        link.classList.remove('active');
                    });
                    e.target.classList.add('active');
                    
                    // Update current faculty and refresh events
                    currentFaculty = e.target.dataset.faculty;
                    calendar.refetchEvents();
                    
                    // Reset event details panel
                    document.getElementById('initialMessage').style.display = 'block';
                    document.getElementById('eventContent').style.display = 'none';
                    if (lastClickedEvent) {
                        lastClickedEvent.el.classList.remove('selected-event');
                        lastClickedEvent = null;
                    }
                }
            });
        });
    </script>
</body>
</html>