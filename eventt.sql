-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 01:44 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `its_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventt`
--

CREATE TABLE `eventt` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventt`
--

INSERT INTO `eventt` (`id`, `nama`, `deskripsi`, `tanggal`) VALUES
(1, 'sasa', '1000', ''),
(2, 'lola', '2111', ''),
(3, 'Rahmtika Jagad p', '00', '01-01-2020'),
(4, 'papa', 'mumu', '21-12-00'),
(5, 'oppo', 'sasaopo', '21-12-00op'),
(6, 'Rahmtika Jagad p', 'sasa', 'dd/mm/yyyy'),
(7, 'rafiindraper', '00', 'dd/mm/yyyy'),
(8, 'per', '00', 'dd/mm/yyyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventt`
--
ALTER TABLE `eventt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventt`
--
ALTER TABLE `eventt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
