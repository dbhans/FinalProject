-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 12:40 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_installation`
--

-- --------------------------------------------------------

--
-- Table structure for table `installation`
--

CREATE TABLE `installation` (
  `enviroment` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `flow` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installation`
--

INSERT INTO `installation` (`enviroment`, `date`, `description`, `name`, `id`, `flow`) VALUES
('Windows', '2019-06-12', 'trhrty', 'ghjgftj', 1, ''),
('Windows', '2019-06-12', 'trhrty', 'ghjgftj', 2, ''),
('Windows Server', '2019-06-11', ' xS ', 'xc   C', 3, ''),
('Linux', '2019-06-28', 'dr hgcb dhhfx v', 'fdbd', 4, 'Start'),
('Linux', '2019-06-20', 'jbhjmvghnfgbxdfsdzfbgdfvxdc', 'dzvfxbghbjnk', 5, 'Start');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `installation`
--
ALTER TABLE `installation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `installation`
--
ALTER TABLE `installation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
