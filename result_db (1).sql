-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 06:05 PM
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
-- Database: `result_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `parent_login`
--

CREATE TABLE `parent_login` (
  `sname` varchar(30) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `pemail` varchar(20) NOT NULL,
  `ppassword` varchar(20) NOT NULL,
  `pname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_login`
--

INSERT INTO `parent_login` (`sname`, `semail`, `pemail`, `ppassword`, `pname`) VALUES
('student', 'student@gmail.com', 'parent@gmail.com', 'parent123', 'parent'),
('student2', 'student2@gmail.com', 'parent2@gmail.com', 'parent123', 'parent2'),
('student3', 'student3@gmail.com', 'parent3@gmail.com', 'parent123', 'parent3'),
('Student4', 'student4@gmail.com', 'parent4@gmail.com', 'parent123', 'parent4'),
('student5', 'student@gmail.com', 'parent@gmail.com', 'parent123', 'parent5'),
('sidharth', 'sidharth@gmail.com', 'parent@gmail.com', '12345678', 'parent4');

-- --------------------------------------------------------

--
-- Table structure for table `sem_1`
--

CREATE TABLE `sem_1` (
  `mark1` int(20) NOT NULL,
  `mark2` int(20) NOT NULL,
  `mark3` int(20) NOT NULL,
  `mark4` int(20) NOT NULL,
  `sname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_1`
--

INSERT INTO `sem_1` (`mark1`, `mark2`, `mark3`, `mark4`, `sname`) VALUES
(99, 89, 79, 69, 'student'),
(99, 98, 97, 96, 'student2'),
(31, 33, 35, 37, 'student3'),
(75, 65, 55, 45, 'Student4'),
(12, 90, 89, 98, 'student5'),
(0, 0, 0, 0, 'sidharth');

-- --------------------------------------------------------

--
-- Table structure for table `sem_2`
--

CREATE TABLE `sem_2` (
  `sname` varchar(30) NOT NULL,
  `mark1` int(10) NOT NULL,
  `mark2` int(10) NOT NULL,
  `mark3` int(10) NOT NULL,
  `mark4` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_2`
--

INSERT INTO `sem_2` (`sname`, `mark1`, `mark2`, `mark3`, `mark4`) VALUES
('student', 59, 49, 39, 29),
('student2', 50, 60, 70, 80),
('student3', 40, 41, 42, 43),
('Student4', 0, 20, 30, 100),
('student5', 75, 50, 35, 50),
('sidharth', 76, 56, 69, 80);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `semail` varchar(30) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`semail`, `spassword`, `sname`, `pname`, `pemail`) VALUES
('student@gmail.com', 'student123', 'student', 'parent', 'parent@gmail.com'),
('student2@gmail.com', 'student123', 'student2', 'parent2', 'parent2@gmail.com'),
('student3@gmail.com', 'student123', 'student3', 'parent3', 'parent3@gmail.com'),
('student4@gmail.com', 'student123', 'Student4', 'parent4', 'parent4@gmail.com'),
('student@gmail.com', 'student123', 'student5', 'parent5', 'parent@gmail.com'),
('sidharth@gmail.com', 'sidharthkj', 'sidharth', 'parent4', 'parent@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_review`
--

CREATE TABLE `student_review` (
  `sname` varchar(30) NOT NULL,
  `review` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_review`
--

INSERT INTO `student_review` (`sname`, `review`) VALUES
('student', 'test review'),
('student2', 'review \r\n'),
('student3', 'review3'),
('Student4', 'Review 4'),
('student5', 'review 5'),
('sidharth', ',jknkjkl .,.,.');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `tname` varchar(30) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`tname`, `temail`, `tpassword`) VALUES
('Arjun', 'arjuncvinod7@gmail.com', 'arjun123'),
('Aravinth', 'aravinth@gmail.com', 'aravinth123'),
('Sidharth', 'sidharth@gmail.com', 'sidharth123'),
('anu miss', 'anumiss@gmail.com', 'anumisskj'),
('Arjun C Vinod', 'aravinth@gmail.com', 'arjun123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
