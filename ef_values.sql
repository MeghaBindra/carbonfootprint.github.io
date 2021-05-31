-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 09:58 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbonfootprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `ef_values`
--

CREATE TABLE `ef_values` (
  `id` int(11) NOT NULL,
  `electricity_ef` int(11) NOT NULL,
  `natural_ef` int(11) NOT NULL,
  `fuel_ef` int(11) NOT NULL,
  `lpg_ef` int(11) NOT NULL,
  `waste_ef` int(11) NOT NULL,
  `water_ef` int(11) NOT NULL,
  `vehicle_ef` int(11) NOT NULL,
  `bus_ef` int(11) NOT NULL,
  `metro_ef` int(11) NOT NULL,
  `taxi_ef` int(11) NOT NULL,
  `rail_ef` int(11) NOT NULL,
  `flying_ef` int(11) NOT NULL,
  `redmeat_ef` int(11) NOT NULL,
  `whitemeat_ef` int(11) NOT NULL,
  `dairy_ef` int(11) NOT NULL,
  `cereals_ef` int(11) NOT NULL,
  `vegetables_ef` int(11) NOT NULL,
  `fruits_ef` int(11) NOT NULL,
  `oil_ef` int(11) NOT NULL,
  `snacks_ef` int(11) NOT NULL,
  `drinks_ef` int(11) NOT NULL,
  `electrical_ef` int(11) NOT NULL,
  `household_ef` int(11) NOT NULL,
  `clothes_ef` int(11) NOT NULL,
  `medical_ef` int(11) NOT NULL,
  `recreational_ef` int(11) NOT NULL,
  `others_ef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ef_values`
--

INSERT INTO `ef_values` (`id`, `electricity_ef`, `natural_ef`, `fuel_ef`, `lpg_ef`, `waste_ef`, `water_ef`, `vehicle_ef`, `bus_ef`, `metro_ef`, `taxi_ef`, `rail_ef`, `flying_ef`, `redmeat_ef`, `whitemeat_ef`, `dairy_ef`, `cereals_ef`, `vegetables_ef`, `fruits_ef`, `oil_ef`, `snacks_ef`, `drinks_ef`, `electrical_ef`, `household_ef`, `clothes_ef`, `medical_ef`, `recreational_ef`, `others_ef`) VALUES
(1, 5, 5, 5, 5, 6, 5, 65, 7, 5, 5, 5, 5, 5, 7, 5, 7, 5, 7, 5, 75, 7, 5, 5, 8, 5, 7, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ef_values`
--
ALTER TABLE `ef_values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ef_values`
--
ALTER TABLE `ef_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
