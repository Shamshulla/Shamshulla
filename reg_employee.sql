-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 04:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_emp`
--

CREATE TABLE `attendance_emp` (
  `Sl.No` int(10) NOT NULL,
  `Employee_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Login_Time` time NOT NULL,
  `Logout_Time` time NOT NULL,
  `Attendance_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_emp`
--

INSERT INTO `attendance_emp` (`Sl.No`, `Employee_Name`, `Date`, `Login_Time`, `Logout_Time`, `Attendance_status`) VALUES
(1, 'Shamshulla', '2021-12-01', '09:00:00', '17:00:00', 'Present'),
(2, 'Shamshulla', '2021-12-02', '09:01:00', '16:54:00', 'Present'),
(3, 'Shamshulla', '2021-12-03', '09:14:00', '17:00:00', 'Present'),
(4, 'Shamshulla', '2021-12-06', '10:11:00', '14:22:00', 'Present'),
(5, 'Shamshulla', '2021-12-07', '11:14:00', '13:16:00', 'Present'),
(6, 'Shamshulla', '2021-12-08', '09:15:00', '18:04:00', 'Present'),
(7, 'Shamshulla', '2021-12-09', '10:19:00', '12:05:00', 'Present'),
(8, 'Shamshulla', '2021-12-10', '00:00:00', '00:00:00', 'Absent'),
(9, 'Shamshulla', '2021-12-13', '11:20:00', '18:32:00', 'Present'),
(10, 'Shamshulla', '2021-12-14', '09:21:00', '12:08:00', 'Present'),
(11, 'Shamshulla', '2021-12-15', '09:28:00', '17:33:00', 'Present'),
(12, 'Shamshulla', '2021-12-16', '09:19:00', '16:18:00', 'Present'),
(13, 'Shamshulla', '2021-12-17', '09:39:00', '17:22:00', 'Present'),
(14, 'Shamshulla', '2021-12-20', '00:00:00', '00:00:00', 'Absent'),
(15, 'Shamshulla', '2021-12-21', '09:29:00', '19:03:00', 'Present'),
(16, 'Shamshulla', '2021-12-22', '11:10:00', '17:56:00', 'Present'),
(17, 'Shamshulla', '2021-12-23', '09:06:00', '11:18:00', 'Present'),
(18, 'Shamshulla', '2021-12-24', '11:02:00', '18:25:00', 'Present'),
(19, 'Shamshulla', '2021-12-27', '09:31:00', '11:42:00', 'Present'),
(20, 'Shamshulla', '2021-12-28', '09:23:00', '14:50:00', 'Present'),
(21, 'Shamshulla', '2021-12-29', '10:00:00', '14:00:00', 'Present'),
(22, 'Shamshulla', '2021-12-30', '10:00:00', '13:58:00', 'Present'),
(23, 'Shamshulla', '2021-12-31', '10:39:00', '14:43:00', 'Present'),
(24, 'Shamshulla', '2022-01-01', '09:03:00', '17:41:00', 'Present'),
(25, 'Shamshulla', '2022-01-03', '09:45:00', '16:03:00', 'Present'),
(26, 'Shamshulla', '2022-01-04', '09:45:00', '16:58:00', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `user_id` int(10) NOT NULL,
  `Login_id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Personal_Mail` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Civil_Status` varchar(15) NOT NULL,
  `Home_Address` varchar(100) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Company_Name` varchar(50) NOT NULL,
  `Department_Name` varchar(30) NOT NULL,
  `Job_TitlePosition` varchar(30) NOT NULL,
  `Employee_ID` varchar(15) NOT NULL,
  `Company_Mail` varchar(30) NOT NULL,
  `Employee_Type` varchar(30) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`user_id`, `Login_id`, `FirstName`, `LastName`, `Personal_Mail`, `DOB`, `Phone_Number`, `Civil_Status`, `Home_Address`, `Gender`, `Company_Name`, `Department_Name`, `Job_TitlePosition`, `Employee_ID`, `Company_Mail`, `Employee_Type`, `reg_date`) VALUES
(1, 4, 'Shamshulla', 'Sam', 'shamshulla@gmail.com', '1999-02-08', 2147483647, 'Unmarried', 'Mubarak Manzil, Parappady, Nallur -574122, Karnataka', 'Male', 'PIT Solutions PVT. LTD', 'PHP', 'Associate Software Engineer', 'PIT1469', 'shamshulla@pitsolutions.com', 'Full-Time', '2022-01-12 07:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `login_emp`
--

CREATE TABLE `login_emp` (
  `Login_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_emp`
--

INSERT INTO `login_emp` (`Login_id`, `username`, `password`, `last_login`, `user_type`) VALUES
(1, 'Shamshu', '81dc9bdb52d04dc20036dbd8313ed055', '2022-01-11 20:52:16', 'Admin'),
(2, 'Samm', 'e82c4b19b8151ddc25d4d93baf7b908f', '2022-01-12 07:05:07', 'Employee'),
(3, 'Samm', 'e82c4b19b8151ddc25d4d93baf7b908f', '2022-01-12 07:06:49', 'Employee'),
(4, 'Samm', 'e82c4b19b8151ddc25d4d93baf7b908f', '2022-01-12 07:08:05', 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_emp`
--
ALTER TABLE `attendance_emp`
  ADD PRIMARY KEY (`Sl.No`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Login_id` (`Login_id`);

--
-- Indexes for table `login_emp`
--
ALTER TABLE `login_emp`
  ADD PRIMARY KEY (`Login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_emp`
--
ALTER TABLE `attendance_emp`
  MODIFY `Sl.No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_emp`
--
ALTER TABLE `login_emp`
  MODIFY `Login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
