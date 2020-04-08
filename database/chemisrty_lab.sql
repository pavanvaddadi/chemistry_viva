-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2020 at 05:22 PM
-- Server version: 5.7.28
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemisrty_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `Serial` int(11) NOT NULL,
  `Question` longtext NOT NULL,
  `Experiment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Serial`, `Question`, `Experiment`) VALUES
(1, 'Q1 from Exp 1', 1),
(2, 'Q2 from Exp 1', 1),
(3, 'Q3 from Exp 1', 1),
(4, 'Q4 from Exp 1', 1),
(5, 'Q5 from Exp 1', 1),
(6, 'Q1 from Exp 2', 2),
(7, 'Q2 from Exp 2', 2),
(8, 'Q3 from Exp 2', 2),
(9, 'Q4 from Exp 2', 2),
(10, 'Q5 from Exp 2', 2),
(11, 'Q1 from Exp 3', 3),
(12, 'Q2 from Exp 3', 3),
(13, 'Q3 from Exp 3', 3),
(14, 'Q4 from Exp 3', 3),
(15, 'Q5 from Exp 3', 3),
(16, 'Q1 from Exp 4', 4),
(17, 'Q2 from Exp 4', 4),
(18, 'Q3 from Exp 4', 4),
(19, 'Q4 from Exp 4', 4),
(20, 'Q5 from Exp 4', 4),
(21, 'Q1 from Exp 5', 5),
(22, 'Q2 from Exp 5', 5),
(23, 'Q3 from Exp 5', 5),
(24, 'Q4 from Exp 5', 5),
(25, 'Q5 from Exp 5', 5),
(26, 'Q1 from Exp 6', 6),
(27, 'Q2 from Exp 6', 6),
(28, 'Q3 from Exp 6', 6),
(29, 'Q4 from Exp 6', 6),
(30, 'Q5 from Exp 6', 6),
(31, 'Q1 from Exp 7', 7),
(32, 'Q2 from Exp 7', 7),
(33, 'Q3 from Exp 7', 7),
(34, 'Q4 from Exp 7', 7),
(35, 'Q5 from Exp 7', 7),
(36, 'Q1 from Exp 8', 8),
(37, 'Q2 from Exp 8', 8),
(38, 'Q3 from Exp 8', 8),
(39, 'Q4 from Exp 8', 8),
(40, 'Q5 from Exp 8', 8),
(41, 'Q1 from Exp 9', 9),
(42, 'Q2 from Exp 9', 9),
(43, 'Q3 from Exp 9', 9),
(44, 'Q4 from Exp 9', 9),
(45, 'Q5 from Exp 9', 9),
(46, 'Q1 from Exp 10', 10),
(47, 'Q2 from Exp 10', 10),
(48, 'Q3 from Exp 10', 10),
(49, 'Q4 from Exp 10', 10),
(50, 'Q5 from Exp 10', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
