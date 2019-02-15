-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 09:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydba`
--

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`name`, `email`, `dob`, `content`, `id`, `lastname`, `mobile`) VALUES
('', '', 'test', 'test', 1, '', '0000-00-00'),
('', '', 'test', 'test', 2, '', '0000-00-00'),
('undefined', 'undefined', 'test', 'test', 3, '', '0000-00-00'),
('', '', '', '', 4, '', '0000-00-00'),
('Pratik', 'pratik.d2011@gmail.com', '1991-12-22', '9960292787', 5, 'Dhole', '0000-00-00'),
('Pratik', 'pratik.d2011@gmail.com', '1991-12-22', '9960292787', 6, 'Dhole', '0000-00-00'),
('Pratik', 'pratik.d2011@gmail.com', '1991-12-22', '9960292787', 7, 'Dhole', '0000-00-00'),
('Pratik', 'pratik.d2011@gmail.com', '1991-12-22', '9960292787', 8, 'Dhole', 'amravati\r\ndhamangaon rly'),
('Pratik', 'pratik.d2011@gmail.com', '1991-12-22', 'amravati\r\ndhamangaon rly', 9, 'Dhole', '9960292787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
