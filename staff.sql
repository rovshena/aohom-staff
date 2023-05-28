-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 10:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Hunar` text NOT NULL,
  `Oglan_gyz` text NOT NULL,
  `Welayat` text NOT NULL,
  `etrap` text NOT NULL,
  `tabsyran_senesi` text NOT NULL,
  `Tb` text DEFAULT NULL,
  `FAA` text NOT NULL,
  `doglan_senesi` text NOT NULL,
  `doglan_yyly` text DEFAULT NULL,
  `doglan_yeri` text DEFAULT NULL,
  `Pasport_seriya_belgisi` text DEFAULT NULL,
  `pasport_berlen_senesi` text DEFAULT NULL,
  `pasport_berlen_yeri` text DEFAULT NULL,
  `milleti` text DEFAULT NULL,
  `Yasayan_yeri` text DEFAULT NULL,
  `Telefonlary` text DEFAULT NULL,
  `KFAA` text DEFAULT NULL,
  `EFAA` text DEFAULT NULL,
  `Yolbascy_isgar` text DEFAULT NULL,
  `tamamlan_mekdebi` text DEFAULT NULL,
  `Mekdebi_tamamlan_yyly` text DEFAULT NULL,
  `Ortaca_bahasy` text DEFAULT NULL,
  `Zahmet_tejribesi` text DEFAULT NULL,
  `hunari_boyunca_2_yyl` text DEFAULT NULL,
  `Bellik` text DEFAULT NULL,
  `harby_gulluk` text DEFAULT NULL,
  `1njisynag` text DEFAULT NULL,
  `2njisynag` text DEFAULT NULL,
  `3njisynag` text DEFAULT NULL,
  `kabul_edildi` text DEFAULT NULL,
  `Halkara_derejesindaki_baslesik` text DEFAULT NULL,
  `Dowlet_derejesindaki_baslesik` text DEFAULT NULL,
  `Welayat_derejesindaki_baslesik` text DEFAULT NULL,
  `Etrap_derejesindaki_baslesik` text DEFAULT NULL,
  `Dowletliler_kosgunin_ucrumy` text DEFAULT NULL,
  `Beyleki_ayratynlyklar` text DEFAULT NULL,
  `kabul_eden_mugallym` text DEFAULT NULL,
  `gelin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `secretaries`
--

CREATE TABLE `secretaries` (
  `id` int(11) NOT NULL,
  `year` smallint(6) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `is_admin`) VALUES
(1, 'admin', '$2y$10$Obe.C.yALnuDYxTqYZKlFO7/WNgBj.FEOe3bGZ00C/aJSl0kOHP.u', 'Ahmet Gurbanow', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
