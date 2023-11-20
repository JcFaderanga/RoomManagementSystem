-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 02:16 AM
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
-- Table structure for table `grade_level`
--

CREATE TABLE `grade_level` (
  `grade_level_ID` int(11) NOT NULL,
  `grade_level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`grade_level_ID`, `grade_level`) VALUES
(11, 'GRADE 11'),
(12, 'GRADE 12');

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
(924511615, 0, 'Kyrah', 'faderanga'),
(924511616, 0, 'julius', 'loresca');

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
(924511615, '2024-01-01', '2024-12-31'),
(924511616, '0000-00-00', '0000-00-00'),
(924511617, '0000-00-00', '0000-00-00'),
(924511618, '2000-02-01', '2023-01-02'),
(924511619, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `room_floors`
--

CREATE TABLE `room_floors` (
  `floor_ID` int(11) NOT NULL,
  `floor_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_floors`
--

INSERT INTO `room_floors` (`floor_ID`, `floor_number`) VALUES
(0, 'N/A'),
(1, '1ST FLOOR'),
(2, '2ND FLOOR'),
(3, '3RD FLOOR'),
(4, '4TH FLOOR'),
(5, '5TH FLOOR');

-- --------------------------------------------------------

--
-- Table structure for table `room_status`
--

CREATE TABLE `room_status` (
  `status_ID` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_status`
--

INSERT INTO `room_status` (`status_ID`, `status`) VALUES
(0, 'Available'),
(1, 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `stem`
--

CREATE TABLE `stem` (
  `room_ID` int(11) NOT NULL,
  `strand_code_ID` varchar(20) NOT NULL,
  `room_floor_ID` int(11) NOT NULL,
  `room_status_ID` int(11) NOT NULL,
  `room_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stem`
--

INSERT INTO `stem` (`room_ID`, `strand_code_ID`, `room_floor_ID`, `room_status_ID`, `room_number`) VALUES
(101, 'SC99000STEM', 1, 0, 1101),
(102, 'SC99000STEM', 0, 0, 1102),
(103, 'SC99000STEM', 0, 0, 1103),
(104, 'SC99000STEM', 0, 0, 1104),
(105, 'SC99000STEM', 0, 0, 1105),
(106, 'SC99000STEM', 0, 0, 1106),
(107, 'SC99000STEM', 0, 0, 1107),
(108, 'SC99000STEM', 0, 0, 1108),
(109, 'SC99000STEM', 0, 0, 1109),
(110, 'SC99000STEM', 0, 0, 1110),
(111, 'SC99000STEM', 0, 0, 1111),
(112, 'SC99000STEM', 0, 0, 1112),
(113, 'SC99000STEM', 0, 0, 1201),
(114, 'SC99000STEM', 0, 0, 1202),
(115, 'SC99000STEM', 0, 0, 1203),
(116, 'SC99000STEM', 0, 0, 1204),
(117, 'SC99000STEM', 0, 0, 1205),
(118, 'SC99000STEM', 0, 0, 1206),
(119, 'SC99000STEM', 0, 0, 1207),
(120, 'SC99000STEM', 0, 0, 1208),
(121, 'SC99000STEM', 0, 0, 1209),
(122, 'SC99000STEM', 0, 0, 1210),
(123, 'SC99000STEM', 0, 0, 1211),
(124, 'SC99000STEM', 0, 0, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `stem_subjects`
--

CREATE TABLE `stem_subjects` (
  `Stem_Sub_ID` int(11) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `sub_instructor_id` int(11) NOT NULL,
  `Stem_Subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stem_subjects`
--

INSERT INTO `stem_subjects` (`Stem_Sub_ID`, `Section_ID`, `sub_instructor_id`, `Stem_Subject`) VALUES
(1000, 0, 0, 'Oral Communication'),
(1001, 0, 0, 'Komunikasyon at Pananaliksik sa wika at kulturang pilipino\r\n'),
(1002, 0, 0, 'General Mathematics'),
(1003, 0, 0, 'Earth Science'),
(1004, 0, 0, 'Introduction to  the Philosophy of the Human Person'),
(1005, 0, 0, 'Physical Education and Health 1'),
(1006, 0, 0, 'Empowerment Technologies\r\n'),
(1007, 0, 0, 'General Chemistry 1'),
(1008, 0, 0, 'RHGP');

-- --------------------------------------------------------

--
-- Table structure for table `strands`
--

CREATE TABLE `strands` (
  `strand_code` varchar(11) NOT NULL,
  `strand_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strands`
--

INSERT INTO `strands` (`strand_code`, `strand_name`) VALUES
('SC99000ABM', 'ABM'),
('SC99000ADAS', 'ADAS'),
('SC99000STEM', 'STEM'),
('SC9900GAS', 'GAS'),
('SC9900HE', 'HE'),
('SC9900ICT', 'ICT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade_level`
--
ALTER TABLE `grade_level`
  ADD PRIMARY KEY (`grade_level_ID`);

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
-- Indexes for table `room_floors`
--
ALTER TABLE `room_floors`
  ADD PRIMARY KEY (`floor_ID`);

--
-- Indexes for table `room_status`
--
ALTER TABLE `room_status`
  ADD PRIMARY KEY (`status_ID`);

--
-- Indexes for table `stem`
--
ALTER TABLE `stem`
  ADD PRIMARY KEY (`room_ID`);

--
-- Indexes for table `stem_subjects`
--
ALTER TABLE `stem_subjects`
  ADD PRIMARY KEY (`Stem_Sub_ID`);

--
-- Indexes for table `strands`
--
ALTER TABLE `strands`
  ADD PRIMARY KEY (`strand_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade_level`
--
ALTER TABLE `grade_level`
  MODIFY `grade_level_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924511617;

--
-- AUTO_INCREMENT for table `instructor_startend_date`
--
ALTER TABLE `instructor_startend_date`
  MODIFY `instructorDate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924511620;

--
-- AUTO_INCREMENT for table `room_floors`
--
ALTER TABLE `room_floors`
  MODIFY `floor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_status`
--
ALTER TABLE `room_status`
  MODIFY `status_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stem`
--
ALTER TABLE `stem`
  MODIFY `room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `stem_subjects`
--
ALTER TABLE `stem_subjects`
  MODIFY `Stem_Sub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
