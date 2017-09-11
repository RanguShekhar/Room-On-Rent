-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 05:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `room`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `email`, `mobile`, `password`) VALUES
('Rakesh', 'rakeshvn526@gmail.com', '8985169219', 'rak123'),
('', '', '', ''),
('PARASHURAM', 'parashuram009@gmail.com', '9491201451', '502321'),
('Anand Kumar', 'anandkumarmettu@gmail.com', '8106660672', 'anand143'),
('Ganesh', 'ganesh.kanthiwar@gmail.como', '7661009411', 'gani123'),
('hari', 'hari@hari.hari', '1234567890', '1234567890'),
('RELLU MAHESH', 'maheshrellu555@gmail.com', '9492325225', 'mahgan'),
('Shekhar', 'shekhar.goud9@gmail.com', '9490128833', 'shekhar123'),
('Rahul Reddy', 'rahulanugu299@gmail.com', '9666843893', 'rahul123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
