-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 09:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car-repair-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `mobile_no`) VALUES
('Rajendra Deshmukh', 'rajendra@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '9823680503');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `worker_group_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `date`, `service_name`, `timing`, `worker_group_name`) VALUES
(1, 'Shubham Madankar', 'sgmadankar@gmail.com', '2018-03-22', 'OIL & BREAK CHECKS', 'time7am', 'Group 1'),
(2, 'Rajat Dabade', 'rajatdabade1997@gmail.com', '2018-03-23', 'CAR CHECKS', 'time10am', 'Group 2'),
(3, 'Shubham Madankar', 'sgmadankar@gmail.com', '2018-03-23', 'CAR CHECKS', 'time7am', 'Group 1'),
(4, 'Shubham Madankar', 'sgmadankar@gmail.com', '2018-03-29', 'OIL & BREAK CHECKS', 'time11am', 'Group 1'),
(5, 'Shubham Madankar', 'sgmadankar@gmail.com', '2018-03-27', 'BATTERY CHANGE', 'time12pm', 'Group 2'),
(6, 'Sakshi Sable', 'sakshi07@gmail.com', '2018-03-22', 'TIRE CHANGE', 'time9am', 'Group 1'),
(7, 'Sakshi Sable', 'sakshi07@gmail.com', '2018-03-25', 'OIL & BREAK CHECKS', 'time1pm', 'Group 1'),
(8, 'Sakshi Sable', 'sakshi07@gmail.com', '2018-03-29', 'BREAKDOWN SERVICE', 'time7am', 'Group 1'),
(9, 'Ankush Khobragade', 'ankush@gmail.com', '2018-03-22', 'CAR CHECKS', 'time8am', 'Group 2'),
(10, 'Ankush Khobragade', 'ankush@gmail.com', '2018-03-23', 'TIRE CHANGE', 'time5pm', 'Group 1'),
(11, 'Shubham Madankar', 'sgmadankar@gmail.com', '2018-03-23', 'BATTERY CHANGE', 'time3pm', 'Group 1'),
(12, 'Shubham Madankar', 'sgmadankar@gmail.com', '2018-03-24', 'CAR CHECKS', 'time4pm', 'Group 2');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active_hash` varchar(200) NOT NULL,
  `recovery_hash` varchar(200) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `mobile_no`, `password`, `active_hash`, `recovery_hash`, `status`) VALUES
(1, 'Shubham Madankar', 'sgmadankar@gmail.com', '9823680503', 'c4ca4238a0b923820dcc509a6f75849b', '^azx70ws', '', 101),
(4, 'Rajat Dabade', 'rajatdabade1997@gmail.com', '9823680503', '827ccb0eea8a706c4c34a16891f84e7b', 'YOi)kz5V', '', 101),
(5, 'Akshay Bangde', 'akshay@gmail.com', '9815151645', '827ccb0eea8a706c4c34a16891f84e7b', 'mCrNG.LT', '', 101),
(6, 'Aniket Baad', 'aniket@gmail.com', '9823680500', '827ccb0eea8a706c4c34a16891f84e7b', 'AYTn*2GR', '', 101),
(7, 'Ankush Khobragade', 'ankush@gmail.com', '9845646526', '827ccb0eea8a706c4c34a16891f84e7b', 'V17jxue9', '', 101),
(8, 'Sakshi Sable', 'sakshi07@gmail.com', '9878456533', '827ccb0eea8a706c4c34a16891f84e7b', 'yiZ68mNO', '', 101);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_group1`
--

CREATE TABLE `schedule_group1` (
  `date` date NOT NULL,
  `time7am` int(1) NOT NULL DEFAULT '0',
  `time9am` int(1) NOT NULL DEFAULT '0',
  `time11am` int(1) NOT NULL DEFAULT '0',
  `time1pm` int(1) NOT NULL DEFAULT '0',
  `time3pm` int(1) NOT NULL DEFAULT '0',
  `time5pm` int(1) NOT NULL DEFAULT '0',
  `time7pm` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_group1`
--

INSERT INTO `schedule_group1` (`date`, `time7am`, `time9am`, `time11am`, `time1pm`, `time3pm`, `time5pm`, `time7pm`) VALUES
('2018-03-22', 1, 1, 0, 0, 0, 0, 0),
('2018-03-23', 1, 0, 0, 0, 1, 1, 0),
('2018-03-24', 0, 0, 0, 0, 0, 0, 0),
('2018-03-25', 0, 0, 0, 1, 0, 0, 0),
('2018-03-26', 0, 0, 0, 0, 0, 0, 0),
('2018-03-27', 0, 0, 0, 0, 0, 0, 0),
('2018-03-28', 0, 0, 0, 0, 0, 0, 0),
('2018-03-29', 1, 0, 1, 0, 0, 0, 0),
('2018-03-30', 0, 0, 0, 0, 0, 0, 0),
('2018-03-31', 0, 0, 0, 0, 0, 0, 0),
('2018-04-01', 0, 0, 0, 0, 0, 0, 0),
('2018-04-02', 0, 0, 0, 0, 0, 0, 0),
('2018-04-03', 0, 0, 0, 0, 0, 0, 0),
('2018-04-04', 0, 0, 0, 0, 0, 0, 0),
('2018-04-05', 0, 0, 0, 0, 0, 0, 0),
('2018-04-06', 0, 0, 0, 0, 0, 0, 0),
('2018-04-07', 0, 0, 0, 0, 0, 0, 0),
('2018-04-08', 0, 0, 0, 0, 0, 0, 0),
('2018-04-09', 0, 0, 0, 0, 0, 0, 0),
('2018-04-10', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_group2`
--

CREATE TABLE `schedule_group2` (
  `date` date NOT NULL,
  `time8am` int(1) NOT NULL DEFAULT '0',
  `time10am` int(1) NOT NULL DEFAULT '0',
  `time12pm` int(1) NOT NULL DEFAULT '0',
  `time2pm` int(1) NOT NULL DEFAULT '0',
  `time4pm` int(1) NOT NULL DEFAULT '0',
  `time6pm` int(1) NOT NULL DEFAULT '0',
  `time8pm` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_group2`
--

INSERT INTO `schedule_group2` (`date`, `time8am`, `time10am`, `time12pm`, `time2pm`, `time4pm`, `time6pm`, `time8pm`) VALUES
('2018-03-22', 1, 0, 0, 0, 0, 0, 0),
('2018-03-23', 0, 1, 0, 0, 0, 0, 0),
('2018-03-24', 0, 0, 0, 0, 1, 0, 0),
('2018-03-25', 0, 0, 0, 0, 0, 0, 0),
('2018-03-26', 0, 0, 0, 0, 0, 0, 0),
('2018-03-27', 0, 0, 1, 0, 0, 0, 0),
('2018-03-28', 0, 0, 0, 0, 0, 0, 0),
('2018-03-29', 0, 0, 0, 0, 0, 0, 0),
('2018-03-30', 0, 0, 0, 0, 0, 0, 0),
('2018-03-31', 0, 0, 0, 0, 0, 0, 0),
('2018-04-01', 0, 0, 0, 0, 0, 0, 0),
('2018-04-02', 0, 0, 0, 0, 0, 0, 0),
('2018-04-03', 0, 0, 0, 0, 0, 0, 0),
('2018-04-04', 0, 0, 0, 0, 0, 0, 0),
('2018-04-05', 0, 0, 0, 0, 0, 0, 0),
('2018-04-06', 0, 0, 0, 0, 0, 0, 0),
('2018-04-07', 0, 0, 0, 0, 0, 0, 0),
('2018-04-08', 0, 0, 0, 0, 0, 0, 0),
('2018-04-09', 0, 0, 0, 0, 0, 0, 0),
('2018-04-10', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `workers_group`
--

CREATE TABLE `workers_group` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `group_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers_group`
--

INSERT INTO `workers_group` (`id`, `name`, `email`, `mobile_no`, `group_id`) VALUES
(1, 'Prakash Kulkarni', 'prakash123@gmail.com', '9856234865', 1),
(2, 'Shailesh Jamkar', 'shaileshJ@gmail.com', '9866234865', 1),
(3, 'Vaibhav Thombare', 'vaibhav998@gmail.com', '7385776498', 2),
(4, 'Bhaskar Harnale', 'bhaskar1997@gmail.com', '9856598945', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_group1`
--
ALTER TABLE `schedule_group1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `schedule_group2`
--
ALTER TABLE `schedule_group2`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `workers_group`
--
ALTER TABLE `workers_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `workers_group`
--
ALTER TABLE `workers_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
