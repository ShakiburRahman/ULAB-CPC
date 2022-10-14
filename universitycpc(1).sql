-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitycpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `UlabEmail` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `UlabEmail`, `password`) VALUES
('superadmin', 'superadmin@ulab.edu', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `compName` varchar(255) NOT NULL,
  `companyUniqueID` varchar(255) NOT NULL,
  `ulabEmail` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`compName`, `companyUniqueID`, `ulabEmail`, `password`) VALUES
('Brain Station 23', '17122', 'bs23@ulab.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(11) NOT NULL,
  `compName` varchar(255) NOT NULL,
  `jobPosition` varchar(255) NOT NULL,
  `vacancy` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `cgpaReq` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `jobType` varchar(255) NOT NULL,
  `jobLocation` varchar(255) NOT NULL,
  `reqExper` text NOT NULL,
  `prefferedProgram` text NOT NULL,
  `jobRespon` text NOT NULL,
  `additionalReq` text NOT NULL,
  `educationalReq` text NOT NULL,
  `compensation` text NOT NULL,
  `applicationProcedure` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `compName`, `jobPosition`, `vacancy`, `deadline`, `cgpaReq`, `salary`, `jobType`, `jobLocation`, `reqExper`, `prefferedProgram`, `jobRespon`, `additionalReq`, `educationalReq`, `compensation`, `applicationProcedure`) VALUES
(1, 'Bs23', 'SOftware engineer', '3', '2022-10-19', '3', '2000', 'FullTime', 'Dhaka', 'qqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqq', 'qqqqqqqqqqqq', 'qqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqq'),
(2, 'hgkuy', 'hgvjhgv', 'jygv', '2022-10-21', '', '', 'PartTime', '', '', '', '', '', '', '', ''),
(3, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(4, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(5, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(6, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(7, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(8, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(9, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', '0000-00-00', 'xxxxxxxxxx', '', 'FullTime', '', '', '', '', '', '', '', ''),
(10, 'qqqqqqqqqq', 'qqqqqqqq', 'qq', '0000-00-00', '', '', 'FullTime', '', '', '', '', '', '', '', ''),
(11, '', '', '', '0000-00-00', '', '100000000000', 'FullTime', '', '', '', '', '', '', '', ''),
(12, '', '', '', '0000-00-00', '', '', 'FullTime', '', '', '', '', '', '', '', ''),
(13, '', '', '', '0000-00-00', '', '', 'FullTime', '', '', '', '', '', '', '', ''),
(14, '', '', '', '0000-00-00', '', '', 'FullTime', '', '', '', '', '', '', '', ''),
(15, '', '', '', '0000-00-00', '', '', 'FullTime', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ulabID` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ulabEmail` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ulabID`, `name`, `ulabEmail`, `dept`, `password`) VALUES
('', '', '', '', ''),
('1712233', 'nisha', 'nisha@ulab.com', 'cse', '1234567'),
('asd', 'asd', 'asd@ulab.com\r\n', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `UlabEmail` (`UlabEmail`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD UNIQUE KEY `companyUniqueID` (`companyUniqueID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `ulabID` (`ulabID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
