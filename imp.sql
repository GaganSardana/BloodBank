-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 11:17 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Comment`) VALUES
('GAGAN', 'gagansardana5@gmail.com', 'DOING VERY GOOD JOB ....');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Name` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Units` int(100) NOT NULL,
  `Detail` varchar(800) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Name`, `Type`, `Units`, `Detail`, `Email`, `Contact`) VALUES
('AMD HOSPITAL', 'A+', 10, 'CONTACT IF YOU NEED', 'g@g.com', 9874563214),
('AMD HOSPITAL', 'O+', 20, 'CONTACT IF U NEED', 'g@g.com', 9874563214);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Name`, `Email`, `Password`, `Address`, `Contact`) VALUES
('AMD HOSPITAL', 'g@g.com', 'a', 'NEAR PATEL CHOWK', 9871045632);

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Blood` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`Name`, `Email`, `Password`, `Address`, `Contact`, `Blood`) VALUES
('gaga', 'ga@ga.com', 'a', 'near chowk', 2147483647, 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Name` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Name`, `Type`, `Gender`, `Email`, `Contact`) VALUES
('gaga', 'A+', 'MALE', 'ga@ga.com', 9874563214);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
