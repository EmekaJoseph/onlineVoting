-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 07:52 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `enabled` int(2) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nick`, `username`, `role`, `enabled`, `password`) VALUES
(1, 'Proffix', 'emeka', 'superadmin', 1, '$2y$10$s7GEwCs/XaO1Q8zzAL8Q6eYeRq5kDA5OFeZDXyaP2kPxhtacOTDjC'),
(2, 'male', 'fefnefe', 'admin', 1, '$2y$10$vkE2B14rdmMbi5Di3WulQuCa9g5mOKVeV39UP/eVmEdqdDvW99b.i'),
(7, 'joseph', 'emeka11', 'admin', 1, '$2y$10$rUDRJEqRtf.YO79gYCumCuURao/mHaYhStYIjZLP0DRBjoQR4n2oq'),
(8, 'cvb', 'emeka1', 'admin', 0, '$2y$10$E8DwH4Lhd.3Ahp4FRjdxFeXtSAvUhEoaBFbIGejH0MSvr.Z5MwDbm');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `post` varchar(255) NOT NULL,
  `num_of_votes` int(20) NOT NULL,
  `picture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `fullname`, `post`, `num_of_votes`, `picture`) VALUES
(16, 'rrrrrr', 'game', 3, ''),
(18, 'ssssssss', 'game', 0, ''),
(19, 'dddd', 'game', 2, ''),
(20, 'sam', 'game', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `position`) VALUES
(35, 'game');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `voted` int(10) NOT NULL,
  `vote_date` varchar(50) NOT NULL,
  `vote_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `firstname`, `lastname`, `code`, `voted`, `vote_date`, `vote_time`) VALUES
(11, 'emeka', 'iwuji', 'k2e888', 1, 'January 24th 2021', '1:42:43 pm'),
(12, 'fgffy', 'jhfj', '72jf8f', 1, 'January 24th 2021', '1:43:15 pm'),
(13, 'donald', 'emeka', 'nea2a1', 1, 'January 24th 2021', '1:43:45 pm'),
(14, 'sdsas', 'iwuji', 'ud213i', 1, 'January 24th 2021', '9:46:48 pm'),
(15, 'dvffrth', 'iwuji', 'fr5ui7', 1, 'January 24th 2021', '9:47:08 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
