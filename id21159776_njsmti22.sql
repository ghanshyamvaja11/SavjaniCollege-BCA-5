-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2024 at 07:17 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21159776_njsmti22`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact us`
--

CREATE TABLE `Contact us` (
  `name` varchar(51) NOT NULL,
  `email` varchar(51) NOT NULL,
  `query_type` varchar(29) NOT NULL,
  `description` varchar(609) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contact us`
--

INSERT INTO `Contact us` (`name`, `email`, `query_type`, `description`) VALUES
('Aa', 'A@gmail.com', 'Admission', 'ab'),
('AA', 'AA@gmail.com', 'Admission', 'Ab');

-- --------------------------------------------------------

--
-- Table structure for table `Faculties`
--

CREATE TABLE `Faculties` (
  `Endorsement_No` varchar(51) NOT NULL,
  `Name` varchar(59) NOT NULL,
  `Department` varchar(29) NOT NULL,
  `Mobile` bigint(19) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(69) NOT NULL,
  `OTP` int(6) NOT NULL,
  `Secret_Key` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Faculties`
--

INSERT INTO `Faculties` (`Endorsement_No`, `Name`, `Department`, `Mobile`, `Email`, `Password`, `OTP`, `Secret_Key`) VALUES
('111111111', 'Ab', 'MCA', 8160075629, 'Vajaghanshyam12345@gmail.com', '1d15d5973c9ec927df7e0c49ffaf6f8c', 707812, '707812'),
('11111111111', 'Ab', 'MCA', 8160075629, 'Vajaghanshyam12345@gmail.com', '1d15d5973c9ec927df7e0c49ffaf6f8c', 731443, '731443'),
('121212121', 'Ab', 'MCA', 8160075629, 'Vajaghanshyam12345@gmail.com', '1d15d5973c9ec927df7e0c49ffaf6f8c', 613790, '613790');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `SerialNumber` int(11) NOT NULL,
  `name` varchar(51) NOT NULL,
  `email` varchar(51) NOT NULL,
  `description` varchar(609) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`SerialNumber`, `name`, `email`, `description`, `date`) VALUES
(1, 'Demo', 'A@gmail.com', 'Hi', '2023-08-18'),
(2, 'aa', 'aa@gmail.com', 'ab', '2023-10-03'),
(3, 'Abcde', 'bb@gmail.com', 'Ab', '2023-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Login_type` varchar(29) NOT NULL,
  `Email` varchar(51) NOT NULL,
  `Username` varchar(29) NOT NULL,
  `Password` varchar(609) NOT NULL,
  `OTP` int(6) NOT NULL,
  `Secret_Key` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Login_type`, `Email`, `Username`, `Password`, `OTP`, `Secret_Key`) VALUES
('Director', 'njsmti22@gmail.com', 'Director@njsmti', '1d15d5973c9ec927df7e0c49ffaf6f8c', 739757, '298737'),
('Clerk', 'njsmti22@gmail.com', 'Clerk@njsmti', '1d15d5973c9ec927df7e0c49ffaf6f8c', 166764, '0');

-- --------------------------------------------------------

--
-- Table structure for table `Results`
--

CREATE TABLE `Results` (
  `Enrollment_No` bigint(11) NOT NULL,
  `Name` varchar(51) NOT NULL,
  `Class` varchar(8) NOT NULL,
  `S1` varchar(69) NOT NULL,
  `S2` varchar(69) NOT NULL,
  `S3` varchar(69) NOT NULL,
  `S4` varchar(69) NOT NULL,
  `S5` varchar(69) NOT NULL,
  `S6` varchar(69) NOT NULL,
  `S7` varchar(69) DEFAULT NULL,
  `S8` varchar(69) DEFAULT NULL,
  `S1M` int(3) NOT NULL,
  `S2M` int(3) NOT NULL,
  `S3M` int(3) NOT NULL,
  `S4M` int(3) NOT NULL,
  `S5M` int(3) NOT NULL,
  `S6M` int(3) NOT NULL,
  `S7M` int(3) DEFAULT NULL,
  `S8M` int(3) DEFAULT NULL,
  `PassingMarks` int(3) NOT NULL,
  `TOTAL` int(3) NOT NULL,
  `OBTAINED` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Results`
--

INSERT INTO `Results` (`Enrollment_No`, `Name`, `Class`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `S8`, `S1M`, `S2M`, `S3M`, `S4M`, `S5M`, `S6M`, `S7M`, `S8M`, `PassingMarks`, `TOTAL`, `OBTAINED`) VALUES
(121212121212, 'vaja ghanshyam ', 'MCA-2', 'A', 'A', 'A', 'A', 'A', 'A', NULL, NULL, 65, 56, 56, 56, 8, 99, NULL, NULL, 50, 600, 340);

-- --------------------------------------------------------

--
-- Table structure for table `Student Registration`
--

CREATE TABLE `Student Registration` (
  `Enrollment_No` bigint(15) NOT NULL,
  `Name` varchar(59) NOT NULL,
  `Course` varchar(29) NOT NULL,
  `Semester` varchar(26) NOT NULL,
  `Mobile` bigint(19) NOT NULL,
  `Email` varchar(51) NOT NULL,
  `Password` varchar(59) NOT NULL,
  `OTP` int(6) NOT NULL,
  `Secret_Key` varchar(6) NOT NULL,
  `Attendence` int(4) DEFAULT NULL,
  `Sem_Fees` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Student Registration`
--

INSERT INTO `Student Registration` (`Enrollment_No`, `Name`, `Course`, `Semester`, `Mobile`, `Email`, `Password`, `OTP`, `Secret_Key`, `Attendence`, `Sem_Fees`) VALUES
(121212121212, 'vaja ghanshyam ', 'MCA', 'Sem-4', 8160075696, 'vajaghanshyam12345@gmail.com', '1d15d5973c9ec927df7e0c49ffaf6f8c', 463125, '207517', NULL, 1226712);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Faculties`
--
ALTER TABLE `Faculties`
  ADD PRIMARY KEY (`Endorsement_No`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`Enrollment_No`);

--
-- Indexes for table `Student Registration`
--
ALTER TABLE `Student Registration`
  ADD PRIMARY KEY (`Enrollment_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `SerialNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
