-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2023 at 04:23 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_master`
--

DROP TABLE IF EXISTS `candidate_master`;
CREATE TABLE IF NOT EXISTS `candidate_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_initials` varchar(225) NOT NULL,
  `c_name` varchar(225) NOT NULL,
  `c_nameforinitials` varchar(225) NOT NULL,
  `c_dob` date NOT NULL,
  `c_age` varchar(225) NOT NULL,
  `c_dis` varchar(225) NOT NULL,
  `c_pro` varchar(225) NOT NULL,
  `c_sex` varchar(225) NOT NULL,
  `c_Cstatus` varchar(225) NOT NULL,
  `c_nicp` varchar(225) NOT NULL,
  `c_nicpd` varchar(225) NOT NULL,
  `c_ds` varchar(225) NOT NULL,
  `c_poscode` varchar(225) NOT NULL,
  `c_lcity` varchar(225) NOT NULL,
  `c_ldis` varchar(225) NOT NULL,
  `c_lpro` varchar(225) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidate_master`
--

INSERT INTO `candidate_master` (`id`, `c_initials`, `c_name`, `c_nameforinitials`, `c_dob`, `c_age`, `c_dis`, `c_pro`, `c_sex`, `c_Cstatus`, `c_nicp`, `c_nicpd`, `c_ds`, `c_poscode`, `c_lcity`, `c_ldis`, `c_lpro`, `updated_at`, `created_at`) VALUES
(2, 'M R', 'Gamage', 'Mahinda', '2023-11-01', '67', 'Colombo', 'Westren', 'Male', 'Married', '9827952N', '1967-04-04', 'Madacokmba', '102910', '88', 'Colombo', 'Westren', '2023-11-11 00:32:43', '2023-11-11 00:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `electionpresident_master`
--

DROP TABLE IF EXISTS `electionpresident_master`;
CREATE TABLE IF NOT EXISTS `electionpresident_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pec_fullname` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pec_name` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pec_party` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `electionpresident_master`
--

INSERT INTO `electionpresident_master` (`id`, `pec_fullname`, `pec_name`, `pec_party`, `updated_at`, `created_at`) VALUES
(1, 'Mahinda Rajapakshe', 'Mahinda', 'UK', '2023-11-11 04:26:51', '2023-11-11 09:56:51'),
(2, 'a', 'a', 'UK', '2023-11-11 04:27:40', '2023-11-11 09:57:40'),
(3, 'Jimalo', 'M R', 'SLAP', '2023-11-11 04:33:16', '2023-11-11 10:03:16'),
(4, 'Mahinda Rajapakshe', 'a', 'UNP', '2023-11-11 05:03:51', '2023-11-11 10:33:51'),
(5, 'KKK', 'Kkk', 'SLAP', '2023-11-11 14:07:17', '2023-11-11 19:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `voter_master`
--

DROP TABLE IF EXISTS `voter_master`;
CREATE TABLE IF NOT EXISTS `voter_master` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `v_initials` varchar(225) NOT NULL,
  `v_name` varchar(225) NOT NULL,
  `v_nameforinitials` varchar(225) NOT NULL,
  `v_dob` date NOT NULL,
  `v_age` varchar(225) NOT NULL,
  `v_dis` varchar(225) NOT NULL,
  `v_pro` varchar(225) NOT NULL,
  `v_sex` varchar(225) NOT NULL,
  `v_Cstatus` varchar(225) NOT NULL,
  `v_nicp` varchar(225) NOT NULL,
  `v_nicpd` varchar(225) NOT NULL,
  `v_ds` varchar(225) NOT NULL,
  `v_poscode` varchar(225) NOT NULL,
  `v_lcity` varchar(225) NOT NULL,
  `v_ldis` varchar(225) NOT NULL,
  `v_lpro` varchar(225) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `status` text,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voter_master`
--

INSERT INTO `voter_master` (`Id`, `v_initials`, `v_name`, `v_nameforinitials`, `v_dob`, `v_age`, `v_dis`, `v_pro`, `v_sex`, `v_Cstatus`, `v_nicp`, `v_nicpd`, `v_ds`, `v_poscode`, `v_lcity`, `v_ldis`, `v_lpro`, `password`, `status`, `updated_at`, `created_at`) VALUES
(1, 'q', '2', 'q', '2023-10-25', '23', 'option2', 'option4', 'Male', 'option2', '22222', '2023-10-20', '2', '2', '2', 'option2', 'option4', NULL, NULL, '2023-10-29 13:18:18', '2023-10-29 13:18:18'),
(2, 'S D K N', 'Gampola', 'Siriparhul Dewayalage', '1998-05-10', '25', 'option2', 'option2', 'Male', 'option3', '982790999V', '2014-12-08', 'Udapalatha', '20500', 'Gampola', 'option2', 'option2', NULL, NULL, '2023-10-31 10:53:29', '2023-10-31 10:53:29'),
(3, 'a', 'bb', 'a', '2023-10-06', '23', '-', 'option1', 'option1', 'option1', 'vvvv', '2023-10-06', 'Udapalatha', '20500', '2', 'option1', 'option1', NULL, NULL, '2023-10-31 10:56:00', '2023-10-31 10:56:00'),
(4, 'a', 'bb', 'a', '2023-10-06', '23', 'Jafna', 'option1', 'option1', 'option1', 'vvvv', '2023-10-06', 'Udapalatha', '20500', '2', 'option1', 'option1', NULL, NULL, '2023-10-31 10:56:23', '2023-10-31 10:56:23'),
(5, 'qqq', 'qqq', 'qqq', '2023-11-30', '78', 'Colombo', 'Centrel', 'Female', 'Married', 'qqqq', '2023-11-28', 'qqq', 'qqq', 'qqq', 'Kandy', 'Centrel', NULL, NULL, '2023-11-03 11:21:01', '2023-11-03 11:21:01'),
(8, 'K M', 'Aruppla', 'Ranasinghe Mudiyasalage', '2023-11-02', '21', 'Kandy', 'Centrel', 'Female', 'Unmarried', '200252522', '2000-04-04', 'Kandy', '20586', 'Uplands', 'Kandy', 'Centrel', NULL, NULL, '2023-11-05 11:16:22', '2023-11-05 11:16:22'),
(10, 'qwqwqwq', 'qwqw', 'qwq', '2023-12-09', 'qw', 'Kandy', 'Westren', 'Male', 'Married', 'qw', '2023-11-23', 'qw', 'qw', 'qw', 'Kandy', 'Westren', NULL, NULL, '2023-11-05 11:39:14', '2023-11-05 11:39:14'),
(12, 'A', 'B', 'C', '1998-04-04', '54', 'Kandy', 'Centrel', 'Male', 'Married', '789789', '1998-05-05', 'Udapalatha', '5555', '555', '-', 'Centrel', NULL, NULL, '2023-11-07 11:13:12', '2023-11-07 11:13:12'),
(13, 'M V L', 'Nalani Piyasena', 'Madagedara Withana', '1961-02-03', '60', 'Kandy', 'Centrel', 'Female', 'Married', '1961542', '1975-05-12', 'Udapalatha', '20500', 'Gampola', 'Jafna', 'Centrel', NULL, NULL, '2023-11-07 12:21:53', '2023-11-07 12:21:53'),
(14, 'Saman', 'Gamage', 'Edirisinghe', '2023-11-09', '67', '-', '-', '-', '-', '12586866', '2011-11-11', 'Madacokmba', '9999999999', '88', '-', '-', '7896542', 'Not Voted', '2023-11-14 10:23:57', '2023-11-14 10:23:57'),
(15, 'abc', 'def', 'ghi', '2023-11-02', '67', 'Kandy', 'Westren', 'Female', 'Unmarried', '12586866', '2023-11-08', 'Madacokmba', '9999999999', '88', 'Colombo', 'Centrel', '$2y$10$FPaBPvjH1j92DXtTix6tVe31rdh3JlbijpSHhHT3nCW.T2X1RWS.m', 'Not Voted', '2023-11-14 10:49:25', '2023-11-14 10:49:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
