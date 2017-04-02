-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 12:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Table structure for table `maint_dtl`
--

CREATE TABLE `maint_dtl` (
  `veh_id` int(11) NOT NULL,
  `BA_no` varchar(2000) NOT NULL,
  `oil_ch_dt` varchar(2000) NOT NULL,
  `oil_ch_km` varchar(2000) NOT NULL,
  `oil_ch_exp` varchar(2000) NOT NULL,
  `air_filter_dt` varchar(2000) NOT NULL,
  `air_filter_km` varchar(2000) NOT NULL,
  `air_filter_exp` varchar(2000) NOT NULL,
  `fuel_filter_dt` varchar(2000) NOT NULL,
  `fuel_filter_km` varchar(2000) NOT NULL,
  `fuel_filter_exp` varchar(2000) NOT NULL,
  `bty_chg_dt` varchar(2000) NOT NULL,
  `bty_chg_exp` varchar(2000) NOT NULL,
  `steering_oil_dt` varchar(2000) NOT NULL,
  `steering_oil_exp` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maint_dtl`
--

INSERT INTO `maint_dtl` (`veh_id`, `BA_no`, `oil_ch_dt`, `oil_ch_km`, `oil_ch_exp`, `air_filter_dt`, `air_filter_km`, `air_filter_exp`, `fuel_filter_dt`, `fuel_filter_km`, `fuel_filter_exp`, `bty_chg_dt`, `bty_chg_exp`, `steering_oil_dt`, `steering_oil_exp`) VALUES
(2, 'DL 3C 0931', '2017-03-11', '2000', '2017-04-15', '2017-03-12', '2000', '2017-04-29', '2017-03-11', '2000', '2017-04-28', '2017-03-05', '2017-04-29', '2017-03-11', '2017-04-29'),
(3, 'DL 4C 3223', '2017-03-11', '2000', '2017-03-29', '2017-03-11', '2000', '2017-03-25', '2017-03-11', '2000', '2017-03-18', '2017-03-11', '2017-03-19', '2017-03-11', '2017-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `tyre_dtls_table`
--

CREATE TABLE `tyre_dtls_table` (
  `tyre_id` int(20) NOT NULL,
  `veh_id` varchar(2000) NOT NULL,
  `tyre_number` varchar(2000) NOT NULL,
  `tyre_chg_dt` varchar(2000) NOT NULL,
  `tyre_chg_km` varchar(2000) NOT NULL,
  `tyre_ch_exp` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tyre_dtls_table`
--

INSERT INTO `tyre_dtls_table` (`tyre_id`, `veh_id`, `tyre_number`, `tyre_chg_dt`, `tyre_chg_km`, `tyre_ch_exp`) VALUES
(14234, '3', '4', '2017-03-11', '2000', '2017-03-25'),
(21236, '2', '2', '2017-03-11', '2000', '2017-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `tyre_history_table`
--

CREATE TABLE `tyre_history_table` (
  `tyre_id` int(20) NOT NULL,
  `veh_id` varchar(2000) NOT NULL,
  `tyre_number` varchar(2000) NOT NULL,
  `tyre_chg_dt` varchar(2000) NOT NULL,
  `tyre_chg_km` varchar(2000) NOT NULL,
  `work_order_no` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_master`
--

CREATE TABLE `vehicle_master` (
  `veh_id` int(20) NOT NULL,
  `BA_no` varchar(2000) NOT NULL,
  `veh_type` varchar(2000) NOT NULL,
  `dt_mfr` varchar(2000) NOT NULL,
  `dt_induction` varchar(2000) NOT NULL,
  `dt_takingover` varchar(2000) NOT NULL,
  `class` varchar(2000) NOT NULL,
  `km_engine` varchar(2000) NOT NULL,
  `km_chassis` varchar(2000) NOT NULL,
  `engine_no` varchar(2000) NOT NULL,
  `chassis_no` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_master`
--

INSERT INTO `vehicle_master` (`veh_id`, `BA_no`, `veh_type`, `dt_mfr`, `dt_induction`, `dt_takingover`, `class`, `km_engine`, `km_chassis`, `engine_no`, `chassis_no`) VALUES
(2, 'DL 3C 0931', 'MC', '2012-09-02', '2015-09-02', '2017-02-01', '4', '2000', '2000', '2132321', '212121121'),
(3, 'DL 4C 3223', 'MG', '2013-10-02', '2015-09-03', '2016-09-29', '4', '3000', '3000', '212423121', '23213413'),
(4, 'DL 1C 4567', 'ALS', '2014-01-01', '2015-01-01', '2016-11-17', '2', '3000', '2000', '3323212', '2321312323');

-- --------------------------------------------------------

--
-- Table structure for table `veh_type`
--

CREATE TABLE `veh_type` (
  `veh_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veh_type`
--

INSERT INTO `veh_type` (`veh_type`) VALUES
('2.5 Ton'),
('ALS'),
('MC'),
('MG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tyre_dtls_table`
--
ALTER TABLE `tyre_dtls_table`
  ADD PRIMARY KEY (`tyre_id`);

--
-- Indexes for table `vehicle_master`
--
ALTER TABLE `vehicle_master`
  ADD UNIQUE KEY `veh_id` (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tyre_dtls_table`
--
ALTER TABLE `tyre_dtls_table`
  MODIFY `tyre_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21237;
--
-- AUTO_INCREMENT for table `vehicle_master`
--
ALTER TABLE `vehicle_master`
  MODIFY `veh_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
