-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplicant`
--

CREATE TABLE `aplicant` (
  `id` int(11) NOT NULL,
  `saxeli` varchar(50) NOT NULL,
  `piradobisNomeri` int(11) NOT NULL,
  `registraciisTarigi` datetime NOT NULL,
  `paroli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aplicant`
--

INSERT INTO `aplicant` (`id`, `saxeli`, `piradobisNomeri`, `registraciisTarigi`, `paroli`) VALUES
(62, '', 0, '0000-00-00 00:00:00', ''),
(63, 'Mariam sikharulidze', 4634, '2021-06-02 00:00:00', 'tryhard'),
(64, 'Mariam', 3, '2021-06-02 00:00:00', '23324');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `sakontaktoInformacia` varchar(50) NOT NULL,
  `ganatleba` varchar(50) NOT NULL,
  `samushaoGamocdileba` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`sakontaktoInformacia`, `ganatleba`, `samushaoGamocdileba`, `id`) VALUES
('', '', '', 1),
('vb', 'ასფს', '', 2),
('vb', 'ასფს', '', 3),
('vb', 'ასფს', '', 4),
('ასდას', 'ასდასდ', '', 5),
('ასდას', 'ასდასდ', '', 6),
('ასდას', 'ასდასდ', '', 7),
('ასდას', 'ასდასდ', '', 8),
('ასდას', 'ასდასდ', 'asdasd', 9),
('ასდას', 'ასდასდ', 'asdasd', 10),
('ასდას', 'ასდასდ', 'asdasd', 11),
('', '', '', 12),
('', '', '', 13),
('', '', '', 14),
('', '', '', 15),
('vb', '', '', 16),
('vb', '', '', 17),
('vb', '', '', 18),
('', '', '', 19),
('vb', 'ასფს', '', 20),
('asdasd', 'asd', 'asdasd', 21),
('asdasd', 'asd', 'asdasd', 22),
('', '', '', 23),
('', '', '', 24),
('', '', '', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aplicant`
--
ALTER TABLE `aplicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aplicant`
--
ALTER TABLE `aplicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
