-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maktum`
--

-- --------------------------------------------------------

--
-- Table structure for table `maktum`
--

CREATE TABLE `maktum` (
  `sno` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `othe` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maktum`
--

INSERT INTO `maktum` (`sno`, `name`, `age`, `gender`, `phone`, `othe`, `date`) VALUES
(15, 'Varun Desai', 23, 'Male', 9234567890, 'Head-Ack', '2023-06-16 17:21:46'),
(18, 'Sham patil', 45, 'Male', 2147483647, '*****', '2023-06-20 12:45:26'),
(19, 'SuhelMaktum', 12, 'Male', 2147483647, 'dcs', '2023-06-20 12:47:12'),
(20, 'SuhelMaktum', 12, 'Male', 9860853258, '****', '2023-06-20 13:26:57'),
(21, 'SuhelMaktum', 12, 'Male', 9307834947, '****', '2023-06-20 13:27:13'),
(22, 'suhel', 45, 'Male', 9307834947, '*******', '2023-06-20 13:27:30'),
(24, 'ram ', 65, 'Male', 9408945765, '*****', '2023-06-20 13:28:38'),
(25, 'Suraj Maktum', 78, 'Male', 9090907070, '////', '2023-06-20 13:29:01'),
(26, 'SuhelMaktum', 12, 'Male', 9860853258, '***', '2023-06-20 13:32:37'),
(27, 'SuhelMaktum', 12, 'Male', 9860853258, '***', '2023-06-20 13:35:01'),
(28, 'SuhelMaktum', 12, 'Male', 9860853258, '***', '2023-06-20 13:35:49'),
(29, 'SuhelMaktum', 12, 'Male', 9307834947, '***', '2023-06-20 13:36:03'),
(30, 'SuhelMaktum', 12, 'Male', 9307834947, '***', '2023-06-20 13:36:55'),
(31, 'SuhelMaktum', 12, 'Male', 9307834947, '***', '2023-06-20 13:39:40'),
(32, 'SuhelMaktum', 12, 'Male', 9307834947, '***', '2023-06-20 13:50:03'),
(33, 'SuhelMaktum', 12, 'Male', 9307834947, '***', '2023-06-20 13:50:31'),
(34, 'suhel', 12, 'male', 9307834947, 'suhel', '2023-06-22 12:07:02'),
(35, 'suhel', 12, 'male', 9307834947, 'suhel', '2023-06-22 12:08:30'),
(36, 'suhel', 12, 'male', 9307834947, 'suhel', '2023-06-22 12:21:47'),
(37, 'suhel', 12, 'Female', 9307834947, 'suhel maktum', '2023-06-22 12:28:39'),
(38, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 12:53:44'),
(39, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 12:59:56'),
(40, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:02:40'),
(41, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:02:51'),
(42, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:16:40'),
(43, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:17:04'),
(44, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:19:10'),
(45, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:23:32'),
(46, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:23:51'),
(47, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:23:56'),
(48, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:32:14'),
(49, 'SuhelMaktum', 14, 'Male', 9307834947, 'khvvh', '2023-06-22 13:32:48'),
(50, 'suhel maktum', 12, 'Male', 1234566778, 'suhel shakil maktum', '2023-06-22 13:36:32'),
(51, 'suhel', 25, 'Female', 9408945765, 'suhel maktum', '2023-06-22 13:59:09'),
(52, 'SuhelMaktum', 12, 'Male', 9860853258, 'suhel', '2023-06-22 14:48:11'),
(53, 'SuhelMaktum', 45, 'Male', 9307834947, 'suhel maktum ', '2023-06-22 14:49:59'),
(54, 'ram patil', 88, 'Female', 8888008080, 'suhel maktum', '2023-06-22 14:53:09'),
(55, 'sham ramesh patil', 32, 'male', 4323566587, 'suhel maktum', '2023-06-22 15:03:35'),
(56, 'Mahesh Patil', 76, 'Female', 9090808887, 'suhel maktum', '2023-06-22 15:05:05'),
(57, 'SuhelMaktum', 35, 'male', 9899099099, 'suhel maktum', '2023-06-22 17:11:33'),
(58, 'suhel', 56, 'male', 9494949495, 'SUhel maktum', '2023-06-22 17:18:07'),
(59, 'Rohit Patil', 23, 'male', 9850550909, '*****', '2023-06-24 17:50:48'),
(61, 'sourabh', 101, 'male', 8080852692, '***************', '2023-06-29 18:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`ad_id`, `ad_name`, `ad_pswd`, `ad_eml`) VALUES
('tatahospmu', 'Suhel Maktum', 'Tatahos@0243', 'suhel4work@gmail.com'),
('', 'Suhel', 'suhel@123', 'suhel@gmail.com'),
('suhel', 'Suhel Maktum', 'Suhel@123', 'suhel4work@gmail.com'),
('ssmaktum', 'suhel', 'Pass@123', 'pass@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_reports`
--

CREATE TABLE `t_reports` (
  `sno` int(4) NOT NULL,
  `p_cbc` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_urin` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_xray` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_ecg` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_ct` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_mri` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_ultra` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `p_other` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_reports`
--

INSERT INTO `t_reports` (`sno`, `p_cbc`, `p_urin`, `p_xray`, `p_ecg`, `p_ct`, `p_mri`, `p_ultra`, `p_other`, `date`) VALUES
(14, 'cbc.pdf', 'urin.pdf', 'xray.pdf', 'ECG.pdf', 'CT.pdf', 'MRI.pdf', 'UltraSound.pdf', 'Other.pdf', '2023-06-30 13:47:47'),
(15, 'Other.pdf', 'Other.pdf', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(18, 'cbc.pdf', 'UltraSound.pdf', '', '', 'MRI.pdf', '', '', '', '2023-06-30 13:47:47'),
(20, 'misal pav.jpg', '', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(24, 'misal pav.jpg', 'BDA Assignments Ch1 and 2.pdf', 'T1.pdf', 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23].pdf', 'misal pav.jpg', '02_FYP_Final Project Report_(Formatting Guidelines).pdf', 'misal pav.jpg', '2023-06-30 13:47:47'),
(25, 'cbc.pdf', '', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(28, 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47'),
(31, 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23] (1).pdf', 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23] (1).pdf', 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23] (1).pdf', 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23] (1).pdf', '2023-06-30 13:47:47'),
(32, 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47'),
(33, 'PROSPECT 1.jpg', 'PROSPECT 1.jpg', 'Aadhar.jpeg', 'PROSPECT 1.jpg', 'PROSPECT 1.jpg', 'PROSPECT 1.jpg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47'),
(34, 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47'),
(35, 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23] (1).pdf', 'BDA Assignments Ch1 and 2.pdf', 'T1 (1).pdf', 'T1 (1).pdf', '01_FYP_Final Project Report_(Contents)[AY 2022-23].pdf', 'misal pav.jpg', 'T1 (2).pdf', '2023-06-30 13:47:47'),
(44, 'misal pav.jpg', '01_FYP_Final Project Report_(Contents)[AY 2022-23] (1).pdf', 'misal pav.jpg', 'BDA Assignments Ch1 and 2.pdf', 'T1 (1).pdf', '01_FYP_Final Project Report_(Contents)[AY 2022-23].pdf', 'mad 1.pdf', 'alap.pdf', '2023-06-30 13:47:47'),
(45, 'PRO2.jpg', 'PRO2.jpg', 'PRO2.jpg', 'PRO2.jpg', 'PRO2.jpg', 'PRO2.jpg', 'PRO2.jpg', 'PRO2.jpg', '2023-06-30 13:47:47'),
(54, 'cbc.pdf', '', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(55, 'cbc.pdf', '', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(56, 'cbc.pdf', '', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(59, 'cbc.pdf', 'urin.pdf', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(61, 'cbc.pdf', '', '', '', '', '', '', '', '2023-06-30 13:47:47'),
(67, 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47'),
(77, 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47'),
(88, 'download (1).png', 'download (1).png', 'download (1).png', 'download (1).png', 'download (1).png', 'download (1).png', 'download (1).png', 'download (1).png', '2023-06-30 13:47:47'),
(99, 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'PRO3.jpg', 'PRO3.jpg', 'Aadhar.jpeg', 'Aadhar.jpeg', 'Aadhar.jpeg', '2023-06-30 13:47:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maktum`
--
ALTER TABLE `maktum`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `t_reports`
--
ALTER TABLE `t_reports`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maktum`
--
ALTER TABLE `maktum`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
