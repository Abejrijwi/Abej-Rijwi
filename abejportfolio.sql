-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 08:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abejportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_me`
--

CREATE TABLE `tbl_about_me` (
  `id` int(10) NOT NULL,
  `user_id` int(100) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `employee_designation_id` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `signature` varchar(200) NOT NULL,
  `description_about_your_self` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about_me`
--

INSERT INTO `tbl_about_me` (`id`, `user_id`, `first_name`, `last_name`, `father_name`, `mobile`, `email`, `dob`, `address`, `city`, `state`, `zipcode`, `employee_designation_id`, `gender`, `image`, `signature`, `description_about_your_self`) VALUES
(31, 1, 'Abej', 'Ahmad', 'Najrul Hasan', '9801272766', 'abejrijwicareer@gmail.com', '09/30/1990', 'Bagmali, Hajipur', 'Hajipur', 'Bihar', '844101', '6', 'Male', 'c0ceceb0c4722f4da219c3c0c97abcef.jpg', '349f4eecee84cda53311c53762a65d75.jpg', 'bbbbbbbbbbbbbb'),
(32, 2, 'Raju', 'Rijwi', 'Najrul Hasan', '9801272766', 'rajurijwi@gmail.com', '07/31/1970', 'Ramashik Chowk, Lalganj', 'Lalganj', 'Bihar', '844101', '3', 'Male', '', '', 'aaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `employee_designation_id` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(400) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `status` int(10) NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `browser_version` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `dob`, `mobile`, `image`, `employee_designation_id`, `address`, `city`, `state`, `zipcode`, `gender`, `status`, `last_login`, `browser`, `browser_version`, `os`, `ip_address`, `created_date`) VALUES
(1, 'Abej', 'Ahmad', 'abejrijwicareer@gmail.com', 'abejrijwi', '21232f297a57a5a743894a0e4a801fc3', '09/30/1990', '9801272766', 'd73562a80d156229eed232519a08a5ef.jpg', '6', 'Bagmali, Hajipur', 'Hajipur', 'Bihar', 844101, 'Male', 0, '2020-02-29 03:51:12 pm', 'Chrome', '80.0.3987.122', 'Windows 7', '::1', '2020-02-05 18:43:37'),
(2, 'Raju', 'Rijwi', 'rajurijwi@gmail.com', 'rajurijwi', '21232f297a57a5a743894a0e4a801fc3', '07/31/1970', '9801272766', 'eb91c2200d68e504c42baf3e79f2871c.jpg', '3', 'Ramashik Chowk, Lalganj', 'Lalganj', 'Bihar', 844101, 'Male', 0, '2020-02-29 04:00:36 pm', 'Chrome', '80.0.3987.122', 'Windows 7', '::1', '2020-02-05 18:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `id` int(11) NOT NULL,
  `employee_designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`id`, `employee_designation`) VALUES
(1, 'manager'),
(3, 'team leader'),
(5, 'web developer'),
(6, 'web designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_me`
--
ALTER TABLE `tbl_about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_me`
--
ALTER TABLE `tbl_about_me`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
