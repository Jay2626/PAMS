-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 11:04 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coa5tso_pams`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` varchar(25) NOT NULL,
  `assignment_id` varchar(25) NOT NULL,
  `ar_expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assigned_employees`
--

CREATE TABLE `assigned_employees` (
  `project_id` varchar(25) NOT NULL,
  `employee_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assigned_projects`
--

CREATE TABLE `assigned_projects` (
  `assignment_id` varchar(25) NOT NULL,
  `project_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `doc_id` varchar(25) NOT NULL,
  `assignment_id` varchar(25) NOT NULL,
  `account_id` varchar(25) NOT NULL,
  `doc_filename` varchar(50) NOT NULL,
  `doc_type` varchar(25) NOT NULL,
  `doc_size` varchar(25) NOT NULL,
  `doc_path` varchar(200) NOT NULL,
  `doc_upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` varchar(25) NOT NULL,
  `emp_firstname` varchar(45) NOT NULL,
  `emp_middlename` varchar(45) NOT NULL,
  `emp_lastname` varchar(45) NOT NULL,
  `emp_sex` varchar(10) NOT NULL,
  `emp_birthdate` date NOT NULL,
  `emp_home_address` varchar(200) NOT NULL,
  `emp_current_address` varchar(200) NOT NULL,
  `emp_mobile` varchar(20) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_status` varchar(20) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  `emp_position2` varchar(50) NOT NULL,
  `emp_user_image` varchar(45) NOT NULL,
  `emp_cover_image` varchar(45) NOT NULL,
  `emp_theme` varchar(25) NOT NULL,
  `emp_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ipcr`
--

CREATE TABLE `ipcr` (
  `ipcr_id` varchar(25) NOT NULL,
  `employee_id` varchar(25) NOT NULL,
  `i_recommends_approval` varchar(45) DEFAULT NULL,
  `i_approved_by` varchar(45) DEFAULT NULL,
  `i_date` timestamp NULL DEFAULT NULL,
  `i_total_average` varchar(45) DEFAULT NULL,
  `i_personality` varchar(45) DEFAULT NULL,
  `i_final_rating` varchar(45) DEFAULT NULL,
  `i_adjectival_rating` varchar(45) DEFAULT NULL,
  `i_rater` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ipcr_data`
--

CREATE TABLE `ipcr_data` (
  `ipcr_data_id` varchar(25) NOT NULL,
  `ipcr_id` varchar(25) NOT NULL,
  `account_id` varchar(25) NOT NULL,
  `id_date` date NOT NULL,
  `id_output_type` varchar(50) NOT NULL,
  `id_output` varchar(250) NOT NULL,
  `id_success_indicator` varchar(250) NOT NULL,
  `id_actual_accomplishments` varchar(200) NOT NULL,
  `id_quality` float NOT NULL,
  `id_quantity` float NOT NULL,
  `id_timeliness` float NOT NULL,
  `id_average` float NOT NULL,
  `id_remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `account_id` varchar(25) NOT NULL,
  `assignment_id` varchar(25) NOT NULL,
  `no_details` varchar(200) DEFAULT NULL,
  `no_date` date DEFAULT NULL,
  `no_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` varchar(25) NOT NULL,
  `reference_no` varchar(25) DEFAULT NULL,
  `p_name` varchar(45) DEFAULT NULL,
  `p_cost` varchar(45) DEFAULT NULL,
  `p-requesting_agency` varchar(45) DEFAULT NULL,
  `p_location` varchar(45) DEFAULT NULL,
  `p_contractor` varchar(45) DEFAULT NULL,
  `p_type` varchar(45) DEFAULT NULL,
  `p_status` varchar(45) DEFAULT NULL,
  `p_creation_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `rep_id` varchar(25) NOT NULL,
  `project_id` varchar(25) NOT NULL,
  `account_id` varchar(25) NOT NULL,
  `rep_filename` varchar(45) DEFAULT NULL,
  `rep_category` varchar(25) NOT NULL,
  `rep_size` varchar(25) NOT NULL,
  `rep_path` varchar(45) DEFAULT NULL,
  `re_upload_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special_assignment_order`
--

CREATE TABLE `special_assignment_order` (
  `assignment_id` varchar(25) NOT NULL,
  `reference_no` varchar(25) DEFAULT NULL,
  `sao_entry_date` date DEFAULT NULL,
  `sao_recieved_date` date DEFAULT NULL,
  `employee_id` varchar(25) DEFAULT NULL,
  `sao_service_type` varchar(45) DEFAULT NULL,
  `sao_instruction` varchar(45) DEFAULT NULL,
  `sao_duration` varchar(45) DEFAULT NULL,
  `sao_status` varchar(25) DEFAULT NULL,
  `account_id` varchar(25) DEFAULT NULL,
  `sao_archive_status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `account_id` varchar(25) NOT NULL,
  `ac_username` varchar(15) DEFAULT NULL,
  `ac_password` varchar(15) DEFAULT NULL,
  `ac_type` varchar(30) DEFAULT NULL,
  `ac_privilege` int(11) DEFAULT NULL,
  `ac_status` varchar(25) DEFAULT NULL,
  `employee_id` varchar(25) DEFAULT NULL,
  `ac_creation_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`),
  ADD KEY `assignment_id` (`assignment_id`);

--
-- Indexes for table `assigned_employees`
--
ALTER TABLE `assigned_employees`
  ADD KEY `assignment_id` (`project_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `assigned_projects`
--
ALTER TABLE `assigned_projects`
  ADD PRIMARY KEY (`project_id`,`assignment_id`),
  ADD KEY `assignment_id` (`assignment_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `assignment_id` (`assignment_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `ipcr`
--
ALTER TABLE `ipcr`
  ADD PRIMARY KEY (`ipcr_id`,`employee_id`),
  ADD KEY `emp_idx_idx` (`employee_id`);

--
-- Indexes for table `ipcr_data`
--
ALTER TABLE `ipcr_data`
  ADD PRIMARY KEY (`ipcr_data_id`),
  ADD KEY `ipcr_id` (`ipcr_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`,`account_id`,`assignment_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `assignment_id` (`assignment_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `reference_no` (`reference_no`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rep_id`) USING BTREE,
  ADD KEY `project_id` (`project_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `special_assignment_order`
--
ALTER TABLE `special_assignment_order`
  ADD PRIMARY KEY (`assignment_id`),
  ADD UNIQUE KEY `reference_no_UNIQUE` (`reference_no`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `account_id_2` (`account_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive`
--
ALTER TABLE `archive`
  ADD CONSTRAINT `archive_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `special_assignment_order` (`assignment_id`);

--
-- Constraints for table `assigned_employees`
--
ALTER TABLE `assigned_employees`
  ADD CONSTRAINT `assigned_employees_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`),
  ADD CONSTRAINT `assigned_employees_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `assigned_projects`
--
ALTER TABLE `assigned_projects`
  ADD CONSTRAINT `assigned_projects_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `special_assignment_order` (`assignment_id`),
  ADD CONSTRAINT `assigned_projects_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`assignment_id`) REFERENCES `special_assignment_order` (`assignment_id`),
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `user_accounts` (`account_id`);

--
-- Constraints for table `ipcr`
--
ALTER TABLE `ipcr`
  ADD CONSTRAINT `ipcr_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`);

--
-- Constraints for table `ipcr_data`
--
ALTER TABLE `ipcr_data`
  ADD CONSTRAINT `ipcr_data_ibfk_1` FOREIGN KEY (`ipcr_id`) REFERENCES `ipcr` (`ipcr_id`),
  ADD CONSTRAINT `ipcr_data_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `user_accounts` (`account_id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `user_accounts` (`account_id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`assignment_id`) REFERENCES `special_assignment_order` (`assignment_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `user_accounts` (`account_id`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
