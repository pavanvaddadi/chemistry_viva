-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 07:12 AM
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
(1, 'Why HCl is titrated with standard sodium carbonate', 1),
(2, 'Is HCl can be titrated with NaOH directly', 1),
(3, 'Is there any other indicator that can be used in the place of methyl orange', 1),
(4, 'What is standard solution and how many types are there', 1),
(5, 'What is difference between primary and secondary solutions', 1),
(6, 'What is the difference between end point and equivalence point in a titration', 1),
(7, 'How many types of  reactions in volumetric analysis ', 1),
(8, 'What is the principle in the present titration', 1),
(9, 'Compare the concentration of HCl  (result) with standard lab concentration of HCl', 1),
(10, 'Give the industrial applications of the present experiment', 1),
(11, 'Phenolphthalein is a suitable indicator for the present experiment- justify', 2),
(12, 'What is the relation between concentration and specific gravity?', 2),
(13, 'Can you study the effect of concentration of acid on the lead acid battery', 2),
(14, 'Explain the phenomenon of neutralization', 2),
(15, 'Reason for drop in voltage while drawing current from a battery.', 2),
(16, 'Write the chemical equations involved during discharging and charging cycle.', 2),
(17, 'Plot a graph between concentration of electrolyte and voltage of a lead acid battery.', 2),
(18, 'How do you determine the total CaO content in the cement', 3),
(19, 'Importance of Calcium Oxide in cement', 3),
(20, 'Name the indicators used in the experiment', 3),
(21, 'Why EBT is not used in the determination of Calcium Oxide', 3),
(22, 'Explain the  Role of glycerol in rapid EDTA method', 3),
(23, 'What is the  Role of NaOH in rapid EDTA method', 3),
(24, 'Give the Function of diethyl amine', 3),
(25, 'Importance of pH in the experiment of rapid EDTA method', 3),
(26, 'What is hard water?', 4),
(27, 'Which causes hardness to water?', 4),
(28, 'How is water classified based on the degree of hardness?', 4),
(29, 'List the types of hardness present in water', 4),
(30, 'State the salts responsible for temporary and permanent hardness of water', 4),
(31, 'What is meant by softening of water?', 4),
(32, 'What is EDTA?', 4),
(33, 'Why is disodium salt of EDTA preferred to EDTA for estimation of hardness?', 4),
(34, 'What is EBT ?', 4),
(35, 'What is a buffer solution? Give an example.', 4),
(36, 'Why is ammonium hydroxide-ammonium chloride buffer added during the determination of hardness of water?', 4),
(37, 'Mention the disadvantages of hard water for industrial purpose.', 4),
(38, 'List the methods of determining hardness of water.', 4),
(39, 'What is the significance of total hardness of water experiment?', 4),
(40, 'Relation between concentration and absorbance of a solution', 5),
(41, 'Beer''s law and its mathematical expression', 5),
(42, 'What is pH?', 6),
(43, 'What is the effect of temperature on pH?', 6),
(44, 'What is the pH of pure water at 25 °C?', 6),
(45, 'Does the addition of the salt having a common ion onto weak acid change the pH of the solution?', 6),
(46, 'What is the pH scale range?', 6),
(47, 'How the end point of the titration is obtained in pH metry?', 6),
(48, 'How do you measure the pH of a solution?', 6),
(49, 'What is the composition of the glass membrane in glass electrode?', 6),
(50, 'What is the primary standard used in this experiment?', 6),
(51, 'What is the pH of 0.1M HCl and 0.1M H2SO4', 6),
(52, 'Differentiate between classical method of titration and instrumental method.', 7),
(53, 'Narrate the applications of this experiment.', 7),
(54, 'What happens if DC source is used for the instrument?', 7),
(55, 'Discuss the principle behind working of conductometer.', 7),
(56, 'Explain the effect of temperature on conductance.', 7),
(57, 'Give the advantage of condcutometric titration.', 7),
(58, 'Study the effect of dilution on conductance measurement', 7),
(59, 'Write various applications of conductometry.', 7),
(60, 'As an engineer why this experiment is significant.', 7),
(61, 'Can you calculate conductance of acid at a given volume say 1.26 ml?', 7),
(62, 'Draw a graph of conductometric titration of mixture of starong and weak acid with a strong base. ', 7),
(63, 'Name the indicator electrode in potentiometry', 8),
(64, 'Name the reference electrode in potentiometry', 8),
(65, 'Applications of potentiometry', 8),
(66, 'Advantages potentiometry', 8),
(67, 'Which is used to measure the potential?', 8),
(68, 'Why the potentiometer knobs are adjusted to read mV and the room temperature', 8),
(69, 'Why 4N sulphuric acid is added', 8),
(70, 'What is potential, oxidation potential and reduction potential?', 8),
(71, 'What is lubrication?', 9),
(72, 'What is a lubricant?', 9),
(73, 'What is oil?', 9),
(74, 'Define acid number.', 9),
(75, 'Why ethanol is used as a solvent in the determination of free fatty acids (acid number)?', 9),
(76, 'How one can analyze the quality of the oil using acid number?', 9),
(77, 'What is saponification number?', 9),
(78, 'What is the indicator used in the determination of saponification value?', 9),
(79, 'What is the significance of saponification number?', 9),
(80, 'Is saponification number same for all oils/fats?', 9),
(81, 'Which adsorption isotherm suits the best for adsorption of acetci acid on charcoal', 10),
(82, 'Applications of adsorption', 10),
(83, 'What is an adsorption isotherm? Write its significance', 10),
(84, ' What is % acetic acid adsorbed by the charcoal in each case', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Serial`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
