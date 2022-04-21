-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 12:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoldseges`
--

-- --------------------------------------------------------

--
-- Table structure for table `keszlet`
--

CREATE TABLE `keszlet` (
  `raktarID` int(10) NOT NULL,
  `termekID` int(10) NOT NULL,
  `mennyiseg` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keszlet`
--

INSERT INTO `keszlet` (`raktarID`, `termekID`, `mennyiseg`) VALUES
(1, 1, 23),
(2, 2, 65),
(3, 4, 50),
(4, 6, 12),
(5, 7, 69);

-- --------------------------------------------------------

--
-- Table structure for table `termekek`
--

CREATE TABLE `termekek` (
  `termekID` int(10) NOT NULL,
  `nev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termekek`
--

INSERT INTO `termekek` (`termekID`, `nev`) VALUES
(1, 'Paprika'),
(2, 'Paradicsom'),
(4, 'Amigo'),
(6, 'asd'),
(7, 'Ananász');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keszlet`
--
ALTER TABLE `keszlet`
  ADD PRIMARY KEY (`raktarID`),
  ADD KEY `ibfk_conn_termek` (`termekID`);

--
-- Indexes for table `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`termekID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keszlet`
--
ALTER TABLE `keszlet`
  MODIFY `raktarID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `termekek`
--
ALTER TABLE `termekek`
  MODIFY `termekID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keszlet`
--
ALTER TABLE `keszlet`
  ADD CONSTRAINT `ibfk_conn_termek` FOREIGN KEY (`termekID`) REFERENCES `termekek` (`termekID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
