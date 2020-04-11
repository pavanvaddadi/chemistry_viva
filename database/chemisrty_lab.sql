-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 01:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin` (
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
-- Table structure for table `experiments`
--

CREATE TABLE `experiments` (
  `ExperimentNumber` int(11) NOT NULL,
  `ExperimentName` text NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `GroupType` text NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiments`
--

INSERT INTO `experiments` (`ExperimentNumber`, `ExperimentName`, `IsActive`, `GroupType`, `CreatedOn`, `UpdatedOn`) VALUES
(1, 'Determination of HCl using sodium carbonate', 1, 'A', '2020-04-11 11:06:38', '2020-04-11 11:06:38'),
(2, 'Determination of strength of acid in lead acid battery', 1, 'A', '2020-04-11 11:06:42', '2020-04-11 11:06:42'),
(3, 'Determination of percent of CaO in cement', 1, 'A', '2020-04-11 11:06:46', '2020-04-11 11:06:46'),
(4, 'Determination of total hardness of water', 1, 'A', '2020-04-11 11:06:49', '2020-04-11 11:06:49'),
(5, 'COLORIMETRY', 1, 'B', '2020-04-11 11:06:57', '2020-04-11 11:06:57'),
(6, 'pH metry', 1, 'B', '2020-04-11 11:07:01', '2020-04-11 11:07:01'),
(7, 'Conductometry', 1, 'B', '2020-04-11 11:07:05', '2020-04-11 11:07:05'),
(8, 'Potentiometry', 1, 'B', '2020-04-11 11:07:08', '2020-04-11 11:07:08'),
(9, 'Determnation of acid number and saponification number of lubricant', 1, 'A', '2020-04-11 11:07:12', '2020-04-11 11:07:12'),
(10, 'Detrmination of adsorption of acetic acid on charcoal', 1, 'A', '2020-04-11 11:07:17', '2020-04-11 11:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Serial` int(11) NOT NULL,
  `Question` longtext NOT NULL,
  `Experiment` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT '1',
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedatedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Serial`, `Question`, `Experiment`, `IsActive`, `CreatedOn`, `UpdatedatedOn`) VALUES
(1, 'Why HCl is titrated with standard sodium carbonate', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(2, 'Is HCl can be titrated with NaOH directly', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(3, 'Is there any other indicator that can be used in the place of methyl orange', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(4, 'What is standard solution and how many types are there', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(5, 'What is difference between primary and secondary solutions', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(6, 'What is the difference between end point and equivalence point in a titration', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(7, 'How many types of  reactions in volumetric analysis ', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(8, 'What is the principle in the present titration', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(9, 'Compare the concentration of HCl  (result) with standard lab concentration of HCl', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(10, 'Give the industrial applications of the present experiment', 1, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(11, 'Phenolphthalein is a suitable indicator for the present experiment- justify', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(12, 'What is the relation between concentration and specific gravity?', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(13, 'Can you study the effect of concentration of acid on the lead acid battery', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(14, 'Explain the phenomenon of neutralization', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(15, 'Reason for drop in voltage while drawing current from a battery.', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(16, 'Write the chemical equations involved during discharging and charging cycle.', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(17, 'Plot a graph between concentration of electrolyte and voltage of a lead acid battery.', 2, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(18, 'How do you determine the total CaO content in the cement', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(19, 'Importance of Calcium Oxide in cement', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(20, 'Name the indicators used in the experiment', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(21, 'Why EBT is not used in the determination of Calcium Oxide', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(22, 'Explain the  Role of glycerol in rapid EDTA method', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(23, 'What is the  Role of NaOH in rapid EDTA method', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(24, 'Give the Function of diethyl amine', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(25, 'Importance of pH in the experiment of rapid EDTA method', 3, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(26, 'What is hard water?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(27, 'Which causes hardness to water?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(28, 'How is water classified based on the degree of hardness?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(29, 'List the types of hardness present in water', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(30, 'State the salts responsible for temporary and permanent hardness of water', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(31, 'What is meant by softening of water?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(32, 'What is EDTA?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(33, 'Why is disodium salt of EDTA preferred to EDTA for estimation of hardness?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(34, 'What is EBT ?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(35, 'What is a buffer solution? Give an example.', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(36, 'Why is ammonium hydroxide-ammonium chloride buffer added during the determination of hardness of water?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(37, 'Mention the disadvantages of hard water for industrial purpose.', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(38, 'List the methods of determining hardness of water.', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(39, 'What is the significance of total hardness of water experiment?', 4, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(40, 'Relation between concentration and absorbance of a solution', 5, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(41, 'Beer''s law and its mathematical expression', 5, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(42, 'What is pH?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(43, 'What is the effect of temperature on pH?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(44, 'What is the pH of pure water at 25 °C?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(45, 'Does the addition of the salt having a common ion onto weak acid change the pH of the solution?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(46, 'What is the pH scale range?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(47, 'How the end point of the titration is obtained in pH metry?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(48, 'How do you measure the pH of a solution?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(49, 'What is the composition of the glass membrane in glass electrode?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(50, 'What is the primary standard used in this experiment?', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(51, 'What is the pH of 0.1M HCl and 0.1M H2SO4', 6, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(52, 'Differentiate between classical method of titration and instrumental method.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(53, 'Narrate the applications of this experiment.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(54, 'What happens if DC source is used for the instrument?', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(55, 'Discuss the principle behind working of conductometer.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(56, 'Explain the effect of temperature on conductance.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(57, 'Give the advantage of condcutometric titration.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(58, 'Study the effect of dilution on conductance measurement', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(59, 'Write various applications of conductometry.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(60, 'As an engineer why this experiment is significant.', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(61, 'Can you calculate conductance of acid at a given volume say 1.26 ml?', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(62, 'Draw a graph of conductometric titration of mixture of starong and weak acid with a strong base. ', 7, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(63, 'Name the indicator electrode in potentiometry', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(64, 'Name the reference electrode in potentiometry', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(65, 'Applications of potentiometry', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(66, 'Advantages potentiometry', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(67, 'Which is used to measure the potential?', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(68, 'Why the potentiometer knobs are adjusted to read mV and the room temperature', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(69, 'Why 4N sulphuric acid is added', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(70, 'What is potential, oxidation potential and reduction potential?', 8, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(71, 'What is lubrication?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(72, 'What is a lubricant?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(73, 'What is oil?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(74, 'Define acid number.', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(75, 'Why ethanol is used as a solvent in the determination of free fatty acids (acid number)?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(76, 'How one can analyze the quality of the oil using acid number?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(77, 'What is saponification number?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(78, 'What is the indicator used in the determination of saponification value?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(79, 'What is the significance of saponification number?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(80, 'Is saponification number same for all oils/fats?', 9, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(81, 'Which adsorption isotherm suits the best for adsorption of acetci acid on charcoal', 10, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(82, 'Applications of adsorption', 10, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(83, 'What is an adsorption isotherm? Write its significance', 10, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46'),
(84, ' What is % acetic acid adsorbed by the charcoal in each case', 10, 1, '0000-00-00 00:00:00', '2020-04-11 10:32:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experiments`
--
ALTER TABLE `experiments`
  ADD PRIMARY KEY (`ExperimentNumber`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Serial`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
