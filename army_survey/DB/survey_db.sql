-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 08:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_table`
--

CREATE TABLE `admin_login_table` (
  `user_name` varchar(250) NOT NULL,
  `password_login` varchar(250) NOT NULL,
  `type_login` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_table`
--

INSERT INTO `admin_login_table` (`user_name`, `password_login`, `type_login`) VALUES
('ganpatibappa', '405d2a0c149e79c9675cf6b320a7c5ac', 'admin'),
('jyotirmoy1985', 'c1d5910d52abab817163adb3895ff42e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` varchar(250) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`) VALUES
('336fdcf7d540e4b430a890b63da159c9', 'Entertainment'),
('4e45fee78232bfaf0166ca8fd81f7679', 'Hotels'),
('7601b0e392e9ab0c3ff500ae9f721281', 'Sanitation'),
('f431e17ea0081a3c9e51fc240221ee21', 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `credentials_table`
--

CREATE TABLE `credentials_table` (
  `Servey_id` varchar(250) NOT NULL,
  `Army_no` varchar(250) NOT NULL,
  `RK_ID` varchar(250) NOT NULL,
  `Maritial_status` varchar(250) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(250) NOT NULL,
  `Tenure_months` int(11) NOT NULL,
  `No_Children` int(11) NOT NULL,
  `Stn_id` varchar(250) NOT NULL,
  `Full_name` varchar(250) NOT NULL,
  `Unit` varchar(250) NOT NULL,
  `D_O_S` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `pk_cred_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials_table`
--

INSERT INTO `credentials_table` (`Servey_id`, `Army_no`, `RK_ID`, `Maritial_status`, `Age`, `Gender`, `Tenure_months`, `No_Children`, `Stn_id`, `Full_name`, `Unit`, `D_O_S`, `user_name`, `pk_cred_id`) VALUES
('361d42_629333', '241185', 'Capta_39706', 'Single', 30, 'Male', 2, 0, 'Delhi_87945', 'Jyotirmoy Nath', ' ', 'Thu Mar 2017 06:03:55', 'cba90_505340', 5),
('310ff8_956298', '231121', 'Capta_39706', 'Single', 27, 'Male', 2, 0, 'Delhi_87945', 'Jaideep kedia', ' ', 'Thu Mar 2017 06:03:02', 'c799e_988311', 6),
('703827_859069', '231189', 'Major_55160', 'Single', 30, 'Male', 2, 0, 'Gujra_20614', 'Jyotirmoy Nath', ' ', 'Thu Mar 2017 07:03:38', '0022c_921600', 7),
('0112a4_809387', '241190', 'Capta_39706', 'Single', 28, 'Male', 2, 0, 'Mumba_69534', 'Jaideep Kedia', ' ', 'Thu Mar 2017 07:03:24', '1fef8_443695', 8),
('82677d_868896', '242212', 'Capta_39706', 'Single', 29, 'Male', 2, 0, 'Bhopa_92422', 'John Doe', ' ', 'Thu Mar 2017 07:03:29', '173e8_211456', 9);

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `Ques_id` varchar(250) NOT NULL,
  `question` blob NOT NULL,
  `Date_ques` varchar(250) NOT NULL,
  `Category_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`Ques_id`, `question`, `Date_ques`, `Category_id`) VALUES
('07450_34735', 0x486f7720776f756c6420796f75207261746520796f757220737461792061742074686520686f74656c3f, '25 02 17 11:Feb:29', '4e45fee78232bfaf0166ca8fd81f7679'),
('4efc6_83551', 0x486f7720776f756c6420796f7520726174652074686520737572726f756e64696e673f, '25 02 17 10:Feb:56', '4e45fee78232bfaf0166ca8fd81f7679'),
('50ea4_45187', 0x5761732074686520486f74656c20537461666620436f6f70657261746976653f, '25 02 17 11:Feb:18', '4e45fee78232bfaf0166ca8fd81f7679'),
('5cc4d_98428', 0x486f77207761732074686520636c65616e6c696e657373206f662074686520486f74656c3f, '25 02 17 10:Feb:00', '7601b0e392e9ab0c3ff500ae9f721281'),
('92eac_90826', 0x486f772077617320746865204c6f63616c697479206e65617220796f75722073746174696f6e3f, '25 02 17 04:Feb:43', 'f431e17ea0081a3c9e51fc240221ee21'),
('a5624_97729', 0x5761732074686572652061207061726b20666f7220746865206368696c6472656e20746f20706c61793f, '25 02 17 11:Feb:52', '336fdcf7d540e4b430a890b63da159c9'),
('a9e40_32409', 0x486f77207761732074686520436c65616e6c696e65737320616e64207468652048796769656e65206f66207468652073746174696f6e, '25 02 17 08:Feb:10', '7601b0e392e9ab0c3ff500ae9f721281'),
('e00e6_86349', 0x5765726520746865726520616e79206d6f7669652068616c6c733f, '25 02 17 03:Feb:34', '336fdcf7d540e4b430a890b63da159c9'),
('fa810_95916', 0x486f7720617265207468652073706f727420616e64207468652072656372656174696f6e20666163696c6974793f, '25 02 17 09:Feb:33', 'f431e17ea0081a3c9e51fc240221ee21');

-- --------------------------------------------------------

--
-- Table structure for table `rank_table`
--

CREATE TABLE `rank_table` (
  `Rank` varchar(250) NOT NULL,
  `RK_ID` varchar(250) NOT NULL,
  `R_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank_table`
--

INSERT INTO `rank_table` (`Rank`, `RK_ID`, `R_ID`) VALUES
('Major', 'Major_55160', 1),
('Captain', 'Capta_39706', 2),
('Leutanant', 'Leuta_23486', 3),
('Havildar', 'Havil_57864', 4),
('Commander', 'Comma_7015', 6);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `Station_id` varchar(250) NOT NULL,
  `station_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Station_id`, `station_name`) VALUES
('Bhopa_92422', 'Bhopal'),
('Delhi_87945', 'Delhi'),
('Gujra_20614', 'Gujrat'),
('Kolka_17480', 'Kolkatta'),
('Mumba_69534', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `survey_table`
--

CREATE TABLE `survey_table` (
  `Question_id` varchar(250) NOT NULL,
  `Weight` int(100) NOT NULL,
  `Marks` int(100) NOT NULL,
  `Survey_id` varchar(250) NOT NULL,
  `Factor` bigint(20) NOT NULL,
  `ID` int(11) NOT NULL,
  `station_id` varchar(250) NOT NULL,
  `category_id` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_table`
--

INSERT INTO `survey_table` (`Question_id`, `Weight`, `Marks`, `Survey_id`, `Factor`, `ID`, `station_id`, `category_id`, `user_name`) VALUES
('4efc6_83551', 7, 71, '361d42_629333', 497, 9, 'Delhi_87945', '4e45fee78232bfaf0166ca8fd81f7679', 'cba90_505340'),
('50ea4_45187', 8, 31, '361d42_629333', 248, 10, 'Delhi_87945', '4e45fee78232bfaf0166ca8fd81f7679', 'cba90_505340'),
('5cc4d_98428', 8, 91, '361d42_629333', 728, 11, 'Delhi_87945', '7601b0e392e9ab0c3ff500ae9f721281', 'cba90_505340'),
('92eac_90826', 3, 91, '361d42_629333', 273, 12, 'Delhi_87945', 'f431e17ea0081a3c9e51fc240221ee21', 'cba90_505340'),
('a5624_97729', 1, 1, '361d42_629333', 1, 13, 'Delhi_87945', '336fdcf7d540e4b430a890b63da159c9', 'cba90_505340'),
('a9e40_32409', 9, 71, '361d42_629333', 639, 14, 'Delhi_87945', '7601b0e392e9ab0c3ff500ae9f721281', 'cba90_505340'),
('e00e6_86349', 1, 91, '361d42_629333', 91, 15, 'Delhi_87945', '336fdcf7d540e4b430a890b63da159c9', 'cba90_505340'),
('fa810_95916', 9, 71, '361d42_629333', 639, 16, 'Delhi_87945', 'f431e17ea0081a3c9e51fc240221ee21', 'cba90_505340'),
('4efc6_83551', 7, 81, '310ff8_956298', 567, 17, 'Delhi_87945', '4e45fee78232bfaf0166ca8fd81f7679', 'c799e_988311'),
('50ea4_45187', 9, 71, '310ff8_956298', 639, 18, 'Delhi_87945', '4e45fee78232bfaf0166ca8fd81f7679', 'c799e_988311'),
('5cc4d_98428', 8, 81, '310ff8_956298', 648, 19, 'Delhi_87945', '7601b0e392e9ab0c3ff500ae9f721281', 'c799e_988311'),
('92eac_90826', 8, 91, '310ff8_956298', 728, 20, 'Delhi_87945', 'f431e17ea0081a3c9e51fc240221ee21', 'c799e_988311'),
('a5624_97729', 1, 1, '310ff8_956298', 1, 21, 'Delhi_87945', '336fdcf7d540e4b430a890b63da159c9', 'c799e_988311'),
('a9e40_32409', 9, 91, '310ff8_956298', 819, 22, 'Delhi_87945', '7601b0e392e9ab0c3ff500ae9f721281', 'c799e_988311'),
('e00e6_86349', 9, 91, '310ff8_956298', 819, 23, 'Delhi_87945', '336fdcf7d540e4b430a890b63da159c9', 'c799e_988311'),
('fa810_95916', 9, 81, '310ff8_956298', 729, 24, 'Delhi_87945', 'f431e17ea0081a3c9e51fc240221ee21', 'c799e_988311'),
('07450_34735', 8, 91, '703827_859069', 728, 25, 'Gujra_20614', '4e45fee78232bfaf0166ca8fd81f7679', '0022c_921600'),
('4efc6_83551', 8, 81, '703827_859069', 648, 26, 'Gujra_20614', '4e45fee78232bfaf0166ca8fd81f7679', '0022c_921600'),
('50ea4_45187', 8, 81, '703827_859069', 648, 27, 'Gujra_20614', '4e45fee78232bfaf0166ca8fd81f7679', '0022c_921600'),
('5cc4d_98428', 10, 71, '703827_859069', 710, 28, 'Gujra_20614', '7601b0e392e9ab0c3ff500ae9f721281', '0022c_921600'),
('92eac_90826', 9, 81, '703827_859069', 729, 29, 'Gujra_20614', 'f431e17ea0081a3c9e51fc240221ee21', '0022c_921600'),
('a5624_97729', 1, 1, '703827_859069', 1, 30, 'Gujra_20614', '336fdcf7d540e4b430a890b63da159c9', '0022c_921600'),
('a9e40_32409', 9, 81, '703827_859069', 729, 31, 'Gujra_20614', '7601b0e392e9ab0c3ff500ae9f721281', '0022c_921600'),
('e00e6_86349', 9, 81, '703827_859069', 729, 32, 'Gujra_20614', '336fdcf7d540e4b430a890b63da159c9', '0022c_921600'),
('fa810_95916', 8, 91, '703827_859069', 728, 33, 'Gujra_20614', 'f431e17ea0081a3c9e51fc240221ee21', '0022c_921600'),
('07450_34735', 9, 91, '0112a4_809387', 819, 34, 'Mumba_69534', '4e45fee78232bfaf0166ca8fd81f7679', '1fef8_443695'),
('4efc6_83551', 8, 71, '0112a4_809387', 568, 35, 'Mumba_69534', '4e45fee78232bfaf0166ca8fd81f7679', '1fef8_443695'),
('50ea4_45187', 10, 91, '0112a4_809387', 910, 36, 'Mumba_69534', '4e45fee78232bfaf0166ca8fd81f7679', '1fef8_443695'),
('5cc4d_98428', 8, 71, '0112a4_809387', 568, 37, 'Mumba_69534', '7601b0e392e9ab0c3ff500ae9f721281', '1fef8_443695'),
('92eac_90826', 8, 71, '0112a4_809387', 568, 38, 'Mumba_69534', 'f431e17ea0081a3c9e51fc240221ee21', '1fef8_443695'),
('a5624_97729', 1, 1, '0112a4_809387', 1, 39, 'Mumba_69534', '336fdcf7d540e4b430a890b63da159c9', '1fef8_443695'),
('a9e40_32409', 8, 81, '0112a4_809387', 648, 40, 'Mumba_69534', '7601b0e392e9ab0c3ff500ae9f721281', '1fef8_443695'),
('e00e6_86349', 8, 81, '0112a4_809387', 648, 41, 'Mumba_69534', '336fdcf7d540e4b430a890b63da159c9', '1fef8_443695'),
('fa810_95916', 8, 81, '0112a4_809387', 648, 42, 'Mumba_69534', 'f431e17ea0081a3c9e51fc240221ee21', '1fef8_443695'),
('07450_34735', 9, 71, '82677d_868896', 639, 43, 'Bhopa_92422', '4e45fee78232bfaf0166ca8fd81f7679', '173e8_211456'),
('4efc6_83551', 8, 81, '82677d_868896', 648, 44, 'Bhopa_92422', '4e45fee78232bfaf0166ca8fd81f7679', '173e8_211456'),
('50ea4_45187', 9, 91, '82677d_868896', 819, 45, 'Bhopa_92422', '4e45fee78232bfaf0166ca8fd81f7679', '173e8_211456'),
('5cc4d_98428', 9, 91, '82677d_868896', 819, 46, 'Bhopa_92422', '7601b0e392e9ab0c3ff500ae9f721281', '173e8_211456'),
('92eac_90826', 8, 81, '82677d_868896', 648, 47, 'Bhopa_92422', 'f431e17ea0081a3c9e51fc240221ee21', '173e8_211456'),
('a5624_97729', 1, 1, '82677d_868896', 1, 48, 'Bhopa_92422', '336fdcf7d540e4b430a890b63da159c9', '173e8_211456'),
('a9e40_32409', 9, 81, '82677d_868896', 729, 49, 'Bhopa_92422', '7601b0e392e9ab0c3ff500ae9f721281', '173e8_211456'),
('e00e6_86349', 9, 81, '82677d_868896', 729, 50, 'Bhopa_92422', '336fdcf7d540e4b430a890b63da159c9', '173e8_211456'),
('fa810_95916', 9, 91, '82677d_868896', 819, 51, 'Bhopa_92422', 'f431e17ea0081a3c9e51fc240221ee21', '173e8_211456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_table`
--
ALTER TABLE `admin_login_table`
  ADD UNIQUE KEY `uk_login` (`user_name`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD UNIQUE KEY `uk_cat` (`category_id`);

--
-- Indexes for table `credentials_table`
--
ALTER TABLE `credentials_table`
  ADD UNIQUE KEY `pk_cred` (`pk_cred_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD UNIQUE KEY `uk_ques` (`Ques_id`);

--
-- Indexes for table `rank_table`
--
ALTER TABLE `rank_table`
  ADD UNIQUE KEY `pk_r` (`R_ID`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD UNIQUE KEY `uk_station` (`Station_id`);

--
-- Indexes for table `survey_table`
--
ALTER TABLE `survey_table`
  ADD UNIQUE KEY `pk_survey` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials_table`
--
ALTER TABLE `credentials_table`
  MODIFY `pk_cred_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rank_table`
--
ALTER TABLE `rank_table`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `survey_table`
--
ALTER TABLE `survey_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
