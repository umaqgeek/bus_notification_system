-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 08:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buns`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `bus_id` int(11) NOT NULL,
  `bus_plate_no` varchar(10) NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_driver`
--

CREATE TABLE IF NOT EXISTS `bus_driver` (
  `bus_driver_id` int(10) NOT NULL,
  `driver_id` int(10) NOT NULL,
  `bus_id` int(10) NOT NULL,
  PRIMARY KEY (`bus_driver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver_location`
--

CREATE TABLE IF NOT EXISTS `driver_location` (
  `driver_location_id` int(10) NOT NULL,
  `qrcode_id` int(10) NOT NULL,
  `bus_driver_id` int(10) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`driver_location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `qrcode_id` varchar(50) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  PRIMARY KEY (`qrcode_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `ic_no` varchar(20) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `race` varchar(10) NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(30) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ic_no`, `full_name`, `race`, `gender`, `address`, `religion`, `contact_no`, `username`, `email`, `password`, `level`) VALUES
(1, '910815016521', 'Mohd Amir Rashidi Bin Hamzah', 'Melayu', 1, 'Muar, Johor', 'Islam', 198547541, 'amir', 'amirrashidi91@yahoo.com', '16ce5a47106fd0ec09a4f46564405a81', 1),
(2, '870101056128', 'Nur Balqis Bte Ahmad', 'Melayu', 2, 'Seremban', 'Islam', 145142541, 'admin', 'balqis@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `ut_id` int(11) NOT NULL,
  `ut_desc` varchar(30) NOT NULL,
  PRIMARY KEY (`ut_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`ut_id`, `ut_desc`) VALUES
(1, 'administrator'),
(2, 'driver'),
(3, 'passenger');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
