-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair_gsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`) VALUES
(1, 'hacker.png'),
(2, 'High_resolution_wallpaper_background_ID_77701553335.jpg'),
(3, '1709789560832.jpg'),
(4, '1709789560441.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `ID` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `name` varchar(150) NOT NULL,
  `branch_name` varchar(150) NOT NULL,
  `userid` varchar(9) NOT NULL,
  `email` varchar(80) NOT NULL,
  `bmname` varchar(150) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`ID`, `r_date`, `name`, `branch_name`, `userid`, `email`, `bmname`, `comment`) VALUES
(0, '2024-04-24', 'Karma Lal Yonjan Lama', 'Corporate', 'karma', 'karma.lama@nepallife.com.np', 'GSD Store', '');

-- --------------------------------------------------------

--
-- Table structure for table `repair_form`
--

CREATE TABLE `repair_form` (
  `r_date` date NOT NULL,
  `i_desc` varchar(150) NOT NULL,
  `model_no` varchar(150) NOT NULL,
  `p_date` date NOT NULL,
  `p_value` date NOT NULL,
  `branch` varchar(150) NOT NULL,
  `a_code` varchar(150) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `repair` varchar(255) NOT NULL,
  `approve` varchar(150) NOT NULL,
  `recomm` varchar(250) NOT NULL,
  `a_gsd` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repair_form`
--

INSERT INTO `repair_form` (`r_date`, `i_desc`, `model_no`, `p_date`, `p_value`, `branch`, `a_code`, `dept`, `username`, `userid`, `repair`, `approve`, `recomm`, `a_gsd`, `ID`) VALUES
('2024-04-25', 'suraj', 'suasfkd', '2024-12-31', '0000-00-00', 'Nepallife', 'Nepallife', 'IT', '', 'admin@admi', 'Nepallife', 'Nepallife', 'Nepallife', 'Approved', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repair_form`
--
ALTER TABLE `repair_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repair_form`
--
ALTER TABLE `repair_form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
