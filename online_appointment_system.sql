-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 04:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_appointment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'gastrology'),
(2, 'hormon'),
(3, 'Psychology');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `chamber_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pro_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doc_name`, `degree`, `chamber_id`, `dept_id`, `email`, `password`, `pro_pic`) VALUES
(1, 'AB', 'MBBS', 1, 1, 'abab@gmail.com', '202cb962ac59075b964b07152d234b70', '1475684083_80541992.jpg'),
(3, 'CD', 'MBBS', 2, 2, 'cdcd@gmail.com', '202cb962ac59075b964b07152d234b70', '1474967939_52127075.jpg'),
(4, 'ef', 'fcps', 1, 1, 'efef@gmail.com', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `medical_center`
--

CREATE TABLE `medical_center` (
  `id` int(11) NOT NULL,
  `medical_center_name` varchar(255) NOT NULL,
  `medical_center_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_center`
--

INSERT INTO `medical_center` (`id`, `medical_center_name`, `medical_center_address`) VALUES
(1, 'Apollo', 'Dhanmondi'),
(2, 'Square', 'Dhanmondi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL COMMENT '1=Male , 2=Female',
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET macce COLLATE macce_bin NOT NULL,
  `login_type` int(11) NOT NULL COMMENT '1=User , 2=Doctor , 3=Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `gender`, `age`, `email`, `username`, `password`, `login_type`) VALUES
(2, 'sdfg', 1, '123', 'dfvb', 'sdfgh', '202cb962ac59075b964b07152d234b70', 1),
(3, 'saif', 1, '23', 'sa@sa.com', 'saif', '44c099ff522cd529ade21a9c7aa54ebf', 1),
(5, 'Zahid', 1, '23', 'za@aa.com', 'zahid', 'c651148415ab2a260e6c506075c12ae3', 1),
(6, 'qq', 2, '2', 's@d.aa', 'aaaaaaa', '5d793fc5b00a2348c3fb9ab59e5ca98a', 1),
(7, 'sdfg', 1, '23', 'sa@sa.com', 'sdfgh', '4963b55a54c7e8a47cf563c4529f6103', 1),
(8, 'sdfg', 2, '23', 'dfvb', 'sdfgh', '6226f7cbe59e99a90b5cef6f94f966fd', 1),
(9, 'saif', 1, '123', 'dfvb', 'saif', 'fae0b27c451c728867a567e8c1bb4e53', 1),
(10, 'sdfg', 1, '123', 'dfvb', 'saif', 'ea7d201d1cdd240f3798b2dc51d6adcb', 1),
(11, 'saif', 1, '12345', 'xx', 'zz', '25ed1bcb423b0b7200f485fc5ff71c8e', 1),
(12, 'saif', 1, '333', '33', 'ss', '3691308f2a4c2f6983f2880d32e29c84', 1),
(13, 'sdfg', 1, 'dddd', 'dd', 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', 1),
(14, 'sdfg', 1, 'dddd', 'dd', 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', 1),
(15, 'sdfg', 1, 'dddd', 'dd', 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', 1),
(16, 'saif', 1, '22', 'saifete11ruet@gmail.com', 'saif', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(17, 'Admin', 1, '23', 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 3),
(18, 'saq', 1, '23', 'saq@b.n', 'saq', '1526c671a36654503d711b997796f034', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_center`
--
ALTER TABLE `medical_center`
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
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medical_center`
--
ALTER TABLE `medical_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
