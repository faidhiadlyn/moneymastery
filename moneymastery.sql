-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 02:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneymastery`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'manball', 'manbola@gmail.com', 'mantap'),
(2, 'Wafiy', 'maw@gmail.com', 'okay'),
(3, '', '', ''),
(4, 'Dhi', 'dhi@gmail.com', 'nice'),
(5, 'Irfan Hakim', 'maw@gmail.com', 'asdf'),
(6, 'ipan', 'ipan@gmail.com', 'more style'),
(7, 'dhi', 'dhii@gmail.com', '123'),
(8, 'dhi', 'dhii@gmail.com', '123'),
(9, '1234', 'ipan@gmail.com', '123'),
(10, '1234', 'ipan@gmail.com', '123'),
(11, '1234', 'ipan@gmail.com', '123'),
(12, 'ipan', 'ipan@gmail.com', 'more style'),
(13, 'apiz', 'dhii@gmail.com', 'more style and more'),
(14, 'wafiy', 'wafiy@gmail.com', 'antep'),
(15, 'madam', 'madam@gmail.com', 'buat summary expense tracker');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'manball', 'manbola@gmail.com', '$2y$10$5lUJ3rEy29xfjgI1HbmtvOxYKkbc/zk/qqzCl/IB/lHGKNlDfpaKC'),
(5, 'john', 'johnfiy@gmail.com', '$2y$10$q6OdikdHiuoUpUSE22qy9e9wgdb.ZFBRB.KRQG/VYHEBv75vzCOFe'),
(6, 'firas', 'firas@gmail.com', '$2y$10$HxAW66UA/JgBa/jhzqjTCO.Joyg8M3qCryFBPCrTjWHldSKmSXYue'),
(7, 'dhios', 'dhios@gmail.com', '$2y$10$yhtCcDd37BQYzKcF4azuQOF9k1ibTOOCLJr966nXsi9YK6ezah0qK'),
(8, 'fries', 'fries@gmail.com', '$2y$10$xN7ocynqCM2.IH5pm8T29.kN.1WBzIeKFrLSiF6W3p.8M9tqB9z2O'),
(9, 'ipan', 'ipan@gmail.com', '$2y$10$yrku0z6Ka5kXDwS4KN2JjetQ.IdtNj7kPo.emWccr5E4vHNIraD2O'),
(10, 'dhii', 'dhii@gmail.com', '$2y$10$QHRKw38R0Ll8aUuNe1omHOhm4bj.vOuDwu4QzZz..TGeKL6/F7AM2'),
(11, 'dhii', 'dhii@gmail.com', '$2y$10$xh/C5OgulSfhPqAEwRazp.Zesv5uwMaTMJG03psEsjDpiEoP7xuxO'),
(12, 'dhii', 'dhii@gmail.com', '$2y$10$NopqKITSMKd7TwTC2Ih8yOownlrqlbajCDZWgEH2Rp0rJQtz3SIRG'),
(13, 'dhii', 'dhii@gmail.com', '$2y$10$6vy4NxtJDUkZI4LktghCNebVS0oJfWjfJJy2aGs5gWgZfDeSA9eAC'),
(14, 'dhii', 'dhii@gmail.com', '$2y$10$kNzpJX3MZPTbccOUya8YUuLMmTxoImrDRhPmApckNLaFBde18Rixm'),
(15, 'dhii', 'dhii@gmail.com', '$2y$10$iGTR95FXZ19K7qOgzOMghuP2Lc0MMoB/hO8h1AgtsNcNJK0vwUI6m'),
(16, 'dhii', 'dhii@gmail.com', '$2y$10$rfXnMrOjyaqcb9Lqu.HiuecZxyjJj9AZihJle9USU1V6fZCMvU3pm'),
(17, 'dhii', 'dhii@gmail.com', '$2y$10$QbF0BBOrxixRxSJg2Em.0.5Kwij6kKPQtpmG6ao9wXrzaMxmS8bse'),
(18, 'dhii', 'dhii@gmail.com', '$2y$10$E45IWqD1zNcj8qxB1t/Og.4/ypPXq0ZEVygRaLNkL3wrPCMyDRjHO'),
(19, 'dhii', 'dhii@gmail.com', '$2y$10$wGl6nwSv5rFbDnwiVhBEZO3aAkld9DzxGLg6a1nHn23qCouPD7D9e'),
(20, 'safwat', 'safwat@gmail.com', '$2y$10$UotiH5abQBoaATkU6HdKTeQRc4H1FBBHUmiOJ6WbiKwl0If.M5Ie2'),
(21, 'wafiy', 'wafiy1@gmail.com', '$2y$10$wEeMkiyPC1DF26XmaDCW4ulzVrIDWOYxzx7sdRayhMw9rW5w/cvTm'),
(22, 'camelia', 'camelia.shn@gmail.com', '$2y$10$PglFyweGuNCkvz16v87JwODuHyUQxYrZXxFBFeBsygtIUInUGNmtG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
