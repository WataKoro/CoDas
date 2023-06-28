-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 03:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idCourse` int(10) NOT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `idCourse`, `courseName`, `isAdmin`) VALUES
(0, 'Irfan Mochamad Esa', 'kadalseptimvii@gmail.com', '$2y$10$DocuCGW4cVu0pDMBnKA6N.i0poGzNozhKOtvc.mutJVyxCLw08222', 6, 'Javascript', 0),
(1, 'tes2', 'tes2@tes.com', '$2y$10$vCxVdYAszmFrbNtAYmVavuMvxBWbhretGrDbDd7it3S.eBlMrrcGa', 1, 'C', 0),
(2, 'admin', 'admin@admin.com', '$2y$10$NACNew1rFr.XrIoAoYk7A.oiKTY2g5G9UIZYFrzwAxeVR1HpkiQEu', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idCourse` int(10) NOT NULL,
  `coursePrice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idCourse`, `coursePrice`) VALUES
(0, 0),
(1, 233990),
(2, 218409),
(3, 281960),
(4, 280449),
(5, 258000),
(6, 221443),
(7, 217501),
(8, 209926),
(9, 294313),
(10, 293287),
(11, 242291),
(12, 286724);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCourse` (`idCourse`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idCourse`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`idCourse`) REFERENCES `course` (`idCourse`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
