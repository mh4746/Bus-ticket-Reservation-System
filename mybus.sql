-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 02:36 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Contact  Number` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_id`, `Name`, `Age`, `Contact  Number`, `email`, `password`) VALUES
(1, 'MH', 20, 2147483647, '', ''),
(2, 'Noyon', 21, 178999999, '', ''),
(3, 'Arafat', 25, 197777777, '', ''),
(4, 'Nisi', 26, 1672222222, '', ''),
(1, 'abcde', 123, 1999999999, 'abc@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `id` int(11) NOT NULL,
  `id1` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `bus_name` varchar(30) NOT NULL,
  `coach_no` varchar(20) NOT NULL,
  `s_counter` varchar(30) NOT NULL,
  `e_counter` varchar(30) NOT NULL,
  `fare` double NOT NULL,
  `coach_type` varchar(30) NOT NULL,
  `a_time` varchar(30) NOT NULL,
  `d_time` varchar(30) NOT NULL,
  `seat` int(11) NOT NULL,
  `view` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`id`, `id1`, `id2`, `bus_name`, `coach_no`, `s_counter`, `e_counter`, `fare`, `coach_type`, `a_time`, `d_time`, `seat`, `view`) VALUES
(1, 1, 2, 'Desh Travels', 'dhaka-metro 1234', '', '', 750, 'AC', '6.30 AM', '7.30 PM', 40, ''),
(2, 2, 1, 'Desh Travels', 'dhaka-metro 1234', '', '', 750, 'AC', '8.00 PM', '6.00 AM', 40, ''),
(3, 1, 2, 'PABNA EXPRESS', 'Pabna metro-1200', '', '', 750, 'NON-AC', '7.00 AM', '9.00 PM', 40, ''),
(4, 2, 1, 'PABNA EXPRESS', 'Pabna metro-1200', '', '', 750, 'NON-AC', '8.00 PM', '9.00 AM', 40, ''),
(5, 1, 2, 'HANIF PARIBAHAN', 'HANIF metro-1200', '', '', 800, 'AC', '9.00 AM', '10.00 PM', 40, '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `C_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Startup time` varchar(20) NOT NULL,
  `Owner` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `H_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Active time` int(11) NOT NULL,
  `Contact  Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`H_id`, `Name`, `Active time`, `Contact  Number`) VALUES
(1, 'Abdur Rahim', 10, 2147483647),
(2, 'Hatem Ali', 12, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Infor_id` int(11) NOT NULL,
  `Booking Date` varchar(25) NOT NULL,
  `Booking Time` varchar(25) NOT NULL,
  `Departue Date` varchar(25) NOT NULL,
  `Departure Time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Infor_id`, `Booking Date`, `Booking Time`, `Departue Date`, `Departure Time`) VALUES
