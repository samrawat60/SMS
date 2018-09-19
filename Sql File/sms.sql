-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 02:47 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'samy', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcont` varchar(15) NOT NULL,
  `standard` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES
(9, 1, 'Narayan Singh', 'New Delhi', '9999281160', 12, 'selfie.jpg'),
(10, 2, 'Neeraj Singh', 'New Delhi', '9716233664', 11, 'IMG_20161030_223357.jpg'),
(11, 3, 'Amit sharma', 'Punjab', '9876543210', 12, 'IMG_20160815_100747.jpg'),
(12, 4, 'Karan negi', 'Delhi', '95997763671', 12, 'B612_20170329_105835.jpg'),
(13, 5, 'Krishna Mehra', 'Delhi', '8750349312', 12, 'B612_20170329_110255.jpg'),
(14, 6, 'Deepak Dhawan', 'Punjab', '9958337622', 12, 'B612_20170325_183128.jpg'),
(15, 7, 'Siddharth Kapoor', 'Delhi', '7856789640', 12, 'IMG-20160505-WA0026.jpg'),
(16, 8, 'Swati Mishra', 'Delhi', '9868748596', 12, 'IMG-20160505-WA0034.jpg'),
(17, 9, 'Mohak', 'Punjab', '9012784596', 12, 'IMG-20170328-WA0048.jpg'),
(18, 10, 'Samy', 'Delhi', '9716171368', 12, 'IMG-20160505-WA0059.jpg'),
(19, 11, 'mayank gupta', 'Delhi', '9999713672', 12, 'BasinLakeTahoe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
