-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 10:04 AM
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
-- Database: `web application`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `SKU` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Size` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Width` int(11) DEFAULT NULL,
  `Length` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `SKU`, `Name`, `Price`, `Type`, `Size`, `Weight`, `Height`, `Width`, `Length`) VALUES
(334, 'GLC20514', 'Some DISC', 3, 'dvd', 700, 0, 0, 0, 0),
(336, 'SDC300154', 'Crime and Punishment', 15, 'book', 0, 2, 0, 0, 0),
(337, 'FSJ145201', 'Silence of the lambs', 10, 'book', 0, 1, 0, 0, 0),
(338, 'FQA45213', 'Steppenwolf', 20, 'book', 0, 1, 0, 0, 0),
(339, 'GHI230015', 'Pride and Prejudice', 15, 'book', 0, 2, 0, 0, 0),
(341, 'FXK45136', 'Mirror', 30, 'furniture', 0, 0, 0, 20, 10),
(342, 'RTS451356', 'White fang', 10, 'book', 0, 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
