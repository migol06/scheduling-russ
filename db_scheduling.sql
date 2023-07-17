-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 03:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_scheduling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `address`, `contactnumber`, `position`, `username`, `password`) VALUES
(1, 'Quinn Villapando', 'Luta Sur Malvar Batangas', '09454929819', 'ADMIN', 'admin', 'admin'),
(2, 'Test', 'malvar', '01293019203', 'ADMIN', 'admin', 'admin2'),
(3, 'Test 2', 'Malvar', '12002909130', 'ADMIN', 'admintest', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE `tbl_rooms` (
  `id` int(255) NOT NULL,
  `buildingname` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `buildingname`, `room`) VALUES
(2, 'CICS BUILDING', '101');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `yearlevel` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `parents` varchar(255) NOT NULL,
  `parentscontactnumber` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `name`, `gender`, `lrn`, `schoolyear`, `yearlevel`, `strand`, `contactnumber`, `parents`, `parentscontactnumber`, `section`, `email`, `file`, `username`, `password`, `type`) VALUES
(9, 'Quinn Villapando', 'Male', '48040693', '2022-2023', 'First Year', 'HUMS', '09454929819', 'juan dela cruz', '91298391829', 'Section 1', 'siletnceas@gmail.com', '', '48040693', '12345', 'Student'),
(11, 'Quinn Teacher', 'Female', '123456789', '', '', '', '09454929819', '', '', 'Section 1', 'quinn.villapando23@gmail.com', '', '123456789', '1234', 'Teacher'),
(12, 'Juan Dela Crus', 'Male', '0129124901', '2022-2023', 'Fourth Year', 'HUMS', '09102930912', 'Pedro Dela Cruz', '09091023910', 'Section 1', 'sample@gmail.com', '', '0129124901', '1234', 'Student'),
(13, 'Irish Sanchez', 'Female', '20-69056', '2022-2023', 'Fifth Year', 'HUMS', '09083597979', 'Maricel Sanchez', '09083597979', 'Section 1', 'irishsanchez356@gmail.com', '', '20-69056', '1234', 'Student'),
(15, 'Ms. Sanchez', '', '1234', '', '', '', '09083597979', '', '', 'Section 1', 'irishsanchez356@gmail.com', '', '1234', '1234', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `id` int(255) NOT NULL,
  `subjectcode` varchar(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`id`, `subjectcode`, `subjectname`, `hours`, `type`) VALUES
(1, 'CPES101', 'Computer Programming 1', '6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rooms`
--
ALTER TABLE `tbl_rooms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
