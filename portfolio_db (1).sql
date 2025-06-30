-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 02:05 PM
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `technology`, `link`, `image`, `created_at`) VALUES
(2, 'Government ITI Sohawal Ayodhya ', 'Developed and maintained the official website for Government ITI Sohawal, designed to serve students, staff, and the public with up-to-date\r\ninformation about the institution ', 'PHP, Mysql, HTML, CSS, JS , Bootstrap', 'https://gitisohawal.in/', 'giti.jpg', '2025-06-30 05:21:07'),
(3, 'Learning Progress Dashboard', 'LearnAI Progress Tracker A full-stack Flask web application that helps users log in, track their learning progress, visualize course performance, and interact with course data using Pandas, NumPy, Matplotlib, and MySQL.\r\n\r\n', 'Python, Pandas, NumPy, Matplotib, MySQL', 'https://github.com/developervikki/Learning-Progress-DashbOard', 'WhatsApp Image 2025-06-30 at 3.04.06 PM.jpeg', '2025-06-30 09:34:29'),
(4, 'News Blog', 'NewsBlog is a simple and dynamic PHP-based blogging platform for publishing and managing news articles. It supports article management, image uploads, comment moderation, and basic user authentication for admins.\r\n', 'PHP, MySQL, JS, CSS, Tailwind css, ajax', 'https://github.com/developervikki/newsblog', 'Screenshot 2025-06-30 150818.jpg', '2025-06-30 09:38:34'),
(5, 'Digital Library Portal', 'This project is a seat booking and management system for a Digital Library built using PHP, MySQL, and Tailwind CSS. It allows students to book seats, upload ID proofs, make payments, and lets admins manage seat allocation, track payments, and monitor bookings.', 'PHP, MySQL, Tailwind CSS, AJAX, Javascript', 'http://worldofdelhi.com/', 'Screenshot 2025-06-30 151128.jpg', '2025-06-30 09:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', ' $2y$10$0bGHQb3ExeMO5sSvoSjoo.NnfWmpD5UKjB5Qd2yGIDJxiD.Su348C'),
(2, 'vikky', '$2y$10$Yt8Yf0DIrTiGrCUtP.sMB.Pmlf.ixl0DjL3bXTbIMYjHdks7YeVu2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
