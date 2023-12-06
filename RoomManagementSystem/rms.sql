-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 01:09 AM
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
-- Table structure for table `abm_subjects`
--

CREATE TABLE `abm_subjects` (
  `abm_Sub_ID` int(11) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `sub_instructor_Id` int(11) NOT NULL,
  `abm_Subject` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abm_subjects`
--

INSERT INTO `abm_subjects` (`abm_Sub_ID`, `Section_ID`, `sub_instructor_Id`, `abm_Subject`) VALUES
(1001, 0, 0, 'Culminating Activity/Rese'),
(1002, 0, 0, 'Pilipino sa Piling Larang'),
(1003, 0, 0, 'Business Ethics and Socia'),
(1004, 0, 0, '21st Century Literature'),
(1005, 0, 0, 'Inquiries, Investigation ');

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
  `subjects` varchar(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `subjects`, `firstname`, `lastname`) VALUES
(924511601, '0', 'Janrey Cyril', 'Faderanga'),
(924511602, '0', 'Kyrah', 'pangilinan'),
(924511603, '0', 'Janrey Cyril', 'Faderanga'),
(924511604, '0', 'Jaspher ', 'Cabanero'),
(924511605, '0', 'Julius', 'Loresca'),
(924511606, '0', 'Jc', 'Faderanga'),
(924511607, '0', 'mary grace', 'Santarin'),
(924511608, '0', 'Rhaiza', 'Maneclang'),
(924511609, '0', 'Jaspher ', 'Cabanero'),
(924511610, '', 'abc', '123'),
(924511611, '', 'julius', 'loresca');

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
(1, '2023-11-01', '2023-11-30'),
(924511602, '2023-11-01', '2023-11-30'),
(924511603, '2023-11-01', '2023-12-31'),
(924511604, '2024-01-01', '2024-01-31'),
(924511605, '2023-11-01', '2023-11-30'),
(924511606, '2023-07-01', '2023-11-30'),
(924511607, '2023-11-01', '2023-11-30'),
(924511608, '2023-11-01', '2023-11-30'),
(924511609, '2023-12-01', '2023-12-31'),
(924511610, '2023-12-01', '2023-12-31'),
(924511611, '2023-12-01', '2023-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_subject`
--

CREATE TABLE `instructor_subject` (
  `inst_sub_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `strand` varchar(23) NOT NULL,
  `subject_code` varchar(23) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_subject`
--

INSERT INTO `instructor_subject` (`inst_sub_id`, `instructor_id`, `strand`, `subject_code`, `StartTime`, `EndTime`) VALUES
(1, 924511606, '', '', '00:00:00', '00:00:00'),
(2, 924511606, '', '', '00:00:00', '00:00:00'),
(3, 924511606, 'Array', '', '00:00:00', '00:00:00'),
(4, 924511606, ' ', '', '00:00:00', '00:00:00'),
(5, 924511606, ' ', '', '00:00:00', '00:00:00'),
(6, 924511606, ' ', '', '00:00:00', '00:00:00'),
(7, 924511607, ' ', '', '00:00:00', '00:00:00'),
(8, 924511607, '', '', '00:00:00', '00:00:00'),
(9, 924511607, '', '', '00:00:00', '00:00:00'),
(10, 924511607, 'Array', '', '00:00:00', '00:00:00'),
(11, 924511607, '', '', '00:00:00', '00:00:00'),
(12, 924511607, '', '', '00:00:00', '00:00:00'),
(13, 924511607, '', '', '00:00:00', '00:00:00'),
(14, 924511607, '', '', '00:00:00', '00:00:00'),
(15, 924511607, 'SC99000STEM', '', '00:00:00', '00:00:00'),
(16, 924511607, 'SC99000ADAS', 'Oral Communication Stra', '00:00:00', '00:00:00'),
(17, 924511607, 'SC99000ADAS', 'Oral Communication Stra', '00:00:00', '00:00:00'),
(18, 924511607, 'SC99000ADAS', 'Oral Communication Stra', '00:00:00', '00:00:00'),
(19, 924511607, 'SC99000ADAS', 'Oral Communication Stra', '00:00:00', '00:00:00'),
(20, 924511607, '', '', '00:00:00', '00:00:00'),
(21, 924511607, '', '', '00:00:00', '00:00:00'),
(22, 924511607, '', '', '00:00:00', '00:00:00'),
(23, 924511607, 'SC99000ADAS', 'PEH1 Strand', '22:23:00', '22:23:00'),
(24, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(25, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(26, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(27, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(28, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(29, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(30, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(31, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(32, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(33, 924511607, 'SC99000ICT', 'Philosophy Strand', '15:23:00', '18:23:00'),
(34, 924511602, 'SC99000STEM', 'General Mathematics Str', '22:25:00', '22:27:00'),
(35, 924511602, 'SC99000STEM', 'General Mathematics Str', '22:25:00', '22:27:00'),
(36, 924511602, '', '', '00:00:00', '00:00:00'),
(37, 924511602, '', '', '00:00:00', '00:00:00'),
(38, 924511606, 'SC99000STEM', 'General Mathematics Str', '10:27:00', '16:27:00'),
(39, 924511603, '', '', '00:00:00', '00:00:00'),
(40, 924511603, 'SC99000STEM', 'PEH1 Strand', '15:28:00', '15:28:00'),
(41, 924511603, 'SC99000STEM', 'PEH1 Strand', '15:28:00', '15:28:00'),
(42, 924511603, 'SC99000STEM', 'PEH1 Strand', '15:28:00', '15:28:00'),
(43, 924511603, 'SC99000STEM', 'PEH1 Strand', '15:28:00', '15:28:00'),
(44, 924511604, 'SC99000STEM', 'Komunikasyon Strand', '15:30:00', '16:30:00'),
(45, 924511611, 'SC99000ICT', 'General Chemistry 1 Str', '12:35:00', '22:41:00'),
(46, 924511608, 'SC99000STEM', 'Philosophy Strand', '17:02:00', '14:02:00'),
(47, 924511608, 'SC99000GAS', 'Earth Science Strand', '07:00:00', '10:00:00'),
(48, 924511608, 'SC99000ICT', '', '00:00:00', '00:00:00'),
(49, 924511606, 'SC99000ABM', 'RHGP Strand', '14:06:00', '17:06:00'),
(50, 924511606, 'SC99000ICT', 'Komunikasyon', '01:07:00', '13:07:00');

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
-- Table structure for table `stem_subjects`
--

CREATE TABLE `stem_subjects` (
  `sub_ID` int(11) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `sub_instructor_id` int(11) NOT NULL,
  `Subjects_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stem_subjects`
--

INSERT INTO `stem_subjects` (`sub_ID`, `Section_ID`, `sub_instructor_id`, `Subjects_name`) VALUES
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
('SC99000GAS', 'GAS'),
('SC99000HE', 'HE'),
('SC99000ICT', 'ICT'),
('SC99000STEM', 'STEM');

-- --------------------------------------------------------

--
-- Table structure for table `strand_room_details`
--

CREATE TABLE `strand_room_details` (
  `room_ID` int(11) NOT NULL,
  `strand_code_ID` varchar(20) NOT NULL,
  `grade_lvl_ID` int(11) NOT NULL,
  `room_floor_ID` int(11) NOT NULL,
  `room_status_ID` int(11) NOT NULL,
  `room_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strand_room_details`
--

INSERT INTO `strand_room_details` (`room_ID`, `strand_code_ID`, `grade_lvl_ID`, `room_floor_ID`, `room_status_ID`, `room_number`) VALUES
(1, 'SC99000ABM', 11, 3, 1, 1101),
(2, 'SC99000ABM', 11, 2, 0, 1102),
(3, 'SC99000ABM', 11, 3, 0, 1103),
(4, 'SC99000ABM', 11, 3, 0, 1104),
(5, 'SC99000ABM', 11, 3, 0, 1105),
(6, 'SC99000ABM', 11, 1, 0, 1106),
(7, 'SC99000ABM', 11, 1, 0, 1107),
(8, 'SC99000ABM', 11, 4, 0, 1108),
(9, 'SC99000ABM', 11, 1, 0, 1109),
(10, 'SC99000ABM', 11, 3, 0, 1110),
(11, 'SC99000ABM', 11, 1, 0, 1111),
(12, 'SC99000ABM', 11, 1, 0, 1112),
(13, 'SC99000ABM', 12, 1, 0, 1201),
(14, 'SC99000ABM', 12, 3, 0, 1202),
(15, 'SC99000ABM', 12, 2, 0, 1203),
(16, 'SC99000ABM', 12, 4, 0, 1204),
(17, 'SC99000ABM', 12, 1, 0, 1205),
(18, 'SC99000ABM', 12, 1, 0, 1206),
(19, 'SC99000ABM', 12, 1, 0, 1207),
(20, 'SC99000ABM', 12, 4, 0, 1208),
(21, 'SC99000ABM', 12, 2, 0, 1209),
(22, 'SC99000ABM', 12, 3, 0, 1210),
(23, 'SC99000ABM', 12, 3, 0, 1211),
(24, 'SC99000ABM', 12, 2, 0, 1212),
(25, 'SC99000ADAS', 11, 3, 0, 1101),
(26, 'SC99000ADAS', 11, 2, 0, 1102),
(27, 'SC99000ADAS', 11, 3, 0, 1103),
(28, 'SC99000ADAS', 11, 3, 0, 1104),
(29, 'SC99000ADAS', 11, 3, 0, 1105),
(30, 'SC99000ADAS', 11, 1, 0, 1106),
(31, 'SC99000ADAS', 11, 1, 0, 1107),
(32, 'SC99000ADAS', 11, 4, 0, 1108),
(33, 'SC99000ADAS', 11, 1, 0, 1109),
(34, 'SC99000ADAS', 11, 3, 0, 1110),
(35, 'SC99000ADAS', 11, 1, 0, 1111),
(36, 'SC99000ADAS', 11, 1, 0, 1112),
(37, 'SC99000ADAS', 12, 1, 0, 1201),
(38, 'SC99000ADAS', 12, 3, 0, 1202),
(39, 'SC99000ADAS', 12, 2, 0, 1203),
(40, 'SC99000ADAS', 12, 4, 0, 1204),
(41, 'SC99000ADAS', 12, 1, 0, 1205),
(42, 'SC99000ADAS', 12, 1, 0, 1206),
(43, 'SC99000ADAS', 12, 1, 0, 1207),
(44, 'SC99000ADAS', 12, 4, 0, 1208),
(45, 'SC99000ADAS', 12, 2, 0, 1209),
(46, 'SC99000ADAS', 12, 3, 0, 1210),
(47, 'SC99000ADAS', 12, 3, 0, 1211),
(48, 'SC99000ADAS', 12, 2, 0, 1212),
(49, 'SC99000ICT', 11, 3, 0, 1101),
(50, 'SC99000ICT', 11, 2, 0, 1102),
(51, 'SC99000ICT', 11, 3, 0, 1103),
(52, 'SC99000ICT', 11, 3, 0, 1104),
(53, 'SC99000ICT', 11, 3, 0, 1105),
(54, 'SC99000ICT', 11, 1, 0, 1106),
(55, 'SC99000ICT', 11, 1, 0, 1107),
(56, 'SC99000ICT', 11, 4, 0, 1108),
(57, 'SC99000ICT', 11, 1, 0, 1109),
(58, 'SC99000ICT', 11, 3, 0, 1110),
(59, 'SC99000ICT', 11, 1, 0, 1111),
(60, 'SC99000ICT', 11, 1, 0, 1112),
(61, 'SC99000ICT', 12, 1, 0, 1201),
(62, 'SC99000ICT', 12, 3, 0, 1202),
(63, 'SC99000ICT', 12, 2, 0, 1203),
(64, 'SC99000ICT', 12, 4, 0, 1204),
(65, 'SC99000ICT', 12, 1, 0, 1205),
(66, 'SC99000ICT', 12, 1, 0, 1206),
(67, 'SC99000ICT', 12, 1, 0, 1207),
(68, 'SC99000ICT', 12, 4, 0, 1208),
(69, 'SC99000ICT', 12, 2, 0, 1209),
(70, 'SC99000ICT', 12, 3, 0, 1210),
(71, 'SC99000ICT', 12, 3, 0, 1211),
(72, 'SC99000ICT', 12, 2, 0, 1212),
(73, 'SC99000STEM', 11, 3, 0, 1101),
(74, 'SC99000STEM', 11, 2, 0, 1102),
(75, 'SC99000STEM', 11, 3, 0, 1103),
(76, 'SC99000STEM', 11, 3, 0, 1104),
(77, 'SC99000STEM', 11, 3, 0, 1105),
(78, 'SC99000STEM', 11, 1, 0, 1106),
(79, 'SC99000STEM', 11, 1, 0, 1107),
(80, 'SC99000STEM', 11, 4, 0, 1108),
(81, 'SC99000STEM', 11, 1, 0, 1109),
(82, 'SC99000STEM', 11, 3, 0, 1110),
(83, 'SC99000STEM', 11, 1, 0, 1111),
(84, 'SC99000STEM', 11, 1, 0, 1112),
(85, 'SC99000STEM', 12, 1, 0, 1201),
(86, 'SC99000STEM', 12, 3, 0, 1202),
(87, 'SC99000STEM', 12, 2, 0, 1203),
(88, 'SC99000STEM', 12, 4, 0, 1204),
(89, 'SC99000STEM', 12, 1, 0, 1205),
(90, 'SC99000STEM', 12, 1, 0, 1206),
(91, 'SC99000STEM', 12, 1, 0, 1207),
(92, 'SC99000STEM', 12, 4, 0, 1208),
(93, 'SC99000STEM', 12, 2, 0, 1209),
(94, 'SC99000STEM', 12, 3, 0, 1210),
(95, 'SC99000STEM', 12, 3, 0, 1211),
(96, 'SC99000STEM', 12, 2, 0, 1212),
(97, 'SC99000GAS', 11, 3, 0, 1101),
(98, 'SC99000GAS', 11, 2, 0, 1102),
(99, 'SC99000GAS', 11, 3, 0, 1103),
(100, 'SC99000GAS', 11, 3, 0, 1104),
(101, 'SC99000GAS', 11, 3, 0, 1105),
(102, 'SC99000GAS', 11, 1, 0, 1106),
(103, 'SC99000GAS', 11, 1, 0, 1107),
(104, 'SC99000GAS', 11, 4, 0, 1108),
(105, 'SC99000GAS', 11, 1, 0, 1109),
(106, 'SC99000GAS', 11, 3, 0, 1110),
(107, 'SC99000GAS', 11, 1, 0, 1111),
(108, 'SC99000GAS', 11, 1, 0, 1112),
(109, 'SC99000GAS', 12, 1, 0, 1201),
(110, 'SC99000GAS', 12, 3, 0, 1202),
(111, 'SC99000GAS', 12, 2, 0, 1203),
(112, 'SC99000GAS', 12, 4, 0, 1204),
(113, 'SC99000GAS', 12, 1, 0, 1205),
(114, 'SC99000GAS', 12, 1, 0, 1206),
(115, 'SC99000GAS', 12, 1, 0, 1207),
(116, 'SC99000GAS', 12, 4, 0, 1208),
(117, 'SC99000GAS', 12, 2, 0, 1209),
(118, 'SC99000GAS', 12, 3, 0, 1210),
(119, 'SC99000GAS', 12, 3, 0, 1211),
(120, 'SC99000GAS', 12, 2, 0, 1212),
(121, 'SC99000HE', 11, 3, 0, 1101),
(122, 'SC99000HE', 11, 2, 0, 1102),
(123, 'SC99000HE', 11, 3, 0, 1103),
(124, 'SC99000HE', 11, 3, 0, 1104),
(125, 'SC99000HE', 11, 3, 0, 1105),
(126, 'SC99000HE', 11, 1, 0, 1106),
(127, 'SC99000HE', 11, 1, 0, 1107),
(128, 'SC99000HE', 11, 4, 0, 1108),
(129, 'SC99000HE', 11, 1, 0, 1109),
(130, 'SC99000HE', 11, 3, 0, 1110),
(131, 'SC99000HE', 11, 1, 0, 1111),
(132, 'SC99000HE', 11, 1, 0, 1112),
(133, 'SC99000HE', 12, 1, 0, 1201),
(134, 'SC99000HE', 12, 3, 0, 1202),
(135, 'SC99000HE', 12, 2, 0, 1203),
(136, 'SC99000HE', 12, 4, 0, 1204),
(137, 'SC99000HE', 12, 1, 0, 1205),
(138, 'SC99000HE', 12, 1, 0, 1206),
(139, 'SC99000HE', 12, 1, 0, 1207),
(140, 'SC99000HE', 12, 4, 0, 1208),
(141, 'SC99000HE', 12, 2, 0, 1209),
(142, 'SC99000HE', 12, 3, 0, 1210),
(143, 'SC99000HE', 12, 3, 0, 1211),
(144, 'SC99000HE', 12, 2, 0, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `strand_code_ID` int(11) NOT NULL,
  `grade_level_ID` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `subject_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abm_subjects`
--
ALTER TABLE `abm_subjects`
  ADD PRIMARY KEY (`abm_Sub_ID`);

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
-- Indexes for table `instructor_subject`
--
ALTER TABLE `instructor_subject`
  ADD PRIMARY KEY (`inst_sub_id`);

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
-- Indexes for table `stem_subjects`
--
ALTER TABLE `stem_subjects`
  ADD PRIMARY KEY (`sub_ID`);

--
-- Indexes for table `strands`
--
ALTER TABLE `strands`
  ADD PRIMARY KEY (`strand_code`);

--
-- Indexes for table `strand_room_details`
--
ALTER TABLE `strand_room_details`
  ADD PRIMARY KEY (`room_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abm_subjects`
--
ALTER TABLE `abm_subjects`
  MODIFY `abm_Sub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `grade_level`
--
ALTER TABLE `grade_level`
  MODIFY `grade_level_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924511612;

--
-- AUTO_INCREMENT for table `instructor_startend_date`
--
ALTER TABLE `instructor_startend_date`
  MODIFY `instructorDate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=924511612;

--
-- AUTO_INCREMENT for table `instructor_subject`
--
ALTER TABLE `instructor_subject`
  MODIFY `inst_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- AUTO_INCREMENT for table `stem_subjects`
--
ALTER TABLE `stem_subjects`
  MODIFY `sub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `strand_room_details`
--
ALTER TABLE `strand_room_details`
  MODIFY `room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
