-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 09:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email_id`, `password`) VALUES
(1, 'admin@pec.edu', 'pecadmin');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `id` int(20) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `descp` varchar(1000) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `fullform` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`id`, `dept`, `coursename`, `descp`, `cid`, `fullform`) VALUES
(1, 'MCA', 'SSC', 'Combined Graduate Level Examination is an examination conducted to recruit staff to various posts in ministries, departments and organisations of the Government of India. It is conducted by the Staff Selection Commission for selecting staff for various Group B and C positions', 'mca1', 'Staff Selection Commission'),
(2, 'MCA', 'UDC', 'Under Divisional Clerk - The candidates are required to have upper hand knowledge of computer applications. Candidates must be skilled in using MS Office suites and database programs.', 'mca2', 'Under Divisional Clerk'),
(3, 'MCA', 'UPSC - CDS', 'Combined Defence Services - The exam is held every year to recruit eligible candidates into the armed forces across India. It get organized twice a year by the UPSC.', 'mca3', 'Combined Defence Services'),
(4, 'MCA', 'NIC', 'For the positions of Scientist-\'B\' and Scientific/Technical Assistant-\'A\' at the National Informatics Centre (NIC).', 'mca4', 'National Informatics Centre'),
(5, 'M.tech', 'ISRO', 'Indian Space Research Organization has been featured among the top five workplaces in India, according to Indeed', 'mt1', 'Indian Space Research Organization'),
(7, 'M.tech', 'GATE', 'primarily tests the comprehensive understanding of various undergraduate subjects in engineering and science for admission into the Masters Program and Job in Public Sector Companies.', 'mt2', 'Graduate Aptitude Test in Engineering'),
(8, 'M.tech', 'SSC CGL', 'the SSC CGL exam to recruit candidates into various organizations, departments, offices under the Government of India.', 'mt3', 'Staff Selection Commission'),
(9, 'MBA', 'BM', 'A brand manager is responsible for maintaining brand integrity and values across all channels.', 'mba1', 'Brand Manager'),
(10, 'MBA', 'DMM', 'you must have a grasp of the latest marketing strategies and tools. You will be responsible for running digital marketing campaigns, right from coming up with a concept of executing the same. ', 'mba2', 'Digital Marketing Manager'),
(11, 'MBA', 'MM', 'Marketing manager will be a suitable profession for the MBA students with high skilled students', 'mba3', 'Marketing Manager');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL,
  `links` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `type`, `content`, `date`, `links`) VALUES
(1, '1', 'Admissions open for MBA in PTU', '02-06-2022', 'https://www.ptuniv.edu.in/'),
(2, '2', 'UPSC – Engg Services (Prelims) Exam 2022- 20 July 2022', '27-05-2022', ''),
(3, '2', 'TNPSC group III exam will be held at month of August', '16-05-2022', ''),
(4, '3', 'SSC oct-21 results are announced.', '11-01-2022', 'https://ssc.nic.in/'),
(5, '1', 'UPSC exam syllabus revised for the upcoming exams', '23-05-2022', 'https://www.upsc.gov.in/examinations/revised-syllabus-scheme'),
(6, '2', 'TNPSC group-I result announced.please check', '2022-06-15', 'https://www.tnpsc.gov.in/english/latest_results.aspx'),
(7, '3', 'DMM opportunity are opens up, enroll as soon as possible don\'t miss it.', '2022-04-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int(20) NOT NULL,
  `reg_id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cour_id` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `reg_id`, `name`, `cour_id`, `dept`, `address`, `contact`, `email_id`, `password`) VALUES
(1, '20CS427', 'syed salahuddin', 'NIC', 'MCA', 'Tamil Nadu', '9876543219', 'syed@pec.edu', 'syed123'),
(2, '20CS428', 'Mahesh', '', 'MCA', 'pondicherry', '9876543456', 'mahesh@pec.edu', 'mahesh123'),
(3, '20MT428', 'Ramesh', '', 'M.tech', 'Yanam', '7656875698', 'ramesh@pec.edu', 'ramesh123'),
(4, '19ME321', 'Vimal', '', 'CE', 'Madurai', '9857382434', 'vimal@pec.edu', 'vimal123'),
(5, '19MB432', 'Simon', 'BM', 'MBA', 'pondicherry', '8234737864', 'simon@pec.edu', 'simon123'),
(6, '20MT465', 'tony', '', 'M.tech', 'cuddalore', '9876567876', 'tony@pec.edu', 'tony123'),
(7, '19MB456', 'sammy', '', 'MBA', 'salem', '8765547865', 'sammy@pec.edu', 'sammy123');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(20) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `tr_name` varchar(30) NOT NULL,
  `time_from` varchar(20) NOT NULL,
  `time_to` varchar(20) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `courseid`, `tr_name`, `time_from`, `time_to`, `day`) VALUES
(1, 'UPSC - CDS', 'Kamal', '9:00', '1:00', 'Monday'),
(2, 'NIC', 'Sekhar', '10:30', '13:00', 'Tuesday'),
(3, 'NIC', 'Muthamizh', '10:30', '12:30', 'Wednesday'),
(4, 'ISRO', 'Sunil', '08:30', '12:30', 'Thursday'),
(5, 'MM', 'deepak', '08:20', '12:50', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_tbl`
--

CREATE TABLE `trainer_tbl` (
  `id` int(20) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `desig` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_tbl`
--

INSERT INTO `trainer_tbl` (`id`, `tname`, `desig`, `email_id`, `phno`) VALUES
(1, 'Kamal', 'P.hd in Mathematics', 'kamal@gamil.com', '8976549032'),
(2, 'Sekhar', 'P.hd in Science', 'sekargmail.com', '8765934291'),
(4, 'Sunil', 'Masters in chemistry', 'sunil@gmail.com', '7685439654'),
(5, 'Amith shah', 'Masters in Social', 'amith@gmail.com', '9876545678'),
(6, 'Sundar', 'Phd in Physics', 'Sundar@gmail.com', '9876757665'),
(8, 'dinesh', 'phd', 'dinesh@gmail.com', '8765456789'),
(9, 'deepak', 'Masters in maths', 'deepak@gmail.com', '8768768768'),
(10, 'murugan', 'Phd in Physics', 'murugan@gmail.com', '8765456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_tbl`
--
ALTER TABLE `trainer_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainer_tbl`
--
ALTER TABLE `trainer_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
