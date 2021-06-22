-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 11:11 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdv`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_date` varchar(100) NOT NULL,
  `app_start_time` varchar(100) NOT NULL,
  `app_end_time` varchar(100) NOT NULL,
  `app_user_token` varchar(100) DEFAULT NULL,
  `app_schedule_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_date`, `app_start_time`, `app_end_time`, `app_user_token`, `app_schedule_id`) VALUES
(1, '2021-06-22', '11 h', '11:30h', 'AMIN5PN8E7P45QI55OJ2Y465', '2');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sche_id` int(11) NOT NULL,
  `sche_name` varchar(100) DEFAULT NULL,
  `sche_date` varchar(100) DEFAULT NULL,
  `sche_start_time` varchar(100) NOT NULL,
  `sche_end_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sche_id`, `sche_name`, `sche_date`, `sche_start_time`, `sche_end_time`) VALUES
(1, 'Lawyer', NULL, '10 h', '10:30h'),
(2, 'Lawyer', NULL, '11 h', '11:30h'),
(3, 'Lawyer', NULL, '14 h', '14:30h'),
(4, 'Lawyer', NULL, '15 h', '15:30h'),
(5, 'Lawyer', NULL, '16 h', '16:30h');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `User_fullname` varchar(100) NOT NULL,
  `User_cin` varchar(100) NOT NULL,
  `User_age` varchar(100) NOT NULL,
  `User_profession` varchar(100) NOT NULL,
  `User_token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `User_fullname`, `User_cin`, `User_age`, `User_profession`, `User_token`) VALUES
(1, 'AMINE', 'Y465434', '22', 'Backend Developer', 'AMIN5PN8E7P45QI55OJ2Y465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sche_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sche_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
