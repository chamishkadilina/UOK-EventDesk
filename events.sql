-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `faculty` varchar(100) NOT NULL DEFAULT 'All Faculties'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_date`, `start_time`, `venue`, `description`, `faculty`) VALUES
(1, 'University Orientation Day', '2024-01-15', '09:00:00', 'Main Auditorium', 'Welcome orientation for new students with campus tour and department introductions.', 'All Faculties'),
(2, 'Science Fair 2024', '2025-02-01', '10:00:00', 'Science Building', 'Annual science fair showcasing student research projects and innovations.', 'Computing & Technology'),
(3, 'Career Fair', '2025-02-15', '11:00:00', 'Student Center', 'Meet representatives from top companies and explore career opportunities.', 'All Faculties'),
(4, 'Alumni Meet', '2025-03-01', '14:00:00', 'Conference Hall', 'Annual alumni gathering with networking opportunities and guest speeches.', 'All Faculties'),
(5, 'Sports Day', '2025-03-15', '08:00:00', 'University Stadium', 'Annual sports competition featuring various athletic events.', 'Social Sciences'),
(6, 'Workshop for A/L Science for teachers', '2024-11-12', '09:30:00', 'Computer Lab', 'Workshop on Physics and ICT for A/L Science for Technology (SFT) teachers, organized by the Committee for the Popularization of Science (CPS) of the Sri Lanka Association for the Advancement of Science (SLAAS)', 'Computing & Technology'),
(7, 'Art Exhibition', '2025-04-15', '13:00:00', 'Art Gallery', 'Student art showcase featuring paintings, sculptures, and digital art.', 'Commerce & Management'),
(8, 'Music Festival', '2025-05-01', '16:00:00', 'Open Air Theater', 'Annual music festival featuring student bands and professional performers.', 'Computing & Technology'),
(9, 'Research Symposium', '2025-05-15', '10:00:00', 'Research Center', 'Presentation of research papers by faculty and graduate students.', 'All Faculties'),
(10, 'Graduation Ceremony', '2025-06-01', '09:00:00', 'Main Stadium', 'Annual graduation ceremony for the Class of 2024.', 'Computing & Technology'),
(11, 'Technology Workshop', '2025-06-15', '11:00:00', 'Tech Hub', 'Hands-on workshop on emerging technologies and their applications.', 'Commerce & Management'),
(12, 'Literary Festival', '2025-07-01', '14:00:00', 'Library Complex', 'Celebration of literature with book readings and author discussions.', 'Medicine'),
(13, 'Environmental Day', '2025-07-15', '09:00:00', 'Botanical Garden', 'Activities promoting environmental awareness and sustainability.', 'Computing & Technology'),
(14, 'Innovation Summit', '2025-08-01', '10:00:00', 'Innovation Center', 'Showcase of innovative projects and startup ideas by students.', 'Social Sciences'),
(15, 'Cultural Day', '2025-08-15', '12:00:00', 'Cultural Center', 'Celebration of diverse cultures through performances and exhibitions.', 'Commerce & Management'),
(16, 'Math Olympiad', '2025-09-01', '09:00:00', 'Mathematics Building', 'Mathematics competition for undergraduate students.', 'Computing & Technology'),
(17, 'Debate Competition', '2025-09-15', '13:00:00', 'Debate Hall', 'Inter-university debate competition on contemporary topics.', 'All Faculties'),
(18, 'Film Festival', '2025-10-01', '15:00:00', 'Media Center', 'Screening of student-made films and documentaries.', 'Commerce & Management'),
(19, 'Robotics Exhibition', '2025-10-15', '10:00:00', 'Engineering Block', 'Display of robotic projects and automation solutions.', 'Commerce & Management'),
(20, 'Year-End Concert', '2025-11-01', '18:00:00', 'Concert Hall', 'Grand musical performance featuring university orchestra and choir.', 'Commerce & Management'),
(21, 'Business Analytics Workshop', '2025-11-15', '09:00:00', 'Business School', 'Workshop on data analytics tools and business intelligence.', 'Commerce & Management'),
(22, 'Medical Conference', '2025-11-30', '08:30:00', 'Medical Center', 'International conference on recent advances in medicine.', 'Medicine'),
(23, 'AI Symposium', '2025-12-05', '10:00:00', 'Tech Center', 'Discussion on artificial intelligence and its impact on society.', 'Computing & Technology'),
(24, 'Winter Music Concert', '2025-12-15', '17:00:00', 'Music Hall', 'Seasonal concert featuring classical and contemporary music.', 'All Faculties'),
(25, 'Entrepreneurship Summit', '2026-01-10', '09:30:00', 'Business Center', 'Summit focusing on startup ecosystem and entrepreneurship.', 'Commerce & Management'),
(26, 'Psychology Conference', '2026-01-20', '10:00:00', 'Psychology Department', 'Conference on behavioral psychology and mental health.', 'Social Sciences'),
(27, 'Digital Art Exhibition', '2026-02-05', '11:00:00', 'Digital Studio', 'Exhibition of digital artworks and multimedia installations.', 'Computing & Technology'),
(28, 'Leadership Workshop', '2026-02-20', '09:00:00', 'Management Block', 'Workshop on developing leadership skills and team management.', 'Commerce & Management'),
(29, 'Healthcare Innovation Forum', '2026-03-05', '10:30:00', 'Health Sciences Building', 'Forum discussing innovations in healthcare delivery.', 'Medicine'),
(30, 'International Food Festival', '2026-03-15', '12:00:00', 'University Plaza', 'Celebration of international cuisines and cultural exchange.', 'All Faculties'),
(31, 'Cybersecurity Conference', '2026-03-30', '09:00:00', 'Security Lab', 'Conference on latest trends in cybersecurity and data protection.', 'Computing & Technology'),
(32, 'Spring Theater Production', '2026-04-10', '18:00:00', 'Theater Hall', 'Student theater group presenting a classical play.', 'Social Sciences'),
(33, 'Data Science Day', '2026-04-25', '10:00:00', 'Computing Center', 'Workshops and presentations on data science applications.', 'Computing & Technology'),
(34, 'Economics Forum', '2026-05-05', '09:30:00', 'Economics Department', 'Discussion on global economic trends and policies.', 'Commerce & Management'),
(35, 'Health and Wellness Fair', '2026-05-20', '09:00:00', 'Sports Complex', 'Fair promoting physical and mental wellness activities.', 'Medicine'),
(36, 'Mobile App Challenge', '2026-06-05', '10:00:00', 'Innovation Lab', 'Competition for developing innovative mobile applications.', 'Computing & Technology'),
(37, 'Photography Exhibition', '2026-06-20', '13:00:00', 'Art Center', 'Exhibition of student and professional photography.', 'All Faculties'),
(38, 'Finance Summit', '2026-07-05', '09:00:00', 'Finance Lab', 'Summit on financial markets and investment strategies.', 'Commerce & Management'),
(39, 'Medical Ethics Symposium', '2026-07-20', '10:30:00', 'Ethics Center', 'Discussion on ethical issues in medical practice.', 'Medicine'),
(40, 'Game Development Workshop', '2026-08-05', '11:00:00', 'Gaming Lab', 'Hands-on workshop on video game development.', 'Computing & Technology'),
(41, 'Social Impact Conference', '2026-08-20', '09:30:00', 'Social Sciences Building', 'Conference on social innovation and community impact.', 'Social Sciences'),
(42, 'Blockchain Technology Forum', '2026-09-05', '10:00:00', 'Technology Center', 'Forum on blockchain applications and cryptocurrency.', 'Computing & Technology'),
(43, 'Marketing Summit', '2026-09-20', '09:00:00', 'Marketing Lab', 'Summit on digital marketing and brand management.', 'Commerce & Management'),
(44, 'Medical Research Day', '2026-10-05', '08:30:00', 'Research Wing', 'Presentation of latest medical research findings.', 'Medicine'),
(45, 'Virtual Reality Exhibition', '2026-10-20', '11:00:00', 'VR Lab', 'Showcase of virtual reality projects and applications.', 'Computing & Technology'),
(46, 'Human Resources Conference', '2026-11-05', '09:30:00', 'HR Department', 'Conference on modern HR practices and workplace culture.', 'Commerce & Management'),
(47, 'Psychology Research Symposium', '2026-11-20', '10:00:00', 'Psychology Lab', 'Symposium on recent advances in psychological research.', 'Social Sciences'),
(48, 'Cloud Computing Workshop', '2026-12-05', '09:00:00', 'Cloud Lab', 'Workshop on cloud technologies and services.', 'Computing & Technology'),
(49, 'Year-End Research Showcase', '2026-12-20', '10:30:00', 'Research Complex', 'Exhibition of research projects from all departments.', 'All Faculties');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
