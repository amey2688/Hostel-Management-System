-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2017 at 10:12 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `seller_username` varchar(30) NOT NULL,
  `Type_bhk` varchar(30) NOT NULL,
  `Location` varchar(10) NOT NULL,
  `Locality` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Text_Area` varchar(200) NOT NULL,
  `Mobile_no` int(12) NOT NULL,
  `Seller_ph1` varchar(50) NOT NULL,
  `Seller_ph2` varchar(50) NOT NULL,
  `Seller_ph3` varchar(50) NOT NULL,
  `Seller_ph4` varchar(50) NOT NULL,
  `Seller_ph5` varchar(50) NOT NULL,
  `Rent` int(20) NOT NULL,
  `Furnished` varchar(20) NOT NULL,
  `property_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_username`, `Type_bhk`, `Location`, `Locality`, `Address`, `Text_Area`, `Mobile_no`, `Seller_ph1`, `Seller_ph2`, `Seller_ph3`, `Seller_ph4`, `Seller_ph5`, `Rent`, `Furnished`, `property_type`) VALUES
('', '1bhk', 'vellore', 'qwerty', 'qwerty', 'qwerty', 2147483647, 'http://localhost/abhi/p2.jpg', 'http://localhost/abhi/p2.jpg', 'http://localhost/abhi/p2.jpg', 'http://localhost/abhi/p2.jpg', 'http://localhost/abhi/p2.jpg', 10000, 'semi-furnished', 'appartment');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
