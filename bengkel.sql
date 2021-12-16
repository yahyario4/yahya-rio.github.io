-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 07:05 AM
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
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bengkeljaya`
--

CREATE TABLE `bengkeljaya` (
  `no_faktur` varchar(20) NOT NULL,
  `nama_customer` varchar(20) NOT NULL,
  `noplat` varchar(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `biaya_servis` varchar(20) NOT NULL,
  `biaya_sukucadang` varchar(20) NOT NULL,
  `biaya_gantioli` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bengkeljaya`
--

INSERT INTO `bengkeljaya` (`no_faktur`, `nama_customer`, `noplat`, `tanggal`, `biaya_servis`, `biaya_sukucadang`, `biaya_gantioli`, `total`) VALUES
('0987', 'alfikri', 'bh 7897 r', '2021-06-19', '75000', '75000', '0', '150000'),
('7654', 'fahira', 'hy 765 8i', '2021-06-19', '50000', '35000', '25000', '110000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bengkeljaya`
--
ALTER TABLE `bengkeljaya`
  ADD PRIMARY KEY (`no_faktur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
