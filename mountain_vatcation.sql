-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2019 at 06:30 AM
-- Server version: 5.7.25
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountain_vatcation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_data`
--

CREATE TABLE `contact_us_data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_data`
--

INSERT INTO `contact_us_data` (`id`, `name`, `mobile`, `email`, `dateTime`) VALUES
(4, 'sad', '8952896895', 'shivamviswas@gmail.com', '2019-02-13 11:50:37'),
(3, 'ke', '', '', '2019-02-13 11:46:39'),
(5, 'sad', '8952896895', 'shivamviswas@gmail.com', '2019-02-13 11:52:29'),
(6, 'ke', '8952896895', 'shivamviswas@gmail.com', '2019-02-13 11:52:55'),
(7, 's', '8952896895', 'shivamviswas@gmail.com', '2019-02-13 11:54:20'),
(8, 'sad', '8952896895', 'shivamviswas@gmail.com', '2019-02-13 11:55:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_data`
--
ALTER TABLE `contact_us_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_data`
--
ALTER TABLE `contact_us_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
