-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullcalendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` text,
  `hreflink` varchar(100) DEFAULT NULL,
  `hreflinktarget` enum('_self','_blank') NOT NULL DEFAULT '_blank',
  `backgroundcolor` varchar(25) DEFAULT 'yellow',
  `textcolor` varchar(25) DEFAULT 'black',
  `bordercolor` varchar(25) DEFAULT 'green',
  `imageurl` varchar(255) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `starttime` varchar(25) DEFAULT NULL,
  `endtime` varchar(25) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `createddate` datetime DEFAULT NULL,
  `updateddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `alias`, `description`, `hreflink`, `hreflinktarget`, `backgroundcolor`, `textcolor`, `bordercolor`, `imageurl`, `startdate`, `enddate`, `starttime`, `endtime`, `status`, `createddate`, `updateddate`) VALUES
(1, 'Evon Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-11-01', '2016-11-10', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(2, 'Evontech Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-11-11', '2016-11-15', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(3, 'Evon Technology Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-11-10', '2016-11-20', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(4, 'Dehradun Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-11-01', '2016-11-30', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(5, 'Winter Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-10-15', '2016-12-31', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(6, 'Pre winter Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-10-01', '2016-10-31', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(7, 'Post winter Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2017-01-31', '2017-02-15', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(8, 'Diwali Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2016-11-28', '2016-11-30', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(9, 'Holi Event', NULL, NULL, NULL, '_blank', NULL, NULL, NULL, NULL, '2017-03-03', '2017-03-10', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(10, 'All Day Event', 'all-day-event', 'This is a cool event', 'http://www.google.com', '_blank', 'red', 'green', 'white', NULL, '2018-03-01', '2018-03-01', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57'),
(11, 'Long Event', 'long-event', 'This is long event description', 'http://www.yahoo.co.in', '_blank', 'yellow', 'black', 'white', 'caution.png', '2018-03-07', '2018-03-10', NULL, NULL, 'Y', NULL, '2018-03-15 13:24:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
