-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 02:02 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room` int(11) NOT NULL,
  `guests` int(11) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserve_id`, `name`, `date`, `checkin`, `checkout`, `room`, `guests`, `plan`, `group_name`, `remarks`, `phone`, `email`) VALUES
(107, 'test', '2020-01-31', '2020-01-31', '2020-01-30', 3, 5, 'PKG', 'kjn', 'asdf', 9808000000, '9808000000'),
(108, 'test', '2020-01-31', '2020-01-31', '2020-01-30', 3, 5, 'PKG', 'kjn', 'asdf', 9808000000, '9808000000'),
(109, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(110, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(111, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(112, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(113, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(114, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(115, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(116, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(117, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(118, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(119, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(120, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(121, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(122, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(123, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(124, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(125, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(126, 'test', '2020-02-02', '2020-02-06', '2020-02-08', 2, 5, 'PKG', 'test', 'this is test for pdf', 986000000, '986000000'),
(127, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(128, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(129, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(130, '', '2020-02-02', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, ''),
(131, 'test', '2020-02-06', '2020-02-13', '2020-02-14', 1, 5, 'PKG', 'test', 'this is test', 986000000, '986000000'),
(132, '', '2020-02-06', '1970-01-01', '1970-01-01', 0, 0, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
