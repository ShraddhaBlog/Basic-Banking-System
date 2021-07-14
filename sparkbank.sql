-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 05:23 PM
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
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transact`
--

CREATE TABLE `transact` (
  `Id` int(10) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Reciever` varchar(20) NOT NULL,
  `Amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transact`
--

INSERT INTO `transact` (`Id`, `Sender`, `Reciever`, `Amount`) VALUES
(1, 'Gauri Pandey', 'Divya Gupta', 400),
(2, 'Kanchan Dharmale', 'Vaishanavi Kolhe', 300),
(3, 'Shreya Nagdive', 'Prajyoti Gokhare', 2000),
(4, 'Aditi Shinde', 'Pranjal Gujar', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Accno` varchar(20) NOT NULL,
  `Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Accno`, `Name`, `Email`, `Balance`) VALUES
(1, 'ACC123', 'Gauri Pandey', 'gauri@gmail.com', 10000),
(2, 'ACC324', 'Prajyoti Gokhare', 'praj@gmail.com', 2000),
(3, 'ACC345', 'Shreya Nagdive', 'shreya@gmil.com', 3000),
(4, 'ACC672', 'Janhavi Deshmukh', 'janh@gmail.com', 4000),
(5, 'ACC346', 'Vaishnavi Kolhe', 'vais@gmail.com', 100),
(6, 'ACC871', 'Sejal Shrirao', 'sejal@gmail.com', 2900),
(7, 'ACC823', 'Divya Gupta', 'div@gmail.com', 9000),
(8, 'ACC290', 'Trunika Mishra', 'Tanu@gmail.com', 6000),
(9, 'ACC765', 'Kanchan Dharmale', 'kancha@gmail.com', 4000),
(10, 'ACC546', 'Shruti Mishra', 'shru@gmail.com', 100),
(11, 'ACC452', 'Priti Shukla', 'priti@gmail.com', 2000),
(12, 'ACC301', 'Aditi Shinde', 'aditi@gmail.com', 7000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transact`
--
ALTER TABLE `transact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Accno` (`Accno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transact`
--
ALTER TABLE `transact`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
