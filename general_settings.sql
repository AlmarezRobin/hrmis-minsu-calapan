-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 03:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `general_settings`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `country` varchar(25) NOT NULL,
  `region` varchar(25) NOT NULL,
  `province` varchar(25) NOT NULL,
  `municipality_city` varchar(25) NOT NULL,
  `barangay` varchar(25) NOT NULL,
  `street_sitio` varchar(25) NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `office` varchar(50) NOT NULL,
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `deduction_id` int(11) NOT NULL,
  `deduction_name` varchar(25) NOT NULL,
  `deduction_base_amount` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_code` varchar(50) NOT NULL,
  `dept_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_code`, `dept_description`) VALUES
(1, 'DEPARTMENT12', 'BSIT'),
(2, 'DEPT2', 'DEPARTMENT2');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_desc` varchar(50) NOT NULL,
  `salary_grade` varchar(10) NOT NULL,
  `salary_rate_cat` varchar(10) NOT NULL,
  `salary_rate_amount` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_desc`, `salary_grade`, `salary_rate_cat`, `salary_rate_amount`) VALUES
(1, 'SAMPLE1', 'SALARY GRA', 'MONTHLY', 1.00),
(2, 'SAMPLE2', 'SALARY GRA', 'MONTHLY', 1.00),
(3, 'SAMPLE2', 'SALARY GRA', 'MONTHLY', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `employee_status`
--

CREATE TABLE `employee_status` (
  `status_id` int(11) NOT NULL,
  `status_code` varchar(10) NOT NULL,
  `status_desc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_status`
--

INSERT INTO `employee_status` (`status_id`, `status_code`, `status_desc`) VALUES
(1, 'COS', 'CONTRACT OF SERVICE');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE `leave_tbl` (
  `leave_id` int(11) NOT NULL,
  `leave_desc` varchar(25) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `leave_specification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `office_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `office_code` varchar(50) NOT NULL,
  `office_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `dept_id`, `office_code`, `office_description`) VALUES
(1, 1, 'ASFSDF', 'ASDFSFDS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `_password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `is_activated` int(11) DEFAULT NULL,
  `role` varchar(25) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `id_number`, `email`, `username`, `_password`, `token`, `is_activated`, `role`, `date_created`) VALUES
(2, 'C19-0651', 'almarez24662@gmail.com', 'almarez', '$2y$04$yTUw34YsVNfDy5OkwggLBOsC1sRjaLxgyxDbeZ4JVWSvgkj/W9dl2', NULL, NULL, 'Teaching', '2022-03-25 08:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_deduction`
--

CREATE TABLE `user_deduction` (
  `user_deduction_id` int(11) NOT NULL,
  `deduction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deduction_amount` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `residential_address_id` int(11) NOT NULL,
  `permanent_address_id` int(11) NOT NULL,
  `birth_place_address_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `name_ex` varchar(25) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` varchar(25) NOT NULL,
  `citizenship` varchar(25) NOT NULL,
  `citizenship_country` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` blob DEFAULT NULL,
  `e_sign` blob NOT NULL,
  `salary_rate_cat` varchar(10) NOT NULL,
  `salary_rate_amount` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `FK_office_TO_admin` (`office_id`);

--
-- Indexes for table `deduction`
--
ALTER TABLE `deduction`
  ADD PRIMARY KEY (`deduction_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_status`
--
ALTER TABLE `employee_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`),
  ADD KEY `FK_department_TO_office` (`dept_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_deduction`
--
ALTER TABLE `user_deduction`
  ADD PRIMARY KEY (`user_deduction_id`),
  ADD KEY `FK_user_TO_user_deduction` (`user_id`),
  ADD KEY `FK_deduction_TO_user_deduction` (`deduction_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `FK_user_TO_user_profile` (`user_id`),
  ADD KEY `FK_address_TO_user_profile` (`residential_address_id`),
  ADD KEY `FK_address_TO_user_profile1` (`permanent_address_id`),
  ADD KEY `FK_address_TO_user_profile2` (`birth_place_address_id`),
  ADD KEY `FK_office_TO_user_profile` (`office_id`),
  ADD KEY `FK_designation_TO_user_profile` (`designation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_status`
--
ALTER TABLE `employee_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_deduction`
--
ALTER TABLE `user_deduction`
  MODIFY `user_deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_office_TO_admin` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`);

--
-- Constraints for table `office`
--
ALTER TABLE `office`
  ADD CONSTRAINT `FK_department_TO_office` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `user_deduction`
--
ALTER TABLE `user_deduction`
  ADD CONSTRAINT `FK_deduction_TO_user_deduction` FOREIGN KEY (`deduction_id`) REFERENCES `deduction` (`deduction_id`),
  ADD CONSTRAINT `FK_user_TO_user_deduction` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `FK_address_TO_user_profile` FOREIGN KEY (`residential_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_address_TO_user_profile1` FOREIGN KEY (`permanent_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_address_TO_user_profile2` FOREIGN KEY (`birth_place_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_designation_TO_user_profile` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `FK_office_TO_user_profile` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `FK_user_TO_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
