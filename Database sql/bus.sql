-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2015 at 10:39 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus`
--

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
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ic_no`, `full_name`, `race`, `gender`, `address`, `religion`, `contact_no`, `email`, `username`, `password`, `level`, `status`) VALUES
(6, '2147483647', 'Amarul Samsudin', '1', 0, 'Pontian', '1', 2147483647, 'amarulsamsudin@gmail,com', 'amarul', '476db4000e1b97e5da629625145839c2', 1, 1),
(7, '910610105847', 'Mohd Adzhar Bin Kahar', '1', 0, 'Petaling Jaya', '1', 2147483647, 'jaa@gmail.com', 'jaaa', '5c47a79da5ece33687f062ac2260b9cb', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
