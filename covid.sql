-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 03:40 PM
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
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phnumber` varchar(11) NOT NULL,
  `aphnumber` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fullname`, `gender`, `phnumber`, `aphnumber`, `type`, `quantity`, `pincode`, `address`, `date`, `email`, `pin`) VALUES
(1, 'Pranav Shrivastava', 'Male', '2147483647', '2147483647', 'MASKS', 5, '458883', 'shamgarh', '2020-05-02', 'ilovemepranav@gmail.com', 5656),
(2, 'Ramesh Jha', 'Male', '8596741230', '7418523690', 'MASKS', 5, '458883', 'shamgarh', '2020-05-02', 'ramesh123@gmail.com', 5656),
(3, 'Nikhil Arora', 'Male', '9632587410', '8574123690', 'HAND-GLOVES', 22, '458883', 'shamgarh', '2020-05-03', 'nk123@gmail.com', 3256),
(4, 'Aryan Jain', 'Male', '8889997745', '8794563210', 'MASKS', 8, '459987', 'Mandsaur', '2020-05-04', 'pranavshrivastava1920@gmail.com', 7896),
(5, 'Rahul Sharma', 'Male', '8889997745', '8794562120', 'MASKS', 12, '897456', 'Mandsaur', '2020-05-05', 'rahulS3422@gmail.com', 5589),
(6, 'Aryan Jain', 'Male', '8889997745', '8794562120', 'MASKS', 12, '897456', 'Mandsaur', '2020-05-05', 'Aryan32163199@gmail.com', 5589),
(7, 'Pranav Shrivastava', 'Male', '7471109285', '7418523690', 'MASKS', 5, '458883', 'shamgarh', '2020-05-08', 'ilovemepranav@gmail.com', 5655),
(8, 'Pranav Shrivastava', 'Male', '7471109285', '7418523690', 'MASKS', 5, '458883', 'shamgarh', '2020-05-08', 'ilovemepranav@gmail.com', 5655),
(9, 'Rahul Singh', 'Male', '8529637410', '1236547890', 'MASKS', 22, '458883', 'infoyiturhfgkjhdgsfegrxdht', '2020-05-08', 'admin@phpzag.com', 7788),
(10, 'Tushar Pal', 'Male', '852963741', '7418529630', 'MASKS', 5, '458883', 'Lucknow', '2020-05-09', 'pranavshrivastava1920@gmail.com', 8569),
(11, 'Kinshuk', 'Male', '7471109285', '7418529630', 'ALL OF THEM', 8, '459987', 'Lucknow', '2020-05-09', 'admin@phpzag.com', 9966),
(12, 'Anshul rao', 'Male', '8521479600', '4785931201', 'HEAD-CAPS', 12, '459987', '', '2020-05-18', 'admin@phpzag.com', 8989);

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phnumber` varchar(11) NOT NULL,
  `aphnumber` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `fullname`, `gender`, `phnumber`, `aphnumber`, `type`, `quantity`, `pincode`, `address`, `date`, `email`, `pin`) VALUES
(1, 'Pranav Shrivastava', 'Male', '8529637410', '7418529630', '2-BHK', 1500, '459987', '', '2020-05-17', 'admin@phpzag.com', 2233);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `phnumber` varchar(11) NOT NULL,
  `q1` varchar(11) NOT NULL,
  `q2` varchar(11) NOT NULL,
  `q3` varchar(11) NOT NULL,
  `q4` varchar(11) NOT NULL,
  `q5` varchar(11) NOT NULL,
  `q6` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `name`, `phnumber`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`) VALUES
(1, 'Pranav', '7471109282', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES'),
(6, 'Anshul Kuma', '7471109285', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES'),
(7, 'Zakir', '7471109285', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO'),
(8, 'Kinshuk', '9638521470', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES'),
(9, 'Pranav', '7471012525', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
