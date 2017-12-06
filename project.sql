-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2017 at 01:06 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

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
  `Seller_ph1` varchar(50) NOT NULL DEFAULT 'http://localhost/project/sample.jpg',
  `Seller_ph2` varchar(50) NOT NULL,
  `Seller_ph3` varchar(50) NOT NULL,
  `Seller_ph4` varchar(50) NOT NULL,
  `Seller_ph5` varchar(50) NOT NULL,
  `Rent` int(20) NOT NULL,
  `Furnished` varchar(20) NOT NULL,
  `property_type` varchar(30) NOT NULL,
  `uinque_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `property_name` varchar(100) NOT NULL,
  UNIQUE KEY `uinque_id` (`uinque_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_username`, `Type_bhk`, `Location`, `Locality`, `Address`, `Text_Area`, `Mobile_no`, `Seller_ph1`, `Seller_ph2`, `Seller_ph3`, `Seller_ph4`, `Seller_ph5`, `Rent`, `Furnished`, `property_type`, `uinque_id`, `name`, `property_name`) VALUES
('amey', '1bhk', 'vellore', 'katpadi', ' xyz', 'sbc', 2147483647, 'sample.jpg', 'sample.jpg', 'sample.jpg', 'sample.jpg', 'sample.jpg', 5000, 'fully-furnished', 'villa', 54, 'amey', 'hostel1'),
('abhinav', '1bhk', 'vellore', 'dominos', ' segsg', 'seggseg', 8765432, 'sample.jpg', '', '', '', '', 300000, 'fully-furnished', 'bunglow', 55, 'abhinav', 'home2'),
('amey', '1bhk', 'vellore', 'abc', ' scas', 'dscsd', 1234567890, 'sample.jpg', '', '', '', '', 5000, 'unfurnished', 'appartment', 56, 'abhinav', 'home3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
