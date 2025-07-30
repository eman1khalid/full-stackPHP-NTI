-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Jul 27, 2025 at 09:18 PM
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
-- Database: `training_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `role` varchar(5) NOT NULL DEFAULT 'user',
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`role`, `username`, `email`, `password`) VALUES
('admin', 'admin', 'admin@example.com', '$2y$10$E2/dJpJbObAnoHC3Dj34EOrP3vO6L3xkl5tDguzxUtuip6WM5jlKC'),
('admin', 'aya', 'aya11245khalid@gmail.com', '$2y$10$Dj2t8C7rj8JgvV2tCoPGWuuHuXIO6qCP.1B1t2uI/5nqaRhCyWHa6'),
('admin', 'eman', 'eman1245khalid@gmail.com', '$2y$10$kjY.5tmksIe2YWM.XxObv.lEuOhZFaGAvtnaVKRh8OkBMUs3fPc46');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `hours` decimal(4,2) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `hours`, `price`) VALUES
(1, 'php', 'wep', 91.00, 1000.00),
(3, 'mysqli', 'wep', 99.99, 1020.00);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `grade` float DEFAULT NULL,
  `enrollment_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `student_id`, `course_id`, `grade`, `enrollment_date`) VALUES
(1, 5, 3, 80, '2025-07-05'),
(3, 1, 1, 8520, '2025-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `email` varchar(50) NOT NULL,
  `state` enum('Successful','fail') NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`email`, `state`, `id`) VALUES
('eman124555khalid@gmail.com', 'fail', 3),
('eman1245khalid@gmail.com', 'Successful', 4),
('eman124555khalid@gmail.com', 'fail', 5),
('eman1245khalid@gmail.com', 'Successful', 6),
('eman1245khalid@gmail.com', 'Successful', 7),
('', 'fail', 8),
('eman1245khalid@gmail.com', 'Successful', 9),
('eman1245khalid@gmail.com', 'Successful', 10),
('eman1245kh111alid@gmail.com', 'fail', 11),
('eman1245khalid@gmail.com', 'fail', 12),
('eman1245khalid@gmail.com', 'fail', 13),
('eman1245khalid@gmail.com', 'Successful', 14),
('eman1245khalid@gmail.com', 'Successful', 15),
('eman1245khalid@gmail.com', 'Successful', 16),
('eman1245khalid@gmail.com', 'Successful', 17),
('eman1245khalid@gmail.com', 'Successful', 18),
('eman1245khalid@gmail.com', 'Successful', 19),
('eman1245khalid@gmail.com', 'Successful', 20),
('eman1245khalid@gmail.com', 'Successful', 21),
('eman1245khalid@gmail.com', 'Successful', 22),
('eman1245khalid@gmail.com', 'Successful', 23),
('eman1245khalid@gmail.com', 'Successful', 24),
('islam@example.com', 'Successful', 25),
('eman1245khalid@gmail.com', 'Successful', 26),
('eman1245khalid@gmail.com', 'Successful', 27),
('eman1245khalid@gmail.com', 'Successful', 28),
('eman12345khalid@gmail.com', 'fail', 29),
('eman1245khalid@gmail.com', 'Successful', 30),
('eman1245khalid@gmail.com', 'Successful', 31),
('eman1245khalid@gmail.com', 'Successful', 32),
('eman1245khalid@gmail.com', 'fail', 33),
('eman1245khalid@gmail.com', 'Successful', 34),
('eman1245khalid@gmail.com', 'Successful', 35),
('eman1245khalid@gmail.com', 'Successful', 36),
('eman1245khalid@gmail.com', 'Successful', 37),
('eman1245khalid@gmail.com', 'Successful', 38),
('eman1245khalid@gmail.com', 'Successful', 39),
('eman1245khalid@gmail.com', 'Successful', 40),
('eman1245khalid@gmail.com', 'Successful', 41);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `date_of_birth`) VALUES
(1, 'ايمان خالد', 'eman1245khalid@gmail.com', '01013800672', '2004-04-30'),
(2, 'khalid ', 'KHALIDMHAM4@GMAIL.COM', '01013800672555', '2025-07-02'),
(5, 'Sara Youssef', 'sara@example.com', '100', '2025-07-19'),
(6, 'Sara Youssef khalid', 'sara12@example.com', '100', '2025-07-19'),
(10, 'aya khalid mokhtar', 'aya1245khalid@gmail.com', '2563', '2025-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
