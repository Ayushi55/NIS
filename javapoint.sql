-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 07:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javapoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`ID`, `NAME`, `PRICE`, `CATEGORY`) VALUES
(1, 'Noodles', 120, 'Veg'),
(2, 'Chicken Biryani', 200, 'Non-Veg'),
(3, 'Pav Bhaji', 100, 'Veg'),
(4, 'Chicken Pasta', 180, 'Non-Veg'),
(5, 'Pink Sauce Pasta', 160, 'Veg'),
(6, 'Egg Bhurji', 75, 'Non-Veg'),
(7, 'Cheese Garlic Bread', 130, 'Veg'),
(8, 'Fish Curry', 230, 'Non-Veg'),
(9, 'Pizza', 250, 'Veg'),
(10, 'Mutton Biryani', 280, 'Non-Veg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(1, 'abc', 'abc123'),
(2, 'ayushi', 'ayu123'),
(3, 'aarya456', 'aa234'),
(4, 'mitali990', 'patil124'),
(5, 'admin', 'welcome345'),
(6, 'cummins00', 'mksss123'),
(7, 'jack_nolan', 'asdfg'),
(8, 'swap_rocks', 'always_lat'),
(9, 'neha44', 'relaxguys'),
(10, 'kitkat', 'oreo');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `ID` int(10) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `MODEL` varchar(20) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `RELEASED` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`ID`, `BRAND`, `MODEL`, `PRICE`, `RELEASED`) VALUES
(1, 'Samsung ', 'S5', 15000, 1),
(2, 'Redmi ', 'note 10 pro', 18000, 1),
(3, 'Nokia ', 'X-20', 12000, 0),
(4, 'Moto ', 'G7', 20000, 0),
(5, 'Samsung ', 'S10', 50000, 0),
(6, 'Samsung ', 'A26', 23000, 1),
(7, 'One plus ', '9T', 36000, 1),
(8, 'One plus ', '8T', 51000, 0),
(9, 'One plus ', '7T', 60000, 0),
(10, 'Redmi ', 'note 8', 14000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
