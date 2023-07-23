-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 10:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypro_bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `psw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `psw`) VALUES
(2, 'admin@123', 'a123'),
(7, 'admin@1231', 'akk2'),
(8, 'a', '112'),
(9, 'sanju', '1245'),
(10, 'deeksha', '112'),
(11, 'akhlesh', '112'),
(12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(5) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `bgroup` varchar(5) DEFAULT NULL,
  `mob` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `mname`, `fname`, `address`, `city`, `age`, `bgroup`, `mob`, `email`, `gender`) VALUES
(19, 'akhlesh', 'z', 'cvcx', 'v', 'ccx', 'O+', '+449720207824', 'xzcsxc@asdd', 'Male'),
(20, 'akhlesh', 'Chhatra pal', 'VILLAGE MUGLAKHERA\r\nPOST AND TEHSEEL AMARIA\r\nDISTRICT PILIBHIT', 'PILIBHIT', '26', 'O+', '9720207824', 'akhleshpbt@gmail.com', 'Male'),
(21, 'ak', 'ss', 'aaaaaa', 'dsa', '11', 'AB+', '4445', 'waad@sds', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_b`
--

CREATE TABLE `exchange_b` (
  `id` int(11) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `bgroup` varchar(5) DEFAULT NULL,
  `mob` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_b`
--

INSERT INTO `exchange_b` (`id`, `mname`, `fname`, `address`, `city`, `age`, `bgroup`, `mob`, `email`) VALUES
(1, 'akhlesh', '', 'village-Mugla khera\r\npost & teh.-Amaria\r\ndistt.-Pilibhit', 'Pilibhit', '26', 'AB+', '+919720207824', 'akhleshpbt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `out_stock_b`
--

CREATE TABLE `out_stock_b` (
  `id` int(5) NOT NULL,
  `bname` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mob` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `out_stock_b`
--

INSERT INTO `out_stock_b` (`id`, `bname`, `name`, `mob`) VALUES
(11, 'AB+', 'akhlesh', '+919720207824'),
(12, 'O+', 'akhlesh', '+449720207824'),
(13, 'AB+', 'akhlesh', '+919720207824');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_b`
--
ALTER TABLE `exchange_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stock_b`
--
ALTER TABLE `out_stock_b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exchange_b`
--
ALTER TABLE `exchange_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `out_stock_b`
--
ALTER TABLE `out_stock_b`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
