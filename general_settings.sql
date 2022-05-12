-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 02:36 PM
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
  `region` varchar(50) DEFAULT NULL,
  `province` varchar(25) DEFAULT NULL,
  `municipality_city` varchar(25) DEFAULT NULL,
  `barangay` varchar(25) DEFAULT NULL,
  `street_sitio` varchar(25) DEFAULT NULL,
  `house_block_lotno` varchar(50) DEFAULT NULL,
  `subdivision_village` varchar(50) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `region`, `province`, `municipality_city`, `barangay`, `street_sitio`, `house_block_lotno`, `subdivision_village`, `zipcode`) VALUES
(1, NULL, 'ORIENTAL MINDORO', 'CALAPAN CITY ', NULL, NULL, NULL, NULL, NULL),
(2, 'REGION IV-B (MIMAROPA)', 'ORIENTAL MINDORO', 'CITY OF CALAPAN (CAPITAL)', 'BUCAYAO', 'SITIO BOUGAINVILLA', 'N/A', 'N/A', 5200);

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
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `office_id`, `username`, `email`, `_password`, `token`, `status`, `fname`, `mname`, `lname`, `role`, `date_registered`) VALUES
(7, 1, 'delizo-admin', 'jcdelizo14@gmail.com', '$2y$04$YpHyS4tPC6eyXrK6OxxlH.tCiO7JRz4xwXnESuTRPD5XivzRCfewu', '', '', 'JEREMIAH', 'CANCELA', 'DELIZO', 'Admin', '2022-04-06 00:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `deduction_id` int(11) NOT NULL,
  `deduction_name` varchar(25) NOT NULL,
  `deduction_base_amount` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deduction`
--

INSERT INTO `deduction` (`deduction_id`, `deduction_name`, `deduction_base_amount`) VALUES
(1, 'GSIS', 2500.00);

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
(1, 'CCS', 'COLLEGE COMPUTER STUDIES'),
(2, 'CAS', 'COLLEGE OF ARTS AND SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_desc` varchar(50) NOT NULL,
  `salary_grade` varchar(25) NOT NULL,
  `salary_rate_cat` varchar(10) NOT NULL,
  `salary_rate_amount` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_desc`, `salary_grade`, `salary_rate_cat`, `salary_rate_amount`) VALUES
(1, 'SAMPLE1', 'SALARY GRADE 2', 'MONTHLY', 1.00),
(2, 'SAMPLE2', 'SALARY GRADE 8', 'MONTHLY', 1.00);

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
(1, 'COS', 'CONTRACT OF SERVICE'),
(3, 'T', 'TEMPORARY'),
(5, 'JO', 'JOB ORDER');

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

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`leave_id`, `leave_desc`, `no_of_days`, `leave_specification`) VALUES
(1, 'SICK LEAVE', 12, 'WHENEVER YOUR SICK');

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
(1, 2, 'HRMO', 'HUMAN RESOURCE MANAGEMENT OFFICE');

-- --------------------------------------------------------

--
-- Table structure for table `pds_candidacy_info`
--

CREATE TABLE `pds_candidacy_info` (
  `candidacy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `political_candidate` varchar(10) DEFAULT NULL,
  `candidacy_details` varchar(255) DEFAULT NULL,
  `resigned_frm_gov` varchar(10) DEFAULT NULL,
  `resignation_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_candidacy_info`
--

INSERT INTO `pds_candidacy_info` (`candidacy_id`, `user_id`, `political_candidate`, `candidacy_details`, `resigned_frm_gov`, `resignation_desc`) VALUES
(1, 6, 'YES', 'sample', 'YES', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `pds_children_tbl`
--

CREATE TABLE `pds_children_tbl` (
  `child_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `xname` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_children_tbl`
--

INSERT INTO `pds_children_tbl` (`child_id`, `user_id`, `fname`, `mname`, `lname`, `xname`, `bday`) VALUES
(1, 6, 'ROBIN', 'MARANAN', 'ALMAREZ', 'II', '2001-01-01'),
(2, 6, 'MARK', 'MARANAN', 'ALMAREZ', '', '2001-01-01'),
(4, 6, 'JUAN', 'DELA', 'CRUZ', 'JR', '2001-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `pds_conviction_info`
--

CREATE TABLE `pds_conviction_info` (
  `conviction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `convicted` varchar(10) DEFAULT NULL,
  `conviction_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_conviction_info`
--

INSERT INTO `pds_conviction_info` (`conviction_id`, `user_id`, `convicted`, `conviction_details`) VALUES
(1, 6, 'YES', 'sample details');

-- --------------------------------------------------------

--
-- Table structure for table `pds_educational_background`
--

CREATE TABLE `pds_educational_background` (
  `educ_id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `highest_level` varchar(255) NOT NULL,
  `year_graduated` varchar(255) NOT NULL,
  `honors_received` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_educational_background`
--

INSERT INTO `pds_educational_background` (`educ_id`, `user_id`, `level`, `school_name`, `degree`, `from_date`, `to_date`, `highest_level`, `year_graduated`, `honors_received`) VALUES
(1, 6, 'ELEMENTARY', 'SAMPAGUITA ELEMENTARY SCHOOL', 'PRIMARY', '2005-06', '2013-03', 'BACHELOR\'S DEGREE', '2013', 'N/A'),
(2, 6, 'SECONDARY', 'BUCAYAO NATIONAL HIGH SCHOOL', 'SECONDARY', '2013-06', '2017-04', 'SECONDARY', '2017', 'n/a'),
(3, 6, 'COLLEGE', 'MINDORO STATE UNIVERSITY', 'BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY', '2019-08', '2023-07', 'BACHELOR\'S DEGREE', '2023', 'N/A'),
(6, 6, 'GRADUATE STUDIES', 'N/A', 'N/A', '', '', 'N/A', 'N/A', 'N/A'),
(7, 6, 'VOCATIONAL/TRADE COURSE', 'N/A', 'N/A', '', '', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `pds_father_tbl`
--

CREATE TABLE `pds_father_tbl` (
  `father_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `father_fname` varchar(255) NOT NULL,
  `father_mname` varchar(255) NOT NULL,
  `father_lname` varchar(255) NOT NULL,
  `father_ex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_father_tbl`
--

INSERT INTO `pds_father_tbl` (`father_id`, `user_id`, `father_fname`, `father_mname`, `father_lname`, `father_ex`) VALUES
(1, 6, 'ROBIN', 'MARANAN', 'ALMAREZ', '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_gov_issued_id_tbl`
--

CREATE TABLE `pds_gov_issued_id_tbl` (
  `gov_issued_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_desc` varchar(50) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `date_issued` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pds_immigrant_info`
--

CREATE TABLE `pds_immigrant_info` (
  `immigrant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foreign_residency` varchar(10) DEFAULT NULL,
  `residency_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_immigrant_info`
--

INSERT INTO `pds_immigrant_info` (`immigrant_id`, `user_id`, `foreign_residency`, `residency_details`) VALUES
(1, 6, 'YES', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `pds_learning_dev_intervention`
--

CREATE TABLE `pds_learning_dev_intervention` (
  `ldi_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `_from` varchar(255) NOT NULL,
  `_to` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sponsored` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_learning_dev_intervention`
--

INSERT INTO `pds_learning_dev_intervention` (`ldi_id`, `user_id`, `title`, `_from`, `_to`, `hours`, `type`, `sponsored`) VALUES
(1, 6, 'SAMPLE PROGRAM', '2010-02-20', '2020-12-12', '12', 'TYPE 1', 'ALMAREZ ROBIN '),
(2, 6, 'SAMPLE PROGRAM 2', '2001-01-01', '2010-01-01', '5', 'TYPE 1', 'ALMAREZ ROBIN '),
(4, 6, 'SAMPLE PROGRAM', '2010-02-20', '2020-12-12', '12', 'TYPE 1', 'ALMAREZ ROBIN ');

-- --------------------------------------------------------

--
-- Table structure for table `pds_mother_tbl`
--

CREATE TABLE `pds_mother_tbl` (
  `mother_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `maiden_fname` varchar(255) NOT NULL,
  `maiden_mname` varchar(255) NOT NULL,
  `maiden_lname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_mother_tbl`
--

INSERT INTO `pds_mother_tbl` (`mother_id`, `user_id`, `maiden_fname`, `maiden_mname`, `maiden_lname`, `lname`) VALUES
(1, 6, 'ROSE', 'PREDILLA', 'MARANAN', 'ALMAREZ');

-- --------------------------------------------------------

--
-- Table structure for table `pds_non_acad_recognition`
--

CREATE TABLE `pds_non_acad_recognition` (
  `recognition_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `award_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_non_acad_recognition`
--

INSERT INTO `pds_non_acad_recognition` (`recognition_id`, `user_id`, `award_desc`) VALUES
(2, 6, 'special recognition');

-- --------------------------------------------------------

--
-- Table structure for table `pds_organization_membership`
--

CREATE TABLE `pds_organization_membership` (
  `membership_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `assoc_name` varchar(255) DEFAULT NULL,
  `org_address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_organization_membership`
--

INSERT INTO `pds_organization_membership` (`membership_id`, `user_id`, `assoc_name`, `org_address`) VALUES
(1, 6, 'IT SOCIETY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pds_personal_info`
--

CREATE TABLE `pds_personal_info` (
  `personalinfo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `gsisno` varchar(25) NOT NULL,
  `pagibig_no` varchar(25) NOT NULL,
  `sss_no` varchar(25) NOT NULL,
  `tin_no` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pds_references`
--

CREATE TABLE `pds_references` (
  `ref_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ref_fname` varchar(50) NOT NULL,
  `ref_mname` varchar(50) NOT NULL,
  `ref_lname` varchar(50) NOT NULL,
  `ref_add` int(11) NOT NULL,
  `ref_telno` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_references`
--

INSERT INTO `pds_references` (`ref_id`, `user_id`, `ref_fname`, `ref_mname`, `ref_lname`, `ref_add`, `ref_telno`) VALUES
(2, 6, 'arby lynshel', 'cantos', 'albo', 1, '0995006183');

-- --------------------------------------------------------

--
-- Table structure for table `pds_relative_info`
--

CREATE TABLE `pds_relative_info` (
  `relative_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `third_degree` varchar(10) NOT NULL,
  `fourth_degree` varchar(10) NOT NULL,
  `relative_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_relative_info`
--

INSERT INTO `pds_relative_info` (`relative_id`, `user_id`, `third_degree`, `fourth_degree`, `relative_details`) VALUES
(2, 6, 'YES', 'YES', 'tito');

-- --------------------------------------------------------

--
-- Table structure for table `pds_request_hist_tbl`
--

CREATE TABLE `pds_request_hist_tbl` (
  `hist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date_submitted` varchar(255) NOT NULL,
  `date_returned` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_request_hist_tbl`
--

INSERT INTO `pds_request_hist_tbl` (`hist_id`, `user_id`, `remarks`, `date_submitted`, `date_returned`) VALUES
(1, 6, 'REJECT', '2022-05-04', '2022-05-04 00:00:00'),
(2, 6, 'APPROVED', '2022-05-04 00:00:00', '2022-05-04 12:40:14'),
(3, 6, 'REJECT', '2022-05-04 20:08:39', '2022-05-04 20:09:03'),
(4, 6, 'APPROVED', '2022-05-04 23:26:10', '2022-05-04 23:29:47'),
(5, 6, 'REJECT', '2022-05-04 23:26:10', '2022-05-04 23:38:15'),
(6, 6, 'APPROVED', '2022-05-04 23:26:10', '2022-05-04 23:38:40'),
(7, 6, 'REJECT', '2022-05-04 23:26:10', '2022-05-05 18:26:15'),
(8, 6, 'APPROVED', '2022-05-04 23:26:10', '2022-05-05 18:26:57'),
(9, 6, 'APPROVED', '2022-05-05 18:27:59', '2022-05-05 18:28:15'),
(10, 6, 'REJECT', '2022-05-05 18:27:59', '2022-05-06 19:32:22'),
(0, 7, 'APPROVED', '2022-05-08 17:05:03', '2022-05-08 17:05:33'),
(0, 6, 'REJECT', '2022-05-05 18:27:59', '2022-05-09 19:24:12'),
(0, 6, 'REJECT', '2022-05-05 18:27:59', '2022-05-11 08:43:38'),
(0, 6, 'REJECT', '2022-05-05 18:27:59', '2022-05-12 10:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `pds_request_tbl`
--

CREATE TABLE `pds_request_tbl` (
  `pds_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_of_pds` varchar(255) NOT NULL,
  `stat_emp_notif` varchar(1) NOT NULL DEFAULT '0',
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp(),
  `date_returned` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_request_tbl`
--

INSERT INTO `pds_request_tbl` (`pds_id`, `user_id`, `status_of_pds`, `stat_emp_notif`, `date_submitted`, `date_returned`) VALUES
(8, 6, 'REJECT', '1', '2022-05-05 18:27:59', '2022-05-05 18:27:59'),
(0, 7, 'APPROVED', '1', '2022-05-08 17:05:03', '2022-05-08 17:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `pds_separation_info`
--

CREATE TABLE `pds_separation_info` (
  `separation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `separated_from_service` varchar(25) DEFAULT NULL,
  `separation_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_separation_info`
--

INSERT INTO `pds_separation_info` (`separation_id`, `user_id`, `separated_from_service`, `separation_desc`) VALUES
(4, 6, 'YES', 'sample'),
(5, 6, 'NO', ''),
(6, 6, 'NO', '');

-- --------------------------------------------------------

--
-- Table structure for table `pds_service_eligibility_tbl`
--

CREATE TABLE `pds_service_eligibility_tbl` (
  `eligibility_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `date_conferment` varchar(255) NOT NULL,
  `place_conferment` varchar(255) NOT NULL,
  `license_num` varchar(255) NOT NULL,
  `validity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_service_eligibility_tbl`
--

INSERT INTO `pds_service_eligibility_tbl` (`eligibility_id`, `user_id`, `service`, `rating`, `date_conferment`, `place_conferment`, `license_num`, `validity`) VALUES
(0, 6, 'LICENSURE EXAM FOR TEACHERS', '75', '2016-08-12', 'LUCENA', '123445', '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `pds_specialskill_and_hobby`
--

CREATE TABLE `pds_specialskill_and_hobby` (
  `ss_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `special_skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_specialskill_and_hobby`
--

INSERT INTO `pds_specialskill_and_hobby` (`ss_id`, `user_id`, `special_skill`) VALUES
(1, 6, 'juggling'),
(2, 6, 'programming'),
(3, 6, 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `pds_special_privilege_info`
--

CREATE TABLE `pds_special_privilege_info` (
  `sp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `member_of_ig` varchar(10) DEFAULT NULL,
  `ig_desc` varchar(255) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `pwd_id_no` varchar(25) DEFAULT NULL,
  `solo_parent` varchar(10) DEFAULT NULL,
  `solo_parent_id_number` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_special_privilege_info`
--

INSERT INTO `pds_special_privilege_info` (`sp_id`, `user_id`, `member_of_ig`, `ig_desc`, `pwd`, `pwd_id_no`, `solo_parent`, `solo_parent_id_number`) VALUES
(1, 6, 'YES', 'asdf', 'YES', 'asdf', 'YES', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `pds_spouse_tbl`
--

CREATE TABLE `pds_spouse_tbl` (
  `spouse_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `name_ext` varchar(5) DEFAULT NULL,
  `occupation` varchar(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `bus_add` varchar(255) NOT NULL,
  `tel_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_spouse_tbl`
--

INSERT INTO `pds_spouse_tbl` (`spouse_id`, `user_id`, `fname`, `mname`, `lname`, `name_ext`, `occupation`, `bus_name`, `bus_add`, `tel_num`) VALUES
(1, 6, 'ALLEYSA', 'ORILLO', 'ALMAREZ', 'N/A', 'HOUSEWIFE', 'NONE', 'NONE', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pds_violation_info`
--

CREATE TABLE `pds_violation_info` (
  `violation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_offense` varchar(10) DEFAULT NULL,
  `offense_desc` varchar(255) DEFAULT NULL,
  `criminal_charged` varchar(10) DEFAULT NULL,
  `crime_details` varchar(255) DEFAULT NULL,
  `date_crime_filed` varchar(255) DEFAULT NULL,
  `criminal_case_status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_violation_info`
--

INSERT INTO `pds_violation_info` (`violation_id`, `user_id`, `admin_offense`, `offense_desc`, `criminal_charged`, `crime_details`, `date_crime_filed`, `criminal_case_status`) VALUES
(1, 6, 'NO', '', 'NO', 'stafa', '2022-05-01', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `pds_voluntary_work_tbl`
--

CREATE TABLE `pds_voluntary_work_tbl` (
  `voluntary_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `org_address` int(11) DEFAULT NULL,
  `_from` varchar(255) NOT NULL,
  `_to` varchar(255) NOT NULL,
  `hours` int(11) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds_voluntary_work_tbl`
--

INSERT INTO `pds_voluntary_work_tbl` (`voluntary_id`, `user_id`, `name`, `org_address`, `_from`, `_to`, `hours`, `position`) VALUES
(6, 6, 'SAMPAGUITA ELEMENTARY SCHOOL', 1, '2022-05-01', '2022-06-11', 40, 'BAGGER'),
(7, 6, 'SAMPAGUITA ELEMENTARY SCHOOL', 1, '2019-01-01', '2022-05-28', 28, 'JR. WEB DEVELOPER');

-- --------------------------------------------------------

--
-- Table structure for table `pds_work_experience_tbl`
--

CREATE TABLE `pds_work_experience_tbl` (
  `work_exp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `_from` varchar(255) NOT NULL,
  `_to` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `monthly_salary` varchar(255) NOT NULL,
  `salary_grade` varchar(255) NOT NULL,
  `step_inc` varchar(255) NOT NULL,
  `appointment_status` varchar(15) NOT NULL,
  `government` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 'C19-0651', 'almarezrobin24662@gmail.com', 'almarez', '$2y$04$caRiRYHmOUdhVYXDrNVrfucBE.dVcABF527SffnlvacvgIuFP5TMK', NULL, NULL, 'Teaching', '2022-04-03 13:18:53'),
(7, 'C19-0881', 'jcdelizo@gmail.com', 'mayamaya', '$2y$04$Cj2VmeGqT4AxVeQb36wNiu4G0nEBZYh7Iur.jnE3RvFrj8050t9g6', NULL, NULL, 'Teaching', '2022-04-12 12:23:18'),
(13, 'C19-0881', 'admin@ave.com', 'mhica', '$2y$04$IX1ZxKekJykyOyiq2HCN4.ZsgbKE6aIsqQ8/l68dWWqiOLhE9B0nG', NULL, NULL, 'Teaching', '2022-04-13 00:51:56'),
(14, 'C19-0881', 'admin@ave.com', 'mhica', '$2y$04$p591pQ4IzpMjCoEFCEnpz.2zdS6rJLNEoLA0Lzsced1DtY2AsplbK', NULL, NULL, 'Teaching', '2022-04-13 00:53:16'),
(15, 'MCC 1234', 'jcdelizo14@gmail.com', 'putomaya', '$2y$04$T0i5UGrZSvVr2p1Y5ZX.o.5DZdjswXxIHveJOoAK.LAER/6M1wswq', NULL, NULL, 'Teaching', '2022-04-19 22:36:49'),
(16, 'MCC 2022', 'emp@sample.com', 'sampleUsername', '$2y$04$IrgEuJAMVXmLNHqD3sq5cepR7dXv80w.rPigW/cPT.AfGAPHIKMEm', NULL, NULL, 'Teaching', '2022-04-19 23:38:28'),
(17, 'MCC 2022-01', 'emp@2022.com', 'johndoe', '$2y$04$cWo1gjr2rEZeOfLIvUZMLeAZgNSb55h0IJowSxWrbEtJgMdkX9UfW', NULL, NULL, 'Teaching', '2022-04-19 23:57:54'),
(18, 'MCC 2022-02', 'mcc202202@sample.com', 'sarahdoe', '$2y$04$V525PS/DCDrgfLvHvSLAWuJVJN0l10KELaWf1Y0wiprfLs9NNWTkO', NULL, NULL, 'Teaching', '2022-04-20 00:02:06'),
(19, 'MCC 2022-03', 'sample@email.com', 'johnny101', '$2y$04$iXhN9cR4n6z1ojYfeMEO7OUbTTiT6rheO6iMEGhywlqYYYbZWFZyq', NULL, NULL, 'Teaching', '2022-04-20 00:06:30'),
(20, 'MCC2022-03', 'hr@sample.com', 'javier.mhica', '$2y$04$v7OBZoxVp8mbOJ3S8dlgguevs8x5OXo4X1D6BMXaKgiVZ28ycuSuq', NULL, NULL, 'Teaching', '2022-04-20 08:49:25'),
(21, 'MCC 12-1234', 'sample@gmail.com', 'samplesample', '$2y$04$wes1kT4x.YY.0VSM73Pn3uj7qyZihPDiUdBQd74QlCenXGK0/0aNm', NULL, NULL, 'Teaching', '2022-05-05 18:18:55'),
(22, 'MCC 12-1234', 'sample@gmail.com', 'samplesample', '$2y$04$2a1op.AcLgh/NJnu71JJeu7rMlO1w0RIn70lg81k3ixRE8QSIqOou', NULL, NULL, 'Teaching', '2022-05-05 18:19:35'),
(23, 'MCC 12-1234', 'sample@gmail.com', 'samplesample', '$2y$04$AsSr5G2rpJFSw0E8SzQbNeVCHEPMGvyNTKgVhgsX6h4wUPsZG4kt6', NULL, NULL, 'Teaching', '2022-05-05 18:19:40'),
(24, 'MCC 12-1234', 'sample@gmail.com', 'samplesample', '$2y$04$Azw36Gxb0dgVN1ty/Be4z.AWxPsbG7XKWTHLn0lgxBXHMsKVpw81S', NULL, NULL, 'Teaching', '2022-05-05 18:20:09');

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
-- Table structure for table `user_pds_file`
--

CREATE TABLE `user_pds_file` (
  `upf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pds_file` blob NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `birth_place_address_id` int(11) DEFAULT NULL,
  `residential_address_id` int(11) DEFAULT NULL,
  `permanent_address_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `name_ex` varchar(25) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` varchar(25) NOT NULL,
  `height` varchar(5) DEFAULT NULL,
  `weight` varchar(5) DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `gsisno` varchar(25) DEFAULT NULL,
  `pag_ibig_no` varchar(25) DEFAULT NULL,
  `philhealth_no` varchar(25) DEFAULT NULL,
  `sss_no` varchar(25) DEFAULT NULL,
  `tin_no` varchar(25) DEFAULT NULL,
  `agency_emp_no` varchar(25) DEFAULT NULL,
  `citizenship` varchar(25) DEFAULT NULL,
  `ship_by` varchar(20) DEFAULT NULL,
  `citizenship_country` varchar(50) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `e_sign` varchar(255) DEFAULT NULL,
  `salary_rate_cat` varchar(10) DEFAULT NULL,
  `salary_rate_amount` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`profile_id`, `user_id`, `birth_place_address_id`, `residential_address_id`, `permanent_address_id`, `status_id`, `designation_id`, `office_id`, `f_name`, `m_name`, `l_name`, `name_ex`, `date_of_birth`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsisno`, `pag_ibig_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_emp_no`, `citizenship`, `ship_by`, `citizenship_country`, `telephone`, `mobile`, `photo`, `e_sign`, `salary_rate_cat`, `salary_rate_amount`) VALUES
(8, 6, 1, 2, 2, 3, 1, 1, 'ROBIN', 'MARANAN', 'ALMAREZ', 'N/A', '2001-05-01', 'MALE', 'SINGLE', '1.5', '50', 'AB', '122', '122', '343', '343', '121', '234', 'FILIPINO', 'N/A', 'N/A', '9950063183', '9950063183', 'IMG_20190128_074128_845.JPG', 'Screenshot (8).png', NULL, NULL),
(9, 7, NULL, NULL, NULL, 3, 1, 1, 'JEREMIAH', 'CANCELA', 'DELIZO', 'N/A', '2000-11-25', 'MALE', 'SINGLE', '162', '54', 'AB', '12', '12', '12', '12', '12', '12', 'FILIPINO', 'N/A', 'N/A', '09300005339', '09300005339', 'w3.jpg', '2020_12_02 2_42 PM Office Lens.jpg', NULL, NULL),
(13, 13, NULL, NULL, NULL, 3, 1, 1, 'MHICA MAY', 'JABAGAT', 'JAVIER', '', '2022-03-29', 'FEMALE', 'SINGLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09123456789', '09123456789', 'resume.jpg', NULL, NULL, NULL),
(24, 16, NULL, NULL, NULL, 1, 1, 1, 'JUAN', 'TOLENADA', 'DELA CRUZ', 'JR.', '1999-11-11', 'MALE', 'SINGLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09123456789', '09123456789', NULL, NULL, NULL, NULL),
(25, 17, NULL, NULL, NULL, 1, 2, 1, 'JOHN', 'OH', 'DOE', 'III', '1995-01-30', 'MALE', 'SINGLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09789122331', '09789122331', 'prgrammerInTheMaking.png', NULL, NULL, NULL),
(27, 20, NULL, NULL, NULL, 1, 1, 1, 'MHICA', 'JABAGAT', 'JAVIER', 'N/A', '0000-00-00', 'MALE', 'SINGLE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09557611021', '09557611021', NULL, NULL, NULL, NULL),
(28, 18, NULL, NULL, NULL, 1, 1, 1, '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `pds_candidacy_info`
--
ALTER TABLE `pds_candidacy_info`
  ADD PRIMARY KEY (`candidacy_id`),
  ADD KEY `FK_user_TO_candidacy_info` (`user_id`);

--
-- Indexes for table `pds_children_tbl`
--
ALTER TABLE `pds_children_tbl`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `FK_user_TO_children_tbl` (`user_id`);

--
-- Indexes for table `pds_conviction_info`
--
ALTER TABLE `pds_conviction_info`
  ADD PRIMARY KEY (`conviction_id`);

--
-- Indexes for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  ADD PRIMARY KEY (`educ_id`),
  ADD KEY `FK_user_TO_educational_background` (`user_id`);

--
-- Indexes for table `pds_father_tbl`
--
ALTER TABLE `pds_father_tbl`
  ADD PRIMARY KEY (`father_id`),
  ADD KEY `FK_user_TO_father_tbl` (`user_id`);

--
-- Indexes for table `pds_gov_issued_id_tbl`
--
ALTER TABLE `pds_gov_issued_id_tbl`
  ADD PRIMARY KEY (`gov_issued_id`),
  ADD KEY `FK_user_TO_gov_issued_id_tbl` (`user_id`);

--
-- Indexes for table `pds_immigrant_info`
--
ALTER TABLE `pds_immigrant_info`
  ADD PRIMARY KEY (`immigrant_id`),
  ADD KEY `FK_user_TO_immigrant_info` (`user_id`);

--
-- Indexes for table `pds_learning_dev_intervention`
--
ALTER TABLE `pds_learning_dev_intervention`
  ADD PRIMARY KEY (`ldi_id`),
  ADD KEY `FK_user_TO_learning_dev_intervention` (`user_id`);

--
-- Indexes for table `pds_mother_tbl`
--
ALTER TABLE `pds_mother_tbl`
  ADD PRIMARY KEY (`mother_id`),
  ADD KEY `FK_user_TO_mother_tbl` (`user_id`);

--
-- Indexes for table `pds_non_acad_recognition`
--
ALTER TABLE `pds_non_acad_recognition`
  ADD PRIMARY KEY (`recognition_id`),
  ADD KEY `FK_user_TO_non_acad_recognition` (`user_id`);

--
-- Indexes for table `pds_organization_membership`
--
ALTER TABLE `pds_organization_membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `FK_user_TO_organization_membership` (`user_id`),
  ADD KEY `FK_address_TO_organization_membership` (`org_address`);

--
-- Indexes for table `pds_personal_info`
--
ALTER TABLE `pds_personal_info`
  ADD PRIMARY KEY (`personalinfo_id`),
  ADD KEY `FK_user_TO_personal_info` (`user_id`);

--
-- Indexes for table `pds_references`
--
ALTER TABLE `pds_references`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `FK_user_TO__references` (`user_id`);

--
-- Indexes for table `pds_relative_info`
--
ALTER TABLE `pds_relative_info`
  ADD PRIMARY KEY (`relative_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `FK_user_TO_relative_info` (`user_id`);

--
-- Indexes for table `pds_separation_info`
--
ALTER TABLE `pds_separation_info`
  ADD PRIMARY KEY (`separation_id`),
  ADD KEY `FK_user_TO_separation_info` (`user_id`);

--
-- Indexes for table `pds_service_eligibility_tbl`
--
ALTER TABLE `pds_service_eligibility_tbl`
  ADD PRIMARY KEY (`eligibility_id`),
  ADD KEY `FK_user_TO_service_eligibility_tbl` (`user_id`);

--
-- Indexes for table `pds_specialskill_and_hobby`
--
ALTER TABLE `pds_specialskill_and_hobby`
  ADD PRIMARY KEY (`ss_id`),
  ADD KEY `FK_user_TO_specialskill_and_hobby` (`user_id`);

--
-- Indexes for table `pds_special_privilege_info`
--
ALTER TABLE `pds_special_privilege_info`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `FK_user_TO_special_privilege_info` (`user_id`);

--
-- Indexes for table `pds_spouse_tbl`
--
ALTER TABLE `pds_spouse_tbl`
  ADD PRIMARY KEY (`spouse_id`),
  ADD KEY `FK_user_TO_spouse_tbl` (`user_id`);

--
-- Indexes for table `pds_violation_info`
--
ALTER TABLE `pds_violation_info`
  ADD PRIMARY KEY (`violation_id`),
  ADD KEY `FK_user_TO_violation_info` (`user_id`);

--
-- Indexes for table `pds_voluntary_work_tbl`
--
ALTER TABLE `pds_voluntary_work_tbl`
  ADD PRIMARY KEY (`voluntary_id`),
  ADD KEY `FK_user_TO_voluntary_work_tbl` (`user_id`),
  ADD KEY `FK_address_TO_voluntary_work_tbl` (`org_address`);

--
-- Indexes for table `pds_work_experience_tbl`
--
ALTER TABLE `pds_work_experience_tbl`
  ADD PRIMARY KEY (`work_exp_id`),
  ADD KEY `FK_user_TO_work_experience_tbl` (`user_id`);

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
-- Indexes for table `user_pds_file`
--
ALTER TABLE `user_pds_file`
  ADD PRIMARY KEY (`upf_id`),
  ADD KEY `FK_user_TO_user_pds_file` (`user_id`);

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
  ADD KEY `FK_designation_TO_user_profile` (`designation_id`),
  ADD KEY `status_id` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deduction`
--
ALTER TABLE `deduction`
  MODIFY `deduction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pds_candidacy_info`
--
ALTER TABLE `pds_candidacy_info`
  MODIFY `candidacy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pds_children_tbl`
--
ALTER TABLE `pds_children_tbl`
  MODIFY `child_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pds_conviction_info`
--
ALTER TABLE `pds_conviction_info`
  MODIFY `conviction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  MODIFY `educ_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pds_immigrant_info`
--
ALTER TABLE `pds_immigrant_info`
  MODIFY `immigrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pds_learning_dev_intervention`
--
ALTER TABLE `pds_learning_dev_intervention`
  MODIFY `ldi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pds_non_acad_recognition`
--
ALTER TABLE `pds_non_acad_recognition`
  MODIFY `recognition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pds_organization_membership`
--
ALTER TABLE `pds_organization_membership`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pds_references`
--
ALTER TABLE `pds_references`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pds_relative_info`
--
ALTER TABLE `pds_relative_info`
  MODIFY `relative_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pds_separation_info`
--
ALTER TABLE `pds_separation_info`
  MODIFY `separation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pds_specialskill_and_hobby`
--
ALTER TABLE `pds_specialskill_and_hobby`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pds_special_privilege_info`
--
ALTER TABLE `pds_special_privilege_info`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pds_violation_info`
--
ALTER TABLE `pds_violation_info`
  MODIFY `violation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pds_voluntary_work_tbl`
--
ALTER TABLE `pds_voluntary_work_tbl`
  MODIFY `voluntary_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pds_work_experience_tbl`
--
ALTER TABLE `pds_work_experience_tbl`
  MODIFY `work_exp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_deduction`
--
ALTER TABLE `user_deduction`
  MODIFY `user_deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Constraints for table `pds_candidacy_info`
--
ALTER TABLE `pds_candidacy_info`
  ADD CONSTRAINT `FK_user_TO_candidacy_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_children_tbl`
--
ALTER TABLE `pds_children_tbl`
  ADD CONSTRAINT `FK_user_TO_children_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_educational_background`
--
ALTER TABLE `pds_educational_background`
  ADD CONSTRAINT `FK_user_TO_educational_background` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_father_tbl`
--
ALTER TABLE `pds_father_tbl`
  ADD CONSTRAINT `FK_user_TO_father_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_gov_issued_id_tbl`
--
ALTER TABLE `pds_gov_issued_id_tbl`
  ADD CONSTRAINT `FK_user_TO_gov_issued_id_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_immigrant_info`
--
ALTER TABLE `pds_immigrant_info`
  ADD CONSTRAINT `FK_user_TO_immigrant_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_learning_dev_intervention`
--
ALTER TABLE `pds_learning_dev_intervention`
  ADD CONSTRAINT `FK_user_TO_learning_dev_intervention` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_mother_tbl`
--
ALTER TABLE `pds_mother_tbl`
  ADD CONSTRAINT `FK_user_TO_mother_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_non_acad_recognition`
--
ALTER TABLE `pds_non_acad_recognition`
  ADD CONSTRAINT `FK_user_TO_non_acad_recognition` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_organization_membership`
--
ALTER TABLE `pds_organization_membership`
  ADD CONSTRAINT `FK_address_TO_organization_membership` FOREIGN KEY (`org_address`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_user_TO_organization_membership` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_personal_info`
--
ALTER TABLE `pds_personal_info`
  ADD CONSTRAINT `FK_user_TO_personal_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_references`
--
ALTER TABLE `pds_references`
  ADD CONSTRAINT `FK_user_TO__references` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_relative_info`
--
ALTER TABLE `pds_relative_info`
  ADD CONSTRAINT `FK_user_TO_relative_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_separation_info`
--
ALTER TABLE `pds_separation_info`
  ADD CONSTRAINT `FK_user_TO_separation_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_service_eligibility_tbl`
--
ALTER TABLE `pds_service_eligibility_tbl`
  ADD CONSTRAINT `FK_user_TO_service_eligibility_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_specialskill_and_hobby`
--
ALTER TABLE `pds_specialskill_and_hobby`
  ADD CONSTRAINT `FK_user_TO_specialskill_and_hobby` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_special_privilege_info`
--
ALTER TABLE `pds_special_privilege_info`
  ADD CONSTRAINT `FK_user_TO_special_privilege_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_spouse_tbl`
--
ALTER TABLE `pds_spouse_tbl`
  ADD CONSTRAINT `FK_user_TO_spouse_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_violation_info`
--
ALTER TABLE `pds_violation_info`
  ADD CONSTRAINT `FK_user_TO_violation_info` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_voluntary_work_tbl`
--
ALTER TABLE `pds_voluntary_work_tbl`
  ADD CONSTRAINT `FK_address_TO_voluntary_work_tbl` FOREIGN KEY (`org_address`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_user_TO_voluntary_work_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pds_work_experience_tbl`
--
ALTER TABLE `pds_work_experience_tbl`
  ADD CONSTRAINT `FK_user_TO_work_experience_tbl` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_deduction`
--
ALTER TABLE `user_deduction`
  ADD CONSTRAINT `FK_deduction_TO_user_deduction` FOREIGN KEY (`deduction_id`) REFERENCES `deduction` (`deduction_id`),
  ADD CONSTRAINT `FK_user_TO_user_deduction` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_pds_file`
--
ALTER TABLE `user_pds_file`
  ADD CONSTRAINT `FK_user_TO_user_pds_file` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `FK_address_TO_user_profile` FOREIGN KEY (`residential_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_address_TO_user_profile1` FOREIGN KEY (`permanent_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_address_TO_user_profile2` FOREIGN KEY (`birth_place_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `FK_designation_TO_user_profile` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `FK_employee_status_TO_user_profile` FOREIGN KEY (`status_id`) REFERENCES `employee_status` (`status_id`),
  ADD CONSTRAINT `FK_office_TO_user_profile` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `FK_user_TO_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
