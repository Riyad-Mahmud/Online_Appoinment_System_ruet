-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 08:13 AM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_id`, `doctor_id`, `date`, `time_id`) VALUES
(1, 1, 1, '03/11/2016', '1'),
(2, 2, 1, '04/11/2016', '1'),
(3, 3, 1, '03/11/2016', '2'),
(4, 4, 1, '02/11/2016', '2'),
(5, 5, 1, '05/11/2016', '2');

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
(1, ' ENT');

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
(1, 'Riyad Mahmud', 'MBBS,FCPS', 1, 1, 'riyad.ruet@gmail.com', '202cb962ac59075b964b07152d234b70', '1478194934_64160156.jpg');

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
(1, 'Popular', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`) VALUES
(1, 'Ruhul Amin', 'Jamalpur'),
(2, 'Sujan Mahmud', 'Naogong'),
(3, 'Raiyan Mahmud', 'Rangpur'),
(4, 'Ashiqur Rahman', 'Rajshahi'),
(5, 'Sazzad Hossain', 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `diseases_dept` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `diseases_name` varchar(255) NOT NULL,
  `diseases_description` varchar(255) NOT NULL,
  `treatment_type` varchar(255) NOT NULL,
  `next_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`id`, `patient_id`, `diseases_dept`, `doctor_id`, `diseases_name`, `diseases_description`, `treatment_type`, `next_date`) VALUES
(1, 1, 1, 1, 'Chronic Tonsillitis', 'Inflammation may also extend beyond the tonsils to include the adenoids and the lingual tonsils', 'Medicine', '3/12/016'),
(2, 2, 1, 1, 'Allergic Rhinitis', 'Allergic rhinitis, or hay fever, is your body''s response to specific allergens. It causes uncomfortable symptoms like sneezing and itchy eyes', 'Medicine', '3/12/016'),
(3, 3, 1, 1, 'Adenoiditis', '\r\nAdenoiditis is the inflammation of the adenoid tissue, usually caused by an infection', 'Medicine', '3/12/016'),
(4, 4, 1, 1, 'Chronic Ear Disease', 'Chronic ear disease is a spectrum of problems which might include a hole in the eardrum, thickening of the mucosal lining of the middle ear space', 'Operation', '3/12/016'),
(5, 5, 1, 1, 'Cleft Palate/Cleft Lip', 'Cleft lip and cleft palate, also known as orofacial cleft, is a group of conditions that includes cleft lip (CL), cleft palate (CP), and both together (CLP).', 'Operation', '3/12/016');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `doctor_id`, `shift`, `start_time`, `end_time`) VALUES
(1, 1, 'Morning', '10.00 am', '12.30 pm'),
(2, 1, 'Evening', '5.00 pm', '9.30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `gender`, `age`, `email`, `password`, `user_type`) VALUES
(1, 'Riyad Mahmud', '1', '34', 'riyad.ruet@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical_center`
--
ALTER TABLE `medical_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
