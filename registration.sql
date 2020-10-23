-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 09:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tufinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `subject1` varchar(100) DEFAULT NULL,
  `subject2` varchar(100) DEFAULT NULL,
  `subject3` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `profilePicture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `name`, `password`, `status`, `subject1`, `subject2`, `subject3`, `bio`, `contact`, `profilePicture`) VALUES
(1, 'sample@gmail.com', NULL, '$2y$10$SSP9dqTJxoTEYTA9HijZneAGFqxn5ZGaD6ZMA2Gk8LD77kAgpxDJq', 'Tutor', 'Arts', 'Math', '1', 'this is the personal bio', NULL, NULL),
(2, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Social Studies', 'Math', '2', 'another bio for teacher', NULL, NULL),
(4, 'yuu@tj', 'kd', '$2y$10$KuUlkI8kk6qMLadz0baphuRlth7mTzLR66mK0QA7GRy25PhEqaa6a', 'Tutor', 'Social Studies', NULL, '3', NULL, NULL, NULL),
(5, 'yuu@tj', 'kd', '$2y$10$7rSqSB.BsW3XY344rhbM4O/Kq2jqYC3LP2NZ/fYMks3S6Vu2h7GLS', 'Parent', 'Science', 'Language', NULL, NULL, NULL, NULL),
(6, 'yuu@tj', 'kd', '$2y$10$m8YaZkmJbOaEdiy1Y9FhPuUoacWyQZ/ZJQE1FEQrFi5ZQhnQaRu8G', 'Parent', 'Science', NULL, NULL, NULL, NULL, NULL),
(7, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Business Studies', 'Language', '4', 'another bio for teacher', NULL, NULL),
(8, 'sample@gmail.com', NULL, '$2y$10$SSP9dqTJxoTEYTA9HijZneAGFqxn5ZGaD6ZMA2Gk8LD77kAgpxDJq', 'Tutor', 'Math', NULL, '5', 'this is the personal bio', NULL, NULL),
(9, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Math', NULL, '6', 'another bio for teacher', NULL, NULL),
(10, 'yuu@tj', 'kd', '$2y$10$KuUlkI8kk6qMLadz0baphuRlth7mTzLR66mK0QA7GRy25PhEqaa6a', 'Tutor', 'Social Studies', NULL, '7', NULL, NULL, NULL),
(11, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Language', 'Arts', '8', 'another bio for teacher', NULL, NULL),
(12, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Science', 'Math', '9', 'another bio for teacher', NULL, NULL),
(13, 'sample@gmail.com', NULL, '$2y$10$SSP9dqTJxoTEYTA9HijZneAGFqxn5ZGaD6ZMA2Gk8LD77kAgpxDJq', 'Tutor', 'Science', 'Math', '10', 'this is the personal bio', NULL, NULL),
(14, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Arts', 'Language', '11', 'another bio for teacher', NULL, NULL),
(15, 'yuu@tj', 'kd', '$2y$10$KuUlkI8kk6qMLadz0baphuRlth7mTzLR66mK0QA7GRy25PhEqaa6a', 'Tutor', 'Business Studies', NULL, '12', NULL, NULL, NULL),
(16, 'another@gmail.com', 'john sox', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Arts', NULL, '13', 'another bio for teacher', NULL, NULL),
(17, 'another@gmail.com', 'last teacher', '$2y$10$FgOg9dme6VHU4Z95cQ1GmONNtKCZZgditjxa1ZFhD.UPxKtBzG2fq', 'Tutor', 'Other', NULL, '14', 'another bio for teacher', NULL, NULL),
(18, 'jdaf@df', 'user1', '$2y$10$9ZmIXxT11E.iAxMshYqtqOe/xogkGatiJk4UM.H7krHLX8LSqsfHO', 'Parent', 'Arts', NULL, NULL, NULL, NULL, NULL),
(19, 'sdjk@dfjk', 'teacher 3', '$2y$10$nFic6zyVtiUgtzntnhJswOvJD2Utk/SmrbyNK68lgTnPItmvIArLO', 'Tutor', 'Language', NULL, NULL, NULL, NULL, NULL),
(20, 'john@doe', 'john doe', '', 'Tutor', 'Science', 'Language', '', 'This is the new bio', NULL, NULL),
(23, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(25, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(26, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(27, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(28, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(29, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(30, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(31, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(32, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(33, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(34, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(35, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(36, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(37, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(38, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(39, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(40, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(41, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(42, 'new@student', 'new student', '$2y$10$XILHzKxkjbgO5FO1punI8.Ato.K1IRW/6Qw9qIYnPyrwnrlGMxnKW', 'Student', 'Science', NULL, NULL, NULL, '430', NULL),
(43, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(44, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(45, 'user@Parent', 'user Parent', '$2y$10$s5agIU.gI34Xj4m556LStOo0SbYolYwOZAAP2wNzGcHLGJtvq.s2q', 'Parent', 'Science', NULL, NULL, NULL, '0988', NULL),
(46, 'tutor@new', 'tutor new', '$2y$10$ZsbLERWcY/uP9EA/SXAmO.bxcXVfsoYDfl/mA84Rxf5nxDD.dApOG', 'Tutor', 'Math', NULL, NULL, NULL, '3489', 'images/profilePictures/picnew.jpg.5f931944033db3.59300441.jpg'),
(47, 'tutor@123', 'tutor 123', '$2y$10$N2UcKitA6BSAnyMGfzdxueYtq/T76.2aCzcpQM9/pxaVpv2RTDnl2', 'Tutor', 'Social Studies', NULL, NULL, NULL, '43', 'images/profilePictures/banner.jpg.5f9326885590d1.79659445.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