(1, '10.12', '9.00', '12.10', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `p_id` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `contact` int(14) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`p_id`, `Fname`, `Lname`, `Age`, `Gender`, `Address`, `contact`, `email`, `password`) VALUES
(1, 'Hasem', '', 25, 'Male', 'Pabna', 1762222222, '', NULL),
(2, 'Baten Ali', '', 30, 'Male', 'Sirajgoang', 1817777777, '', NULL),
(3, 'Abul kalam', '', 40, 'Male', 'Issordi', 2147483647, '', NULL),
(4, 'buju', '', 19, 'Female', 'Paksi', 1923456789, '', NULL),
(4, 'Bilkis banu', '', 23, 'Female', 'Nator', 2147483647, '', NULL),
(0, 'abc', 'cde', 0, '', '', 0, '', NULL),
(0, 'abc', 'cde', 0, '', '', 0, '', NULL),
(0, 'abc', 'cde', 0, '', '', 0, '', NULL),
(0, 'ABC', 'DEF', 0, '', '', 0, '', NULL),
(0, 'AAA', 'BBB', 10, 'Female', '', 0, '', NULL),
(0, 'sdg', 'fd', 10, 'Female', '', 0, 'mh.474661@gmail.com', NULL),
(0, 'abul ', 'kashem', 90, 'male', '', 1521124201, 'mh@gmail.com', NULL),
(0, 'abul ', 'husen', 90, 'male', '', 1521124201, 'mh@gmail.com', NULL),
(0, 'sihab', 'srabon', 40, 'male', 'dhaka                   ', 1934796063, 'ss@gmail.com', NULL),
(0, 'sihab', 'srabon', 40, 'male', 'dhaka                   ', 1934796063, 'ss@gmail.com', NULL),
(0, 'aaaaa', 'vvvvvv', 11, 'Female', '          pabna                 ', 1521124201, 'mh.474661@gmail.com', NULL),
(0, 'ABC', 'DEF', 35, 'male', 'BTC           ', 1765334696, 'abc@gmail.com', NULL),
(0, 'ABC', 'DEF', 35, 'male', 'Sherpur						  ', 1521124201, 'mh@gmail.com', NULL),
(0, '', '', 0, '', '', NULL, 'mh.474661@gmail.com', ''),
(0, '', '', 0, '', '', NULL, 'mh.474661@gmail.com', '1111'),
(0, '', '', 0, '', '', NULL, 'mh.474661@gmail.com', '1111'),
(0, '', '', 0, '', '', NULL, 'mh.474661@gmail.com', '1111'),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, 'abc@gmail.com', '12345'),
(0, '', '', 0, '', '', NULL, 'aaa@gmail.com', '222'),
(0, '', '', 0, '', '', NULL, 'aaa@gmail.com', '123'),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, 'mh.474661@gmail.com', '123'),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, 'abc@gmail.com', '12345'),
(0, '', '', 0, '', '', NULL, 'bac@gmail.com', '12345'),
(0, '', '', 0, '', '', NULL, '', ''),
(0, '', '', 0, '', '', NULL, 'abc@gmail.com', '12345'),
(0, '', '', 0, '', '', NULL, 'abc@gmail.com', '123'),
(0, '', '', 0, '', '', NULL, 'abc@gmail.com', '123'),
(0, '', '', 0, '', '', NULL, 'caa@gmail.com', '123'),
(0, '', '', 0, '', '', NULL, 'cac@gmail.com', 'aaa'),
(0, '', '', 0, '', '', NULL, 'ccccccccc@gmail.com', '111'),
(0, '', '', 0, '', '', NULL, 'm@gmail.com', '111'),
(0, '', '', 0, '', '', NULL, 'sa@gmail.com', '123'),
(0, '', '', 0, '', '', NULL, 'bca@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id` int(11) NOT NULL,
  `Method` varchar(25) NOT NULL,
  `Payment Date` varchar(25) NOT NULL,
  `Time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_id`, `Method`, `Payment Date`, `Time`) VALUES
(1, 'BKASH', '12/12/18', '12.00'),
(2, 'DUTCH BANGLA', '09/07/18', '1.00'),
(3, 'CREDIT CARD', '20/07/18', '4.00'),
(4, 'ROCKET', '01/09/18', '3.30');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `Q_id` int(11) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `R_id` int(11) NOT NULL,
  `Departure` varchar(40) NOT NULL,
  `Arrival` varchar(40) NOT NULL,
  `Confirmation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route_name`
--

CREATE TABLE `route_name` (
  `route_id` int(11) NOT NULL,
  `route` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_name`
--

INSERT INTO `route_name` (`route_id`, `route`) VALUES
(1, 'BANDARBAN'),
(2, 'BENAPOLE'),
(3, 'DHAKA'),
(4, 'CHAPAINAWABGANJ'),
(5, 'CHITTAGONG'),
(6, 'COMILLA'),
(7, 'COX\'S BAZAR');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `S_id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `S_id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Contact  Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`S_id`, `Name`, `Age`, `Contact  Number`) VALUES
(1, 'Tahsan', 30, 1982334455),
(3, 'Shakib khan', 40, 19234567);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Id` int(11) NOT NULL,
  `From` varchar(25) NOT NULL,
  `To` varchar(25) NOT NULL,
  `Bus_id` int(11) NOT NULL,
  `Bus Name` varchar(25) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Id`, `From`, `To`, `Bus_id`, `Bus Name`, `Quantity`, `Cost`) VALUES
(1, 'Pabna', 'Sathiya', 1, 'Shamoly', 1, 300),
(2, 'Pabna', 'Rajsahi', 2, 'Sarkar Paribahan', 2, 500),
(3, 'Pabana', 'Bandarban', 3, 'Pabna experss', 1, 1000),
(4, 'Dhaka', 'Khulna', 2, 'King supaer', 4, 1600);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
