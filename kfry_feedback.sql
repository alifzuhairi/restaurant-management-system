-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 04:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kfry_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(40) NOT NULL,
  `Quality of food:` enum('5','4','3','2','1') NOT NULL,
  `Portion size:` enum('5','4','3','2','1') NOT NULL,
  `Ease of ordering:` enum('5','4','3','2','1') NOT NULL,
  `Service:` enum('5','4','3','2','1') NOT NULL,
  `Cleanliness:` enum('5','4','3','2','1') NOT NULL,
  `Overall value:` enum('5','4','3','2','1') NOT NULL,
  `Comments:` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customer_id`, `Quality of food:`, `Portion size:`, `Ease of ordering:`, `Service:`, `Cleanliness:`, `Overall value:`, `Comments:`, `date`) VALUES
(1, 'lalala@gmail.com', '5', '5', '5', '5', '5', '5', '\r\nlalala', '2020-07-18'),
(2, 'suga@gmail.com', '5', '4', '5', '4', '5', '4', '\r\nyummy', '2020-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES
(1, 'lalala', 'lalala@gmail.com', '9aa6e5f2256c17d2d430b100032b997c'),
(2, 'suga', 'suga@gmail.com', '6da21f92c51c28052a0adf09c50f90a1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `email` (`email`) USING BTREE;
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
