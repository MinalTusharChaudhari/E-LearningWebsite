-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 05:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(3, 'Learn Webd', 'echo $sql; // Add this line to see the SQL query\r\n$conn->query($sql);echo $sql; // Add this line to see the SQL query\r\n$conn->query($sql);echo $sql; // Add this line to see the SQL query\r\n$conn->query($sql);echo $sql; // Add this line to see the SQL query\r\n$conn->query($sql);echo $sql; // Add this line to see the SQL query\r\n$conn->query($sql);', 'Minal1', '../images/courseimg/bigimg.jpg', '10 days', 300, 1000),
(4, 'Learn JAVA', 'In the code above, I added the mt-5 class to the <div class=\"col-md-6 mt-5\">. This will add a top margin to the course details <div>, increasing its height and giving it more space below the search bar.', 'Minal3', '../images/courseimg/boy2.avif', '20 days', 100, 2000),
(5, 'Learn C++', '<?php if(isset($msg)) {echo $msg;} ?><?php if(isset($msg)) {echo $msg;} ?><?php if(isset($msg)) {echo $msg;} ?><?php if(isset($msg)) {echo $msg;} ?><?php if(isset($msg)) {echo $msg;} ?>', 'MinalC', '../images/courseimg/contactus1.png', '20 days', 300, 4000),
(6, 'Learn React ', '<a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a>', 'Minal8', '../images/courseimg/contactus.png', '33 days', 500, 3000),
(7, 'Learn C', '<a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a>', 'Soham', '../images/courseimg/bigimg.jpg', '30 days', 300, 2000),
(8, 'Learn Bootstrap', '<a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a><a href=\"#\" class=\"btn\" style=\"text-align: left; padding: 0px; margin: 0px;\"></a>', 'Minal6', '../images/courseimg/bigimg.jpg', '20 days', 350, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text NOT NULL,
  `lesson_desc` text NOT NULL,
  `lesson_link` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(1, 'To-Do-List', 'In the code above, I added the mt-5 class to the <div class=\"col-md-6 mt-5\">. This will add a top margin to the course details <div>, increasing its height and giving it more space below the search bar.', '../lessonvid/To-Do-List.mp4', 3, '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `stu_occ` varchar(255) NOT NULL,
  `stu_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(8, 'ssssssssssssss', 's@123', 'ssssssssssssssssssssssssss', '', ''),
(10, 'minal', 'soham2@gmail.com', '', 'student', ''),
(11, 'soham', 'soham@gmail.com', 'soham1', 'student', '../images/stu/boy1.png'),
(12, 'Dellaa', 'dellaa@gmail.com', 'dellaa', 'companyaa', ''),
(13, 'Minal', 'minal@gmail.com', 'minal', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
