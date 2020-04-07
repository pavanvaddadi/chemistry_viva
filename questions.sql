-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 04:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemisrty lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
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
(6, 'Q6 from Exp 2', 2),
(7, 'Q7 from Exp 2', 2),
(8, 'Q8 from Exp 2', 2),
(9, 'Q9 from Exp 2', 2),
(10, 'Q10 from Exp 2', 2),
(11, 'Q11 from Exp 3', 3),
(12, 'Q12 from Exp 3', 3),
(13, 'Q13 from Exp 3', 3),
(14, 'Q14 from Exp 3', 3),
(15, 'Q15 from Exp 3', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
