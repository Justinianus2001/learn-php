-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 11:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin_chi`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id_mh` int(20) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id_mh`, `name`, `subject`) VALUES
(1, 'Toan 10', 'Toan10'),
(2, 'Van 10', 'Van10'),
(3, 'Anh 10', 'Anh10'),
(4, 'Ly 10', 'Ly10'),
(5, 'Hoa 10', 'Hoa10'),
(6, 'Sinh 10', 'Sinh10'),
(7, 'Su 10', 'Su10'),
(8, 'Dia 10', 'Dia10'),
(9, 'GDCD 10', 'GDCD10');

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id_sv` int(20) NOT NULL,
  `id_mh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id_sv`, `id_mh`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id_major` int(20) NOT NULL,
  `major` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id_major`, `major`) VALUES
(1, 'Toan'),
(2, 'Van'),
(3, 'Anh'),
(4, 'Ly'),
(5, 'Hoa'),
(6, 'Sinh'),
(7, 'Su'),
(8, 'Dia'),
(9, 'GDCD');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_sv` int(20) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `major` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_sv`, `name`, `age`, `major`) VALUES
(1, 'Quy', 22, 'Hoa'),
(2, 'Nguyen Thanh Quy', 17, 'Toan'),
(3, 'A', 18, 'Dia'),
(4, 'GB', 20, 'GDCD'),
(23, 'ABC', 20, 'Sinh');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id_subject` int(20) NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id_subject`, `subject`) VALUES
(1, 'Toan10'),
(2, 'Van10'),
(3, 'Anh10'),
(4, 'Ly10'),
(5, 'Hoa10'),
(6, 'Sinh10'),
(7, 'Su10'),
(8, 'Dia10'),
(9, 'GDCD10'),
(10, 'Toan11'),
(11, 'Van11'),
(12, 'Anh11'),
(13, 'Ly11'),
(14, 'Hoa11'),
(15, 'Sinh11'),
(16, 'Su11'),
(17, 'Dia11'),
(18, 'GDCD11'),
(19, 'Toan12'),
(20, 'Van12'),
(21, 'Anh12'),
(22, 'Ly12'),
(23, 'Hoa12'),
(24, 'Sinh12'),
(25, 'Su12'),
(26, 'Dia12'),
(27, 'GDCD12'),
(29, 'GDQP'),
(30, 'TD'),
(31, 'Boi'),
(32, 'Bong ro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_mh`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id_major`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_sv`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id_subject`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id_mh` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id_major` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_sv` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id_subject` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
