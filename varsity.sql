-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 12:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `varsity`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `name`, `dob`) VALUES
(1, 'Computer Science & Engineering', '2006-01-01'),
(2, 'Veterinary and Animal Science', '2008-01-01'),
(8, 'Arts & Science', '2018-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stdid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `faculty` varchar(111) NOT NULL,
  `dept` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  PRIMARY KEY (`stdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdid`, `name`, `faculty`, `dept`, `dob`, `address`, `email`, `contact`, `gender`) VALUES
(1, 'Azharul Islam', 'CSE', 'ECE', '2018-05-15', 'Dhaka', 'azad.ece13@gmail.com', '01764761919', 'Male'),
(3, 'Azharul Islam ', 'CSE', 'EEE', '2018-05-15', 'Dinajpur', 'developerazad.hstu@gmail.com', '01521470368', 'Male'),
(6, 'Student CSE', 'CSE', 'EEE', '2018-05-01', 'Rangpur', 'student@gmail.com', '01764761919', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `subject` varchar(111) NOT NULL,
  `semester` varchar(111) NOT NULL,
  `duration` varchar(111) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `name`, `subject`, `semester`, `duration`) VALUES
(1, 'Computer Science & Engineering', 'Electrical & Eletronic Engineering', '8', '4 Years'),
(3, 'Science', 'Physics', '8', '4 Years'),
(5, 'Arabic', 'Hadith', '6', '4 Years');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `contact` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `degree` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `marry` varchar(111) NOT NULL,
  `salary` varchar(111) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `name`, `email`, `contact`, `dob`, `address`, `degree`, `gender`, `marry`, `salary`) VALUES
(1, 'Teacher', 'teacher@gmail.com', '01521470368', '1990-01-01', 'Dhaka', 'MSc in CSE', 'Male', 'No', '40000'),
(5, 'Azharul Islam ', 'teacher@gmail.com', '01764761919', '2018-05-02', 'Dinajpur', 'BSc in CSE', '', '', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `role` varchar(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'Admin'),
(16, 'devazad', '123', 'Admin'),
(17, 'user', 'user', 'Admin'),
(18, 'azad.ece13@gmail.com', 'c5252953f8ac041c12d8cd51ae0e277ab5ecde40', 'Admin'),
(19, 'devazad', 'eaf71b51c84ed7b82adaf64089b5cbcadd46b550', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
