-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(10) NOT NULL,
  `room_number` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `room_number`, `firstname`, `lastname`) VALUES
(924511610, 0, 'Yes', 'no'),
(924511611, 0, 'Kyrah', 'pangilinan'),
(924511612, 0, 'jc', 'faderanga'),
(924511613, 0, 'mary grace', 'santarin'),
(924511614, 0, 'Kyrah', 'pangilinan'),
(924511615, 0, 'Kyrah', 'faderanga');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_startend_date`
--

CREATE TABLE `instructor_startend_date` (
  `instructorDate_id` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_startend_date`
--

INSERT INTO `instructor_startend_date` (`instructorDate_id`, `startDate`, `endDate`) VALUES
(924511610, '2023-11-01', '2023-11-30'),
(924511611, '2023-11-01', '2023-11-30'),
(924511612, '2023-12-01', '2023-12-31'),
(924511613, '2023-11-08', '2023-11-30'),
(924511614, '2023-11-01', '2023-11-11'),
(924511615, '2024-01-01', '2024-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `instructor_startend_date`
--
ALTER TABLE `instructor_startend_date`
  ADD PRIMARY KEY (`instructorDate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924511616;

--
-- AUTO_INCREMENT for table `instructor_startend_date`
--
ALTER TABLE `instructor_startend_date`
  MODIFY `instructorDate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924511616;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
