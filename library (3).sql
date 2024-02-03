-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `book_id` int(5) DEFAULT NULL,
  `author_name` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`book_id`, `author_name`) VALUES
(321, 'Aakash'),
(322, 'Aakash'),
(323, 'Aakash'),
(323, 'Aakash'),
(325, 'Smith'),
(325, 'Smith'),
(327, 'Dinesh'),
(328, 'Bhuvan'),
(328, 'Bhuvan'),
(330, 'Sakshi'),
(331, 'Aakash'),
(332, 'Aakash'),
(332, 'Aakash'),
(334, 'Sakshi'),
(334, 'Sakshi'),
(336, 'wf');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(5) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `pub_name` varchar(12) DEFAULT NULL,
  `pub_year` int(4) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `pub_name`, `pub_year`, `status`) VALUES
(321, 'Python Basics', 'IGN', 2013, 'Available'),
(322, 'DBMS', 'IGN', 2015, 'Available'),
(323, 'Data Structures', 'Surya', 2003, 'Available'),
(324, 'Data Structures', 'Surya', 2003, 'Available'),
(325, 'Spider Man', 'WB', 2015, 'Available'),
(326, 'Spider Man', 'WB', 2015, 'Available'),
(327, 'Basic Physics', 'Petron', 2004, 'Available'),
(328, 'Basic Math', 'Petron', 2006, 'Available'),
(329, 'Basic Math', 'Petron', 2006, 'Available'),
(330, 'Lab 12', 'Petron', 2007, 'Available'),
(331, 'Computer Networks', 'SRD', 2012, 'Available'),
(332, 'DBMS Basics', 'Petron', 2009, 'Available'),
(333, 'DBMS Basics', 'Petron', 2009, 'Available'),
(334, 'UNIX ', 'DAWN', 2006, 'Available'),
(335, 'UNIX', 'DAWN', 2006, 'Available'),
(336, 'der', 'IGN', 2000, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`) VALUES
('1CD19IS077', 'pranav'),
('1CD19IS096', 'naruto');

-- --------------------------------------------------------

--
-- Table structure for table `l_login`
--

CREATE TABLE `l_login` (
  `user_id` int(5) NOT NULL,
  `password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `l_login`
--

INSERT INTO `l_login` (`user_id`, `password`) VALUES
(333, 'goku');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(5) NOT NULL,
  `day_out` int(11) NOT NULL,
  `month_out` int(11) NOT NULL,
  `due_day` int(11) NOT NULL,
  `due_month` int(11) NOT NULL,
  `fine` varchar(6) DEFAULT NULL,
  `usn` varchar(10) DEFAULT NULL,
  `book_id` int(5) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `day_out`, `month_out`, `due_day`, `due_month`, `fine`, `usn`, `book_id`, `status`) VALUES
(51, 1, 2, 11, 2, 'Paid', '1CD19IS096', 321, 'Returned'),
(55, 2, 5, 12, 5, 'Paid', '1CD19IS096', 325, 'Returned'),
(56, 1, 3, 11, 3, 'Paid', '1CD19IS096', 323, 'Returned'),
(57, 2, 3, 12, 3, 'Paid', '1CD19IS096', 328, 'Returned'),
(58, 14, 5, 24, 5, 'Paid', '1CD19IS096', 321, 'Returned'),
(74, 23, 3, 3, 4, 'Paid', '1CD19IS096', 321, 'Returned'),
(76, 23, 3, 3, 4, 'Paid', '1CD19IS096', 321, 'Returned'),
(77, 23, 3, 3, 4, 'Paid', '1CD19IS096', 329, 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pub_name` varchar(12) NOT NULL,
  `address` varchar(25) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_name`, `address`, `phone`) VALUES
('DAWN', 'RT Nagar', 9080886755),
('IGN', 'Banaswadi', 9090009056),
('Petron', 'APS Gate', 8766756744),
('SRD', 'MES Road', 6767884401),
('Surya', 'KR Puram', 8809774511),
('WB', 'Staten Island', 8099003355);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `branch` varchar(3) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `branch`, `address`) VALUES
('1CD19IS096', 'Shikhar Negi', 'ISE', 'Banaswadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `l_login`
--
ALTER TABLE `l_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
