
# 🎓 University of Kelaniya Event Details Website
---
SQL DB code
```
-- Create and use the database
CREATE DATABASE university_events;
USE university_events;

-- Create events table with all required columns
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    start_time TIME NOT NULL,
    venue VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    faculty VARCHAR(100) NOT NULL DEFAULT 'All Faculties'
);

-- Insert all university events
INSERT INTO events (title, start_date, start_time, venue, description, faculty) VALUES
('University Orientation Day', '2024-01-15', '09:00:00', 'Main Auditorium', 
 'Welcome orientation for new students with campus tour and department introductions.', 'All Faculties'),
('Science Fair 2024', '2025-02-01', '10:00:00', 'Science Building', 
 'Annual science fair showcasing student research projects and innovations.', 'Computing & Technology'),
('Career Fair', '2025-02-15', '11:00:00', 'Student Center', 
 'Meet representatives from top companies and explore career opportunities.', 'All Faculties'),
('Alumni Meet', '2025-03-01', '14:00:00', 'Conference Hall', 
 'Annual alumni gathering with networking opportunities and guest speeches.', 'All Faculties'),
('Sports Day', '2025-03-15', '08:00:00', 'University Stadium', 
 'Annual sports competition featuring various athletic events.', 'Social Sciences'),
('Programming Contest', '2024-04-01', '09:30:00', 'Computer Lab', 
 'Coding competition for students to showcase their programming skills.', 'Medicine'),
('Art Exhibition', '2025-04-15', '13:00:00', 'Art Gallery', 
 'Student art showcase featuring paintings, sculptures, and digital art.', 'Commerce & Management'),
('Music Festival', '2025-05-01', '16:00:00', 'Open Air Theater', 
 'Annual music festival featuring student bands and professional performers.', 'Computing & Technology'),
('Research Symposium', '2025-05-15', '10:00:00', 'Research Center', 
 'Presentation of research papers by faculty and graduate students.', 'All Faculties'),
('Graduation Ceremony', '2025-06-01', '09:00:00', 'Main Stadium', 
 'Annual graduation ceremony for the Class of 2024.', 'Computing & Technology'),
('Technology Workshop', '2025-06-15', '11:00:00', 'Tech Hub', 
 'Hands-on workshop on emerging technologies and their applications.', 'Commerce & Management'),
('Literary Festival', '2025-07-01', '14:00:00', 'Library Complex', 
 'Celebration of literature with book readings and author discussions.', 'Medicine'),
('Environmental Day', '2025-07-15', '09:00:00', 'Botanical Garden', 
 'Activities promoting environmental awareness and sustainability.', 'Computing & Technology'),
('Innovation Summit', '2025-08-01', '10:00:00', 'Innovation Center', 
 'Showcase of innovative projects and startup ideas by students.', 'Social Sciences'),
('Cultural Day', '2025-08-15', '12:00:00', 'Cultural Center', 
 'Celebration of diverse cultures through performances and exhibitions.', 'Commerce & Management'),
('Math Olympiad', '2025-09-01', '09:00:00', 'Mathematics Building', 
 'Mathematics competition for undergraduate students.', 'Computing & Technology'),
('Debate Competition', '2025-09-15', '13:00:00', 'Debate Hall', 
 'Inter-university debate competition on contemporary topics.', 'All Faculties'),
('Film Festival', '2025-10-01', '15:00:00', 'Media Center', 
 'Screening of student-made films and documentaries.', 'Commerce & Management'),
('Robotics Exhibition', '2025-10-15', '10:00:00', 'Engineering Block', 
 'Display of robotic projects and automation solutions.', 'Commerce & Management'),
('Year-End Concert', '2025-11-01', '18:00:00', 'Concert Hall', 
 'Grand musical performance featuring university orchestra and choir.', 'Commerce & Management');
```
> **Crafted with ❤️ by University of Kelaniya Students**  

Welcome to the official repository for the **University of Kelaniya EventDesk Website**!  
This platform is designed to showcase upcoming events, parties, and university-branded offerings for students, providing easy access to all event-related details.


## 🌟 Features

- **🏠 Home Page**: Explore upcoming events and announcements at a glance.
- **📊 Dashboard View**: Dive into detailed event categories and manage event information.
- **ℹ️ About Page**: Learn more about the website and its purpose.
- **📱 Responsive Design**: Optimized for desktops and mobile devices.

---

## 🛠️ Tech Stack
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-F37626?style=flat-square&logo=xampp&logoColor=white)


- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (using XAMPP) and MySQL
- **Development Tools**: XAMPP for local server setup

---

## 🚀 Getting Started

### Prerequisites

- Install [XAMPP](https://www.apachefriends.org/index.html) on your local machine.

### Installation Steps

1. **Clone the Repository**:  
   ```bash
   git clone https://github.com/chamishkadilina/UOK-EventDesk.git
   ```

2. **Move Files to XAMPP's `htdocs` Directory**:  
   Copy the project folder into the `htdocs` directory in your XAMPP installation path:  
   ```
   C:/xampp/htdocs/
   ```

3. **Start XAMPP Services**:  
   - Open the XAMPP Control Panel and start **Apache** and **MySQL**.

4. **Set Up the Database**:  
   - Access [phpMyAdmin](http://localhost/phpmyadmin/) in your browser.
   - Create a database named `EventDesk` and import the provided SQL file.

5. **Access the Website**:  
   Navigate to [http://localhost/kelaniya-event-website/](http://localhost/UOK-EventDesk/) in your browser.

---

## 📂 Project Structure

```
kelaniya-event-website/
├── index.php              # Home page
├── dashboard.php          # Dashboard page
├── about.php              # About page
├── assets/                # Static files (CSS, JS, Images)
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── images/            # Images for the website
├── db/                    # Database-related scripts
│   └── connection.php     # Database connection file
```

---

## 🤝 Contributing

We welcome contributions! To contribute:  
1. Fork the repository.  
2. Create a new branch: `git checkout -b feature-name`.  
3. Make your changes and commit: `git commit -m "Add feature"`.  
4. Push to the branch: `git push origin feature-name`.  
5. Create a pull request.

---

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

